<?php

namespace App\Http\Controllers;

use App\DataTables\ServiceProvidersDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateServiceProvidersRequest;
use App\Http\Requests\UpdateServiceProvidersRequest;
use App\Repositories\ServiceProvidersRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ServiceProvidersController extends AppBaseController
{
    /** @var  ServiceProvidersRepository */
    private $serviceProvidersRepository;

    public function __construct(ServiceProvidersRepository $serviceProvidersRepo)
    {
        $this->serviceProvidersRepository = $serviceProvidersRepo;
    }

    /**
     * Display a listing of the ServiceProviders.
     *
     * @param ServiceProvidersDataTable $serviceProvidersDataTable
     * @return Response
     */
    public function index(ServiceProvidersDataTable $serviceProvidersDataTable)
    {
        return $serviceProvidersDataTable->render('service_providers.index');
    }

    /**
     * Show the form for creating a new ServiceProviders.
     *
     * @return Response
     */
    public function create()
    {
        return view('service_providers.create');
    }

    /**
     * Store a newly created ServiceProviders in storage.
     *
     * @param CreateServiceProvidersRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceProvidersRequest $request)
    {
        $input = $request->all();

        $serviceProviders = $this->serviceProvidersRepository->create($input);

        Flash::success('Service Providers saved successfully.');

        return redirect(route('serviceProviders.index'));
    }

    /**
     * Display the specified ServiceProviders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceProviders = $this->serviceProvidersRepository->find($id);

        if (empty($serviceProviders)) {
            Flash::error('Service Providers not found');

            return redirect(route('serviceProviders.index'));
        }

        return view('service_providers.show')->with('serviceProviders', $serviceProviders);
    }

    /**
     * Show the form for editing the specified ServiceProviders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceProviders = $this->serviceProvidersRepository->find($id);

        if (empty($serviceProviders)) {
            Flash::error('Service Providers not found');

            return redirect(route('serviceProviders.index'));
        }

        return view('service_providers.edit')->with('serviceProviders', $serviceProviders);
    }

    /**
     * Update the specified ServiceProviders in storage.
     *
     * @param  int              $id
     * @param UpdateServiceProvidersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceProvidersRequest $request)
    {
        $serviceProviders = $this->serviceProvidersRepository->find($id);

        if (empty($serviceProviders)) {
            Flash::error('Service Providers not found');

            return redirect(route('serviceProviders.index'));
        }

        $serviceProviders = $this->serviceProvidersRepository->update($request->all(), $id);

        Flash::success('Service Providers updated successfully.');

        return redirect(route('serviceProviders.index'));
    }

    /**
     * Remove the specified ServiceProviders from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceProviders = $this->serviceProvidersRepository->find($id);

        if (empty($serviceProviders)) {
            Flash::error('Service Providers not found');

            return redirect(route('serviceProviders.index'));
        }

        $this->serviceProvidersRepository->delete($id);

        Flash::success('Service Providers deleted successfully.');

        return redirect(route('serviceProviders.index'));
    }
}
