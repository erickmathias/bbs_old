<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSteeltypeRequest;
use App\Http\Requests\UpdateSteeltypeRequest;
use App\Repositories\SteeltypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class SteeltypeController extends AppBaseController
{
    /** @var  SteeltypeRepository */
    private $steeltypeRepository;

    public function __construct(SteeltypeRepository $steeltypeRepo)
    {
        $this->steeltypeRepository = $steeltypeRepo;
    }

    /**
     * Display a listing of the Steeltype.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $steeltypes = $this->steeltypeRepository->all();

        return view('steeltypes.index')
            ->with('steeltypes', $steeltypes);
    }

    /**
     * Show the form for creating a new Steeltype.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('steeltypes.create');
    }

    /**
     * Store a newly created Steeltype in storage.
     *
     * @param CreateSteeltypeRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateSteeltypeRequest $request)
    {
        $input = $request->all();

        $steeltype = $this->steeltypeRepository->create($input);

        Flash::success('Steeltype saved successfully.');

        return redirect(route('steeltypes.index'));
    }

    /**
     * Display the specified Steeltype.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $steeltype = $this->steeltypeRepository->find($id);

        if (empty($steeltype)) {
            Flash::error('Steeltype not found');

            return redirect(route('steeltypes.index'));
        }

        return view('steeltypes.show')->with('steeltype', $steeltype);
    }

    /**
     * Show the form for editing the specified Steeltype.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $steeltype = $this->steeltypeRepository->find($id);

        if (empty($steeltype)) {
            Flash::error('Steeltype not found');

            return redirect(route('steeltypes.index'));
        }

        return view('steeltypes.edit')->with('steeltype', $steeltype);
    }

    /**
     * Update the specified Steeltype in storage.
     *
     * @param int $id
     * @param UpdateSteeltypeRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateSteeltypeRequest $request)
    {
        $steeltype = $this->steeltypeRepository->find($id);

        if (empty($steeltype)) {
            Flash::error('Steeltype not found');

            return redirect(route('steeltypes.index'));
        }

        $steeltype = $this->steeltypeRepository->update($request->all(), $id);

        Flash::success('Steeltype updated successfully.');

        return redirect(route('steeltypes.index'));
    }

    /**
     * Remove the specified Steeltype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $steeltype = $this->steeltypeRepository->find($id);

        if (empty($steeltype)) {
            Flash::error('Steeltype not found');

            return redirect(route('steeltypes.index'));
        }

        $this->steeltypeRepository->delete($id);

        Flash::success('Steeltype deleted successfully.');

        return redirect(route('steeltypes.index'));
    }
}
