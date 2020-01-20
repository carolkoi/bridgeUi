<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Models\User;
use App\Repositories\TicketRepository;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Resources\TicketResource;
use Illuminate\Support\Facades\Auth;

class TicketController extends AppBaseController
{
    private $ticketRepository;

    public function __construct(TicketRepository $ticketRepo)
    {
        $this->ticketRepository = $ticketRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TicketResource::collection(Ticket::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['department_id'] = User::find(Auth::user()->id)->department_id;
        $input['location'] = User::find(Auth::user()->id)->location;

        $ticket = $this->ticketRepository->create($input);
        return new TicketResource($ticket);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new TicketResource($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return response()->json(null, 204);
    }
}
