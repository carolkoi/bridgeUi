<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateTicketRequest;
use App\Models\User;
use App\Repositories\TicketRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    private $ticketRepository;

    public function __construct(TicketRepository $ticketRepo)
    {
        $this->ticketRepository = $ticketRepo;
    }

    function getTickets(CreateTicketRequest $request){
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['department_id'] = User::find(Auth::user()->id)->department_id;
        $input['location'] = User::find(Auth::user()->id)->location;
//        dd($input);

        $ticket = $this->ticketRepository->create($input);
//        return response()->json($ticket);

        Flash::success('Ticket saved successfully.');

        return redirect(route('tickets.index'));
    }
}
