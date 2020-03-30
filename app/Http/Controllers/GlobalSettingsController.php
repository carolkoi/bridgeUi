<?php

namespace App\Http\Controllers;

use App\DataTables\GlobalSettingsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateGlobalSettingsRequest;
use App\Http\Requests\UpdateGlobalSettingsRequest;
use App\Repositories\GlobalSettingsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class GlobalSettingsController extends AppBaseController
{
    /** @var  GlobalSettingsRepository */
    private $globalSettingsRepository;

    public function __construct(GlobalSettingsRepository $globalSettingsRepo)
    {
        $this->globalSettingsRepository = $globalSettingsRepo;
    }

    /**
     * Display a listing of the GlobalSettings.
     *
     * @param GlobalSettingsDataTable $globalSettingsDataTable
     * @return Response
     */
    public function index(GlobalSettingsDataTable $globalSettingsDataTable)
    {
        return $globalSettingsDataTable->render('global_settings.index');
    }

    /**
     * Show the form for creating a new GlobalSettings.
     *
     * @return Response
     */
    public function create()
    {
        return view('global_settings.create');
    }

    /**
     * Store a newly created GlobalSettings in storage.
     *
     * @param CreateGlobalSettingsRequest $request
     *
     * @return Response
     */
    public function store(CreateGlobalSettingsRequest $request)
    {
        $input = $request->all();

        $globalSettings = $this->globalSettingsRepository->create($input);

        Flash::success('Global Settings saved successfully.');

        return redirect(route('globalSettings.index'));
    }

    /**
     * Display the specified GlobalSettings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $globalSettings = $this->globalSettingsRepository->find($id);

        if (empty($globalSettings)) {
            Flash::error('Global Settings not found');

            return redirect(route('globalSettings.index'));
        }

        return view('global_settings.show')->with('globalSettings', $globalSettings);
    }

    /**
     * Show the form for editing the specified GlobalSettings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $globalSettings = $this->globalSettingsRepository->find($id);

        if (empty($globalSettings)) {
            Flash::error('Global Settings not found');

            return redirect(route('globalSettings.index'));
        }

        return view('global_settings.edit')->with('globalSettings', $globalSettings);
    }

    /**
     * Update the specified GlobalSettings in storage.
     *
     * @param  int              $id
     * @param UpdateGlobalSettingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGlobalSettingsRequest $request)
    {
        $globalSettings = $this->globalSettingsRepository->find($id);

        if (empty($globalSettings)) {
            Flash::error('Global Settings not found');

            return redirect(route('globalSettings.index'));
        }

        $globalSettings = $this->globalSettingsRepository->update($request->all(), $id);

        Flash::success('Global Settings updated successfully.');

        return redirect(route('globalSettings.index'));
    }

    /**
     * Remove the specified GlobalSettings from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $globalSettings = $this->globalSettingsRepository->find($id);

        if (empty($globalSettings)) {
            Flash::error('Global Settings not found');

            return redirect(route('globalSettings.index'));
        }

        $this->globalSettingsRepository->delete($id);

        Flash::success('Global Settings deleted successfully.');

        return redirect(route('globalSettings.index'));
    }
}
