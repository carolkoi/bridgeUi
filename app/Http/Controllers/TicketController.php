<?php

namespace App\Http\Controllers;

use App\DataTables\TicketDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTicketRequest;
use App\Http\Requests\CreateKnowledgebaseArticleRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Mail\ticketAssigned;
use App\Models\Category;
use App\Models\Department;
use App\Models\IssueType;
use App\Models\KnowledgebaseArticle;
use App\Models\User;
use App\Repositories\KnowledgebaseArticleRepository;
use App\Repositories\TicketRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Response;

class TicketController extends AppBaseController
{
    /** @var  TicketRepository */
    private $ticketRepository;
    private $knowledgeBaseArticleRepository;

    public function __construct(TicketRepository $ticketRepo, KnowledgebaseArticleRepository $knowledgeBaseArticleRepo)
    {
        $this->ticketRepository = $ticketRepo;
        $this->knowledgeBaseArticleRepository = $knowledgeBaseArticleRepo;
    }

    /**
     * Display a listing of the Ticket.
     *
     * @param TicketDataTable $ticketDataTable
     * @return Response
     */
    public function index(TicketDataTable $ticketDataTable)
    {
        return $ticketDataTable->render('tickets.index');
    }

    /**
     * Show the form for creating a new Ticket.
     *
     * @return Response
     */
    public function create()
    {
        $issues = IssueType::all()->pluck('issue', 'id');

        return view('tickets.create', ['issues' => $issues]);
    }

    /**
     * Store a newly created Ticket in storage.
     *
     * @param CreateTicketRequest $request
     *
     * @return Response
     */
    public function store(CreateTicketRequest $request)
    {
        $input = $request->except('image');
        $input['user_id'] = Auth::user()->id;
        $input['department_id'] = User::find(Auth::user()->id)->department_id;
        $input['location'] = User::find(Auth::user()->id)->location;
//        dd($input);

        $ticket = $this->ticketRepository->create($input);

        foreach ($request->input('image', []) as $file) {
            $ticket->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
        }
//        return response()->json($ticket);

        Flash::success('Ticket saved successfully.');

        return redirect(route('tickets.index'));
    }

    /**
     * Display the specified Ticket.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ticket = $this->ticketRepository->find($id);
        $issue = IssueType::pluck('issue', 'id');
        $categories = Category::pluck('category', 'id');
        $user = User::find($ticket->user_id);
        $department = Department::find($ticket->department_id)->department;

        if (empty($ticket)) {
            Flash::error('Ticket not found');

            return redirect(route('tickets.index'));
        }

        return view('tickets.show')->with(['ticket' => $ticket,
            'issue' => $issue,
            'user' => $user,
            'department' => $department,
            'categories' => $categories]);
    }

    public function resolve($id, CreateKnowledgebaseArticleRequest $request)
    {
//        dd($request->all());
        $ticket = $this->ticketRepository->find($id);

        if (empty($ticket)) {
            Flash::error('Ticket not found');

            return redirect(route('tickets.index'));
        }
        $ticket = $this->ticketRepository->update([
            'resolved_status' => 1,
            'surrender_status' => 0
        ], $id);
        $input = [];
        $input['ticket_id'] = $request->input('id');
        $input['title'] = $request->input('title');
        $input['category_id'] = $request->input('category');
        $input['details'] = $request->input('issue').$request->input('solution');

        $knowledgeBase = $this->knowledgeBaseArticleRepository->create($input);

        Flash::success('Ticket resolved successfully.');

        return redirect(route('tickets.index'));
    }

    public function surrender($id, Request $request)
    {
//        dd($id);
        $ticket = $this->ticketRepository->find($id);
        $ticket = $this->ticketRepository->update([
            'surrender_status' => 1
        ], $id);
        return $ticket;

    }

    public function view($id)
    {
        $ticket = $this->ticketRepository->find($id);
        $issue = IssueType::pluck('issue', 'id');
        $categories = Category::pluck('category', 'id');
        $user = User::find($ticket->user_id);
        $department = Department::find($ticket->department_id)->department;
        $ict_staffs = User::with('tickets')->where(['ict_staff' => true])->pluck('name', 'id');
        $knowledge_base = KnowledgebaseArticle::where('ticket_id', $id)->get();
        if (empty($ticket)) {
            Flash::error('Ticket not found');

            return redirect(route('tickets.index'));
        }

        return view('tickets.resolve')->with(['ticket' => $ticket,
            'issue' => $issue,
            'user' => $user,
            'department' => $department,
            'categories' => $categories,
            'ict_staffs' => $ict_staffs,
            'knowledge_base' => $knowledge_base]);

    }

    public function close($id, Request $request)
    {
        dd($request->all());
        $ticket = $this->ticketRepository->find($id);
        $ticket = $this->ticketRepository->update([
            'closed_status' => 1
        ], $id);
        Flash::success('Ticket successfully resolved and closed.');

        return redirect(route('resolvedTickets.index'));

    }

    /**
     * Show the form for editing the specified Ticket.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ticket = $this->ticketRepository->find($id);
        $surrender_status = $ticket->surrender_status;
        $issues = IssueType::pluck('issue', 'id');

        $ict_staffs = User::with('tickets')->where(['ict_staff' => true])->pluck('name', 'id');

        if (empty($ticket)) {
            Flash::error('Ticket not found');

            return redirect(route('tickets.index'));
        }

        return view('tickets.edit')->with(['ticket' => $ticket, 'issues' => $issues,
            'ict_staffs' => $ict_staffs, 'surrender_status' => $surrender_status]);
    }

    /**
     * Update the specified Ticket in storage.
     *
     * @param  int              $id
     * @param UpdateTicketRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $ticket = $this->ticketRepository->find($id);

        if (empty($ticket)) {
            Flash::error('Ticket not found');

            return redirect(route('tickets.index'));
        }

        $ticket = $this->ticketRepository->update($request->all(), $id);
        $user = User::find($ticket->assign_to);
        Mail::to($user->email)->send(new ticketAssigned($ticket));

        Flash::success("Ticket assigned to {$user->name} successfully.");

        return redirect(route('tickets.index'));
    }

    /**
     * Remove the specified Ticket from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ticket = $this->ticketRepository->find($id);

        if (empty($ticket)) {
            Flash::error('Ticket not found');

            return redirect(route('tickets.index'));
        }

        $this->ticketRepository->delete($id);

        Flash::success('Ticket deleted successfully.');

        return redirect(route('tickets.index'));
    }

    public function storeMedia(Request $request){
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);

    }
}
