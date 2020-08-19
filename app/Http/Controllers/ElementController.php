<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateElementRequest;
use App\Http\Requests\UpdateElementRequest;
use App\Models\Stdcode;
use App\Models\Steeltype;
use App\Repositories\ElementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class ElementController extends AppBaseController
{
    /** @var  ElementRepository */
    private $elementRepository;

    public function __construct(ElementRepository $elementRepo)
    {
        $this->elementRepository = $elementRepo;
    }

    /**
     * Display a listing of the Element.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $elements = $this->elementRepository->all();

        return view('elements.index')
            ->with('elements', $elements);
    }

    /**
     * Show the form for creating a new Element.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create(Request $request)
    {
        //echo $request->pid; exit;
        $stdcodedata = array();
        $steeltypedata = array();

        $query = Stdcode::query();
        $stdcode = $query->get();

        foreach ($stdcode as $key => $value) {
            $stdcodedata[''] = 'Choose Standard Code of Practice';
            $stdcodedata[$value->id] = $value->standard_code;
        }

        $query = Steeltype::query();
        $steeltype = $query->get();

        foreach ($steeltype as $key => $value) {
            $steeltypedata[''] = 'Choose Standard Code of Practice';
            $steeltypedata[$value->id] = $value->name;
        }

        return view('elements.create')->with(['stdcode'=>$stdcodedata,'steeltype'=>$steeltypedata,'pid'=>$request->pid]);
    }

    /**
     * Store a newly created Element in storage.
     *
     * @param CreateElementRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateElementRequest $request)
    {
        $input = $request->all();

        $element = $this->elementRepository->create($input);

        Flash::success('Element saved successfully.');

        return back();
        //return redirect(route('elements.index'));
    }

    /**
     * Display the specified Element.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $element = $this->elementRepository->find($id);

        if (empty($element)) {
            Flash::error('Element not found');

            return redirect(route('elements.index'));
        }

        return view('elements.show')->with('element', $element);
    }

    /**
     * Show the form for editing the specified Element.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $element = $this->elementRepository->find($id);

        if (empty($element)) {
            Flash::error('Element not found');

            return redirect(route('elements.index'));
        }

        return view('elements.edit')->with('element', $element);
    }

    /**
     * Update the specified Element in storage.
     *
     * @param int $id
     * @param UpdateElementRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateElementRequest $request)
    {
        $element = $this->elementRepository->find($id);

        if (empty($element)) {
            Flash::error('Element not found');

            return redirect(route('elements.index'));
        }

        $element = $this->elementRepository->update($request->all(), $id);

        Flash::success('Element updated successfully.');

        return redirect(route('elements.index'));
    }

    /**
     * Remove the specified Element from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $element = $this->elementRepository->find($id);

        if (empty($element)) {
            Flash::error('Element not found');

            return redirect(route('elements.index'));
        }

        $this->elementRepository->delete($id);

        Flash::success('Element deleted successfully.');

        return redirect(route('elements.index'));
    }
}
