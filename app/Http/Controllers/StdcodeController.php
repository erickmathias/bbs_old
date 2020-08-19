<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStdcodeRequest;
use App\Http\Requests\UpdateStdcodeRequest;
use App\Repositories\StdcodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class StdcodeController extends AppBaseController
{
    /** @var  StdcodeRepository */
    private $stdcodeRepository;

    public function __construct(StdcodeRepository $stdcodeRepo)
    {
        $this->stdcodeRepository = $stdcodeRepo;
    }

    /**
     * Display a listing of the Stdcode.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $stdcodes = $this->stdcodeRepository->all();

        return view('stdcodes.index')
            ->with('stdcodes', $stdcodes);
    }

    /**
     * Show the form for creating a new Stdcode.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('stdcodes.create');
    }

    /**
     * Store a newly created Stdcode in storage.
     *
     * @param CreateStdcodeRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateStdcodeRequest $request)
    {
        $input = $request->all();

        $stdcode = $this->stdcodeRepository->create($input);

        Flash::success('Stdcode saved successfully.');

        return redirect(route('stdcodes.index'));
    }

    /**
     * Display the specified Stdcode.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $stdcode = $this->stdcodeRepository->find($id);

        if (empty($stdcode)) {
            Flash::error('Stdcode not found');

            return redirect(route('stdcodes.index'));
        }

        return view('stdcodes.show')->with('stdcode', $stdcode);
    }

    /**
     * Show the form for editing the specified Stdcode.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $stdcode = $this->stdcodeRepository->find($id);

        if (empty($stdcode)) {
            Flash::error('Stdcode not found');

            return redirect(route('stdcodes.index'));
        }

        return view('stdcodes.edit')->with('stdcode', $stdcode);
    }

    /**
     * Update the specified Stdcode in storage.
     *
     * @param int $id
     * @param UpdateStdcodeRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateStdcodeRequest $request)
    {
        $stdcode = $this->stdcodeRepository->find($id);

        if (empty($stdcode)) {
            Flash::error('Stdcode not found');

            return redirect(route('stdcodes.index'));
        }

        $stdcode = $this->stdcodeRepository->update($request->all(), $id);

        Flash::success('Stdcode updated successfully.');

        return redirect(route('stdcodes.index'));
    }

    /**
     * Remove the specified Stdcode from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $stdcode = $this->stdcodeRepository->find($id);

        if (empty($stdcode)) {
            Flash::error('Stdcode not found');

            return redirect(route('stdcodes.index'));
        }

        $this->stdcodeRepository->delete($id);

        Flash::success('Stdcode deleted successfully.');

        return redirect(route('stdcodes.index'));
    }
}
