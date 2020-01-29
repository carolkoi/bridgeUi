<?php

namespace App\Http\Controllers;

use App\DataTables\MaintenanceScheduleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMaintenanceScheduleRequest;
use App\Http\Requests\UpdateMaintenanceScheduleRequest;
use App\Models\Asset;
use App\Models\Cycle;
use App\Models\Department;
use App\Repositories\MaintenanceScheduleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MaintenanceScheduleController extends AppBaseController
{
    /** @var  MaintenanceScheduleRepository */
    private $maintenanceScheduleRepository;

    public function __construct(MaintenanceScheduleRepository $maintenanceScheduleRepo)
    {
        $this->maintenanceScheduleRepository = $maintenanceScheduleRepo;
    }

    /**
     * Display a listing of the MaintenanceSchedule.
     *
     * @param MaintenanceScheduleDataTable $maintenanceScheduleDataTable
     * @return Response
     */
    public function index(MaintenanceScheduleDataTable $maintenanceScheduleDataTable)
    {
        return $maintenanceScheduleDataTable->render('maintenance_schedules.index');
    }

    /**
     * Show the form for creating a new MaintenanceSchedule.
     *
     * @return Response
     */
    public function create()
    {
        $departments = Department::pluck('department', 'id');
        $assets = Asset::pluck('name', 'id');
        $cycles = Cycle::pluck('cycle', 'id');
        return view('maintenance_schedules.create', ['departments' => $departments,
            'assets' => $assets, 'cycles' => $cycles]);
    }

    /**
     * Store a newly created MaintenanceSchedule in storage.
     *
     * @param CreateMaintenanceScheduleRequest $request
     *
     * @return Response
     */
    public function store(CreateMaintenanceScheduleRequest $request)
    {
        $input = $request->all();

        $maintenanceSchedule = $this->maintenanceScheduleRepository->create($input);

        Flash::success('Maintenance Schedule saved successfully.');

        return redirect(route('maintenanceSchedules.index'));
    }

    /**
     * Display the specified MaintenanceSchedule.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maintenanceSchedule = $this->maintenanceScheduleRepository->find($id);

        if (empty($maintenanceSchedule)) {
            Flash::error('Maintenance Schedule not found');

            return redirect(route('maintenanceSchedules.index'));
        }

        return view('maintenance_schedules.show')->with('maintenanceSchedule', $maintenanceSchedule);
    }

    /**
     * Show the form for editing the specified MaintenanceSchedule.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maintenanceSchedule = $this->maintenanceScheduleRepository->find($id);
        $departments = Department::pluck('department', 'id');
        $assets = Asset::pluck('name', 'id');
        $cycles = Cycle::pluck('cycle', 'id');

        if (empty($maintenanceSchedule)) {
            Flash::error('Maintenance Schedule not found');

            return redirect(route('maintenanceSchedules.index'));
        }

        return view('maintenance_schedules.edit', ['departments' => $departments,
            'assets' => $assets, 'cycles' => $cycles])->with('maintenanceSchedule', $maintenanceSchedule);
    }

    /**
     * Update the specified MaintenanceSchedule in storage.
     *
     * @param  int              $id
     * @param UpdateMaintenanceScheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaintenanceScheduleRequest $request)
    {
        $maintenanceSchedule = $this->maintenanceScheduleRepository->find($id);

        if (empty($maintenanceSchedule)) {
            Flash::error('Maintenance Schedule not found');

            return redirect(route('maintenanceSchedules.index'));
        }

        $maintenanceSchedule = $this->maintenanceScheduleRepository->update($request->all(), $id);

        Flash::success('Maintenance Schedule updated successfully.');

        return redirect(route('maintenanceSchedules.index'));
    }

    /**
     * Remove the specified MaintenanceSchedule from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maintenanceSchedule = $this->maintenanceScheduleRepository->find($id);

        if (empty($maintenanceSchedule)) {
            Flash::error('Maintenance Schedule not found');

            return redirect(route('maintenanceSchedules.index'));
        }

        $this->maintenanceScheduleRepository->delete($id);

        Flash::success('Maintenance Schedule deleted successfully.');

        return redirect(route('maintenanceSchedules.index'));
    }
}
