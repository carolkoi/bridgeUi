<?php

namespace App\Http\Controllers;

use App\DataTables\IssueTypeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateIssueTypeRequest;
use App\Http\Requests\UpdateIssueTypeRequest;
use App\Repositories\IssueTypeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class IssueTypeController extends AppBaseController
{
    /** @var  IssueTypeRepository */
    private $issueTypeRepository;

    public function __construct(IssueTypeRepository $issueTypeRepo)
    {
        $this->issueTypeRepository = $issueTypeRepo;
    }

    /**
     * Display a listing of the IssueType.
     *
     * @param IssueTypeDataTable $issueTypeDataTable
     * @return Response
     */
    public function index(IssueTypeDataTable $issueTypeDataTable)
    {
        return $issueTypeDataTable->render('issue_types.index');
    }

    /**
     * Show the form for creating a new IssueType.
     *
     * @return Response
     */
    public function create()
    {
        return view('issue_types.create');
    }

    /**
     * Store a newly created IssueType in storage.
     *
     * @param CreateIssueTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateIssueTypeRequest $request)
    {
        $input = $request->all();

        $issueType = $this->issueTypeRepository->create($input);

        Flash::success('Issue Type saved successfully.');

        return redirect(route('issueTypes.index'));
    }

    /**
     * Display the specified IssueType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $issueType = $this->issueTypeRepository->find($id);

        if (empty($issueType)) {
            Flash::error('Issue Type not found');

            return redirect(route('issueTypes.index'));
        }

        return view('issue_types.show')->with('issueType', $issueType);
    }

    /**
     * Show the form for editing the specified IssueType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $issueType = $this->issueTypeRepository->find($id);

        if (empty($issueType)) {
            Flash::error('Issue Type not found');

            return redirect(route('issueTypes.index'));
        }

        return view('issue_types.edit')->with('issueType', $issueType);
    }

    /**
     * Update the specified IssueType in storage.
     *
     * @param  int              $id
     * @param UpdateIssueTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIssueTypeRequest $request)
    {
        $issueType = $this->issueTypeRepository->find($id);

        if (empty($issueType)) {
            Flash::error('Issue Type not found');

            return redirect(route('issueTypes.index'));
        }

        $issueType = $this->issueTypeRepository->update($request->all(), $id);

        Flash::success('Issue Type updated successfully.');

        return redirect(route('issueTypes.index'));
    }

    /**
     * Remove the specified IssueType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $issueType = $this->issueTypeRepository->find($id);

        if (empty($issueType)) {
            Flash::error('Issue Type not found');

            return redirect(route('issueTypes.index'));
        }

        $this->issueTypeRepository->delete($id);

        Flash::success('Issue Type deleted successfully.');

        return redirect(route('issueTypes.index'));
    }
}
