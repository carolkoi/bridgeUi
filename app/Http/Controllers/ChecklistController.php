<?php

namespace App\Http\Controllers;

use App\DataTables\ChecklistDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateChecklistRequest;
use App\Http\Requests\UpdateChecklistRequest;
use App\Models\Checklist;
use App\Models\MaintenanceSchedule;
use App\Repositories\ChecklistRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ChecklistController extends AppBaseController
{
    /** @var  ChecklistRepository */
    private $checklistRepository;

    public function __construct(ChecklistRepository $checklistRepo)
    {
        $this->checklistRepository = $checklistRepo;
    }

    /**
     * Display a listing of the Checklist.
     *
     * @param ChecklistDataTable $checklistDataTable
     * @return Response
     */
    public function index(ChecklistDataTable $checklistDataTable)
    {
        return $checklistDataTable->render('checklists.index');
    }

    /**
     * Show the form for creating a new Checklist.
     *
     * @return Response
     */
    public function create($id)
    {
        $schedule = MaintenanceSchedule::find($id);
        $checklists = Checklist::where('maintenance_schedule_id', $id)->get();

        return view('checklists.index', [
            'schedule_id' => $id,
            'schedule' => $schedule,
            'checklists' => $checklists
        ]);
    }

    /**
     * Store a newly created Checklist in storage.
     *
     * @param CreateChecklistRequest $request
     *
     * @return Response
     */
    public function store(CreateChecklistRequest $request)
    {
//        dd($request);
        $input = $request->all();

        $checklist = $this->checklistRepository->create($input);

        Flash::success('Checklist saved successfully.');

        return redirect(url('checklist', ['id' => $request->maintenance_schedule_id]));
    }

    /**
     * Display the specified Checklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $checklist = $this->checklistRepository->find($id);

        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        return view('checklists.show')->with('checklist', $checklist);
    }

    /**
     * Show the form for editing the specified Checklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $checklist = $this->checklistRepository->find($id);

        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        return view('checklists.edit')->with('checklist', $checklist);
    }

    /**
     * Update the specified Checklist in storage.
     *
     * @param  int              $id
     * @param UpdateChecklistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChecklistRequest $request)
    {
        $checklist = $this->checklistRepository->find($id);

        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        $checklist = $this->checklistRepository->update($request->all(), $id);

        Flash::success('Checklist updated successfully.');

        return redirect(route('checklists.index'));
    }

    /**
     * Remove the specified Checklist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $checklist = $this->checklistRepository->find($id);

        if (empty($checklist)) {
            Flash::error('Checklist not found');

            return redirect(route('checklists.index'));
        }

        $this->checklistRepository->delete($id);

        Flash::success('Checklist deleted successfully.');

        return redirect(route('checklists.index'));
    }

    public function preview($id){
        $schedule = MaintenanceSchedule::with(['checklists'])->find($id);

        return view('checklists.preview', compact('schedule'));

    }
}
