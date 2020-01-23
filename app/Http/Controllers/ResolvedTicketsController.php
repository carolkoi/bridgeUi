<?php

namespace App\Http\Controllers;

use App\DataTables\ResolvedTicketsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateResolvedTicketsRequest;
use App\Http\Requests\UpdateResolvedTicketsRequest;
use App\Repositories\ResolvedTicketsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ResolvedTicketsController extends AppBaseController
{
    /** @var  ResolvedTicketsRepository */
    private $resolvedTicketsRepository;

    public function __construct(ResolvedTicketsRepository $resolvedTicketsRepo)
    {
        $this->resolvedTicketsRepository = $resolvedTicketsRepo;
    }

    /**
     * Display a listing of the ResolvedTickets.
     *
     * @param ResolvedTicketsDataTable $resolvedTicketsDataTable
     * @return Response
     */
    public function index(ResolvedTicketsDataTable $resolvedTicketsDataTable)
    {
        return $resolvedTicketsDataTable->render('resolved_tickets.index');
    }

    /**
     * Show the form for creating a new ResolvedTickets.
     *
     * @return Response
     */
    public function create()
    {
        return view('resolved_tickets.create');
    }

    /**
     * Store a newly created ResolvedTickets in storage.
     *
     * @param CreateResolvedTicketsRequest $request
     *
     * @return Response
     */
    public function store(CreateResolvedTicketsRequest $request)
    {
        $input = $request->all();

        $resolvedTickets = $this->resolvedTicketsRepository->create($input);

        Flash::success('Resolved Tickets saved successfully.');

        return redirect(route('resolvedTickets.index'));
    }

    /**
     * Display the specified ResolvedTickets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $resolvedTickets = $this->resolvedTicketsRepository->find($id);

        if (empty($resolvedTickets)) {
            Flash::error('Resolved Tickets not found');

            return redirect(route('resolvedTickets.index'));
        }

        return view('resolved_tickets.show')->with('resolvedTickets', $resolvedTickets);
    }

    /**
     * Show the form for editing the specified ResolvedTickets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $resolvedTickets = $this->resolvedTicketsRepository->find($id);

        if (empty($resolvedTickets)) {
            Flash::error('Resolved Tickets not found');

            return redirect(route('resolvedTickets.index'));
        }

        return view('resolved_tickets.edit')->with('resolvedTickets', $resolvedTickets);
    }

    /**
     * Update the specified ResolvedTickets in storage.
     *
     * @param  int              $id
     * @param UpdateResolvedTicketsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResolvedTicketsRequest $request)
    {
        $resolvedTickets = $this->resolvedTicketsRepository->find($id);

        if (empty($resolvedTickets)) {
            Flash::error('Resolved Tickets not found');

            return redirect(route('resolvedTickets.index'));
        }

        $resolvedTickets = $this->resolvedTicketsRepository->update($request->all(), $id);

        Flash::success('Resolved Tickets updated successfully.');

        return redirect(route('resolvedTickets.index'));
    }

    /**
     * Remove the specified ResolvedTickets from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $resolvedTickets = $this->resolvedTicketsRepository->find($id);

        if (empty($resolvedTickets)) {
            Flash::error('Resolved Tickets not found');

            return redirect(route('resolvedTickets.index'));
        }

        $this->resolvedTicketsRepository->delete($id);

        Flash::success('Resolved Tickets deleted successfully.');

        return redirect(route('resolvedTickets.index'));
    }
}
