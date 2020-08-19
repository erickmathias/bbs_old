<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMpropertyRequest;
use App\Http\Requests\UpdateMpropertyRequest;
use App\Repositories\MpropertyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class MpropertyController extends AppBaseController
{
    /** @var  MpropertyRepository */
    private $mpropertyRepository;

    public function __construct(MpropertyRepository $mpropertyRepo)
    {
        $this->mpropertyRepository = $mpropertyRepo;
    }

    /**
     * Display a listing of the Mproperty.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $mproperties = $this->mpropertyRepository->all();

        return view('mproperties.index')
            ->with('mproperties', $mproperties);
    }

    /**
     * Show the form for creating a new Mproperty.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('mproperties.create');
    }

    /**
     * Store a newly created Mproperty in storage.
     *
     * @param CreateMpropertyRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateMpropertyRequest $request)
    {
        $input = $request->all();

        $mproperty = $this->mpropertyRepository->create($input);

        Flash::success('Mproperty saved successfully.');

        return redirect(route('mproperties.index'));
    }

    /**
     * Display the specified Mproperty.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $mproperty = $this->mpropertyRepository->find($id);

        if (empty($mproperty)) {
            Flash::error('Mproperty not found');

            return redirect(route('mproperties.index'));
        }

        return view('mproperties.show')->with('mproperty', $mproperty);
    }

    /**
     * Show the form for editing the specified Mproperty.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $mproperty = $this->mpropertyRepository->find($id);

        if (empty($mproperty)) {
            Flash::error('Mproperty not found');

            return redirect(route('mproperties.index'));
        }

        return view('mproperties.edit')->with('mproperty', $mproperty);
    }

    /**
     * Update the specified Mproperty in storage.
     *
     * @param int $id
     * @param UpdateMpropertyRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateMpropertyRequest $request)
    {
        $mproperty = $this->mpropertyRepository->find($id);

        if (empty($mproperty)) {
            Flash::error('Mproperty not found');

            return redirect(route('mproperties.index'));
        }

        $mproperty = $this->mpropertyRepository->update($request->all(), $id);

        Flash::success('Mproperty updated successfully.');

        return redirect(route('mproperties.index'));
    }

    /**
     * Remove the specified Mproperty from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $mproperty = $this->mpropertyRepository->find($id);

        if (empty($mproperty)) {
            Flash::error('Mproperty not found');

            return redirect(route('mproperties.index'));
        }

        $this->mpropertyRepository->delete($id);

        Flash::success('Mproperty deleted successfully.');

        return redirect(route('mproperties.index'));
    }
}
