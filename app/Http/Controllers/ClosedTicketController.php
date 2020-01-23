<?php

namespace App\Http\Controllers;

use App\DataTables\ClosedTicketDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClosedTicketRequest;
use App\Http\Requests\UpdateClosedTicketRequest;
use App\Repositories\ClosedTicketRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ClosedTicketController extends AppBaseController
{
    /** @var  ClosedTicketRepository */
    private $closedTicketRepository;

    public function __construct(ClosedTicketRepository $closedTicketRepo)
    {
        $this->closedTicketRepository = $closedTicketRepo;
    }

    /**
     * Display a listing of the ClosedTicket.
     *
     * @param ClosedTicketDataTable $closedTicketDataTable
     * @return Response
     */
    public function index(ClosedTicketDataTable $closedTicketDataTable)
    {
        return $closedTicketDataTable->render('closed_tickets.index');
    }

    /**
     * Show the form for creating a new ClosedTicket.
     *
     * @return Response
     */
    public function create()
    {
        return view('closed_tickets.create');
    }

    /**
     * Store a newly created ClosedTicket in storage.
     *
     * @param CreateClosedTicketRequest $request
     *
     * @return Response
     */
    public function store(CreateClosedTicketRequest $request)
    {
        $input = $request->all();

        $closedTicket = $this->closedTicketRepository->create($input);

        Flash::success('Closed Ticket saved successfully.');

        return redirect(route('closedTickets.index'));
    }

    /**
     * Display the specified ClosedTicket.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $closedTicket = $this->closedTicketRepository->find($id);

        if (empty($closedTicket)) {
            Flash::error('Closed Ticket not found');

            return redirect(route('closedTickets.index'));
        }

        return view('closed_tickets.show')->with('closedTicket', $closedTicket);
    }

    /**
     * Show the form for editing the specified ClosedTicket.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $closedTicket = $this->closedTicketRepository->find($id);

        if (empty($closedTicket)) {
            Flash::error('Closed Ticket not found');

            return redirect(route('closedTickets.index'));
        }

        return view('closed_tickets.edit')->with('closedTicket', $closedTicket);
    }

    /**
     * Update the specified ClosedTicket in storage.
     *
     * @param  int              $id
     * @param UpdateClosedTicketRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClosedTicketRequest $request)
    {
        $closedTicket = $this->closedTicketRepository->find($id);

        if (empty($closedTicket)) {
            Flash::error('Closed Ticket not found');

            return redirect(route('closedTickets.index'));
        }

        $closedTicket = $this->closedTicketRepository->update($request->all(), $id);

        Flash::success('Closed Ticket updated successfully.');

        return redirect(route('closedTickets.index'));
    }

    /**
     * Remove the specified ClosedTicket from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $closedTicket = $this->closedTicketRepository->find($id);

        if (empty($closedTicket)) {
            Flash::error('Closed Ticket not found');

            return redirect(route('closedTickets.index'));
        }

        $this->closedTicketRepository->delete($id);

        Flash::success('Closed Ticket deleted successfully.');

        return redirect(route('closedTickets.index'));
    }
}
