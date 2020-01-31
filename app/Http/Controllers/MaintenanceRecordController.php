<?php

namespace App\Http\Controllers;

use App\DataTables\MaintenanceRecordDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMaintenanceRecordRequest;
use App\Http\Requests\UpdateMaintenanceRecordRequest;
use App\Repositories\MaintenanceRecordRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MaintenanceRecordController extends AppBaseController
{
    /** @var  MaintenanceRecordRepository */
    private $maintenanceRecordRepository;

    public function __construct(MaintenanceRecordRepository $maintenanceRecordRepo)
    {
        $this->maintenanceRecordRepository = $maintenanceRecordRepo;
    }

    /**
     * Display a listing of the MaintenanceRecord.
     *
     * @param MaintenanceRecordDataTable $maintenanceRecordDataTable
     * @return Response
     */
    public function index(MaintenanceRecordDataTable $maintenanceRecordDataTable)
    {
        return $maintenanceRecordDataTable->render('maintenance_records.index');
    }

    /**
     * Show the form for creating a new MaintenanceRecord.
     *
     * @return Response
     */
    public function create()
    {
        return view('maintenance_records.create');
    }

    /**
     * Store a newly created MaintenanceRecord in storage.
     *
     * @param CreateMaintenanceRecordRequest $request
     *
     * @return Response
     */
    public function store(CreateMaintenanceRecordRequest $request)
    {
        $input = $request->all();

        $maintenanceRecord = $this->maintenanceRecordRepository->create($input);

        Flash::success('Maintenance Record saved successfully.');

        return redirect(route('maintenanceRecords.index'));
    }

    /**
     * Display the specified MaintenanceRecord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maintenanceRecord = $this->maintenanceRecordRepository->find($id);

        if (empty($maintenanceRecord)) {
            Flash::error('Maintenance Record not found');

            return redirect(route('maintenanceRecords.index'));
        }

        return view('maintenance_records.show')->with('maintenanceRecord', $maintenanceRecord);
    }

    /**
     * Show the form for editing the specified MaintenanceRecord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maintenanceRecord = $this->maintenanceRecordRepository->find($id);

        if (empty($maintenanceRecord)) {
            Flash::error('Maintenance Record not found');

            return redirect(route('maintenanceRecords.index'));
        }

        return view('maintenance_records.edit')->with('maintenanceRecord', $maintenanceRecord);
    }

    /**
     * Update the specified MaintenanceRecord in storage.
     *
     * @param  int              $id
     * @param UpdateMaintenanceRecordRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaintenanceRecordRequest $request)
    {
        $maintenanceRecord = $this->maintenanceRecordRepository->find($id);

        if (empty($maintenanceRecord)) {
            Flash::error('Maintenance Record not found');

            return redirect(route('maintenanceRecords.index'));
        }

        $maintenanceRecord = $this->maintenanceRecordRepository->update($request->all(), $id);

        Flash::success('Maintenance Record updated successfully.');

        return redirect(route('maintenanceRecords.index'));
    }

    /**
     * Remove the specified MaintenanceRecord from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maintenanceRecord = $this->maintenanceRecordRepository->find($id);

        if (empty($maintenanceRecord)) {
            Flash::error('Maintenance Record not found');

            return redirect(route('maintenanceRecords.index'));
        }

        $this->maintenanceRecordRepository->delete($id);

        Flash::success('Maintenance Record deleted successfully.');

        return redirect(route('maintenanceRecords.index'));
    }
}
