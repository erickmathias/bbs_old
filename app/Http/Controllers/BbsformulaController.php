<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBbsformulaRequest;
use App\Http\Requests\UpdateBbsformulaRequest;
use App\Repositories\BbsformulaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class BbsformulaController extends AppBaseController
{
    /** @var  BbsformulaRepository */
    private $bbsformulaRepository;

    public function __construct(BbsformulaRepository $bbsformulaRepo)
    {
        $this->bbsformulaRepository = $bbsformulaRepo;
    }

    /**
     * Display a listing of the Bbsformula.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $bbsformulas = $this->bbsformulaRepository->all();

        return view('bbsformulas.index')
            ->with('bbsformulas', $bbsformulas);
    }

    /**
     * Show the form for creating a new Bbsformula.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('bbsformulas.create');
    }

    /**
     * Store a newly created Bbsformula in storage.
     *
     * @param CreateBbsformulaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateBbsformulaRequest $request)
    {
        $input = $request->all();

        $bbsformula = $this->bbsformulaRepository->create($input);

        Flash::success('Bbsformula saved successfully.');

        return redirect(route('bbsformulas.index'));
    }

    /**
     * Display the specified Bbsformula.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $bbsformula = $this->bbsformulaRepository->find($id);

        if (empty($bbsformula)) {
            Flash::error('Bbsformula not found');

            return redirect(route('bbsformulas.index'));
        }

        return view('bbsformulas.show')->with('bbsformula', $bbsformula);
    }

    /**
     * Show the form for editing the specified Bbsformula.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $bbsformula = $this->bbsformulaRepository->find($id);

        if (empty($bbsformula)) {
            Flash::error('Bbsformula not found');

            return redirect(route('bbsformulas.index'));
        }

        return view('bbsformulas.edit')->with('bbsformula', $bbsformula);
    }

    /**
     * Update the specified Bbsformula in storage.
     *
     * @param int $id
     * @param UpdateBbsformulaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateBbsformulaRequest $request)
    {
        $bbsformula = $this->bbsformulaRepository->find($id);

        if (empty($bbsformula)) {
            Flash::error('Bbsformula not found');

            return redirect(route('bbsformulas.index'));
        }

        $bbsformula = $this->bbsformulaRepository->update($request->all(), $id);

        Flash::success('Bbsformula updated successfully.');

        return redirect(route('bbsformulas.index'));
    }

    /**
     * Remove the specified Bbsformula from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $bbsformula = $this->bbsformulaRepository->find($id);

        if (empty($bbsformula)) {
            Flash::error('Bbsformula not found');

            return redirect(route('bbsformulas.index'));
        }

        $this->bbsformulaRepository->delete($id);

        Flash::success('Bbsformula deleted successfully.');

        return redirect(route('bbsformulas.index'));
    }
}
