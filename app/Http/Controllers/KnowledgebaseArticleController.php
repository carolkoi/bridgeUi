<?php

namespace App\Http\Controllers;

use App\DataTables\KnowledgebaseArticleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateKnowledgebaseArticleRequest;
use App\Http\Requests\UpdateKnowledgebaseArticleRequest;
use App\Repositories\KnowledgebaseArticleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class KnowledgebaseArticleController extends AppBaseController
{
    /** @var  KnowledgebaseArticleRepository */
    private $knowledgebaseArticleRepository;

    public function __construct(KnowledgebaseArticleRepository $knowledgebaseArticleRepo)
    {
        $this->knowledgebaseArticleRepository = $knowledgebaseArticleRepo;
    }

    /**
     * Display a listing of the KnowledgebaseArticle.
     *
     * @param KnowledgebaseArticleDataTable $knowledgebaseArticleDataTable
     * @return Response
     */
    public function index(KnowledgebaseArticleDataTable $knowledgebaseArticleDataTable)
    {
        return $knowledgebaseArticleDataTable->render('knowledgebase_articles.index');
    }

    /**
     * Show the form for creating a new KnowledgebaseArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('knowledgebase_articles.create');
    }

    /**
     * Store a newly created KnowledgebaseArticle in storage.
     *
     * @param CreateKnowledgebaseArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateKnowledgebaseArticleRequest $request)
    {
        $input = $request->all();

        $knowledgebaseArticle = $this->knowledgebaseArticleRepository->create($input);

        Flash::success('Knowledgebase Article saved successfully.');

        return redirect(route('knowledgebaseArticles.index'));
    }

    /**
     * Display the specified KnowledgebaseArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $knowledgebaseArticle = $this->knowledgebaseArticleRepository->find($id);

        if (empty($knowledgebaseArticle)) {
            Flash::error('Knowledgebase Article not found');

            return redirect(route('knowledgebaseArticles.index'));
        }

        return view('knowledgebase_articles.show')->with('knowledgebaseArticle', $knowledgebaseArticle);
    }

    /**
     * Show the form for editing the specified KnowledgebaseArticle.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $knowledgebaseArticle = $this->knowledgebaseArticleRepository->find($id);

        if (empty($knowledgebaseArticle)) {
            Flash::error('Knowledgebase Article not found');

            return redirect(route('knowledgebaseArticles.index'));
        }

        return view('knowledgebase_articles.edit')->with('knowledgebaseArticle', $knowledgebaseArticle);
    }

    /**
     * Update the specified KnowledgebaseArticle in storage.
     *
     * @param  int              $id
     * @param UpdateKnowledgebaseArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKnowledgebaseArticleRequest $request)
    {
        $knowledgebaseArticle = $this->knowledgebaseArticleRepository->find($id);

        if (empty($knowledgebaseArticle)) {
            Flash::error('Knowledgebase Article not found');

            return redirect(route('knowledgebaseArticles.index'));
        }

        $knowledgebaseArticle = $this->knowledgebaseArticleRepository->update($request->all(), $id);

        Flash::success('Knowledgebase Article updated successfully.');

        return redirect(route('knowledgebaseArticles.index'));
    }

    /**
     * Remove the specified KnowledgebaseArticle from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $knowledgebaseArticle = $this->knowledgebaseArticleRepository->find($id);

        if (empty($knowledgebaseArticle)) {
            Flash::error('Knowledgebase Article not found');

            return redirect(route('knowledgebaseArticles.index'));
        }

        $this->knowledgebaseArticleRepository->delete($id);

        Flash::success('Knowledgebase Article deleted successfully.');

        return redirect(route('knowledgebaseArticles.index'));
    }
}
