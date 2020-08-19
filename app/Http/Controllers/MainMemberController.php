<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMainMemberRequest;
use App\Http\Requests\UpdateMainMemberRequest;
use App\Models\Stdcode;
use App\Repositories\MainMemberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class MainMemberController extends AppBaseController
{
    /** @var  MainMemberRepository */
    private $mainMemberRepository;

    public function __construct(MainMemberRepository $mainMemberRepo)
    {
        $this->mainMemberRepository = $mainMemberRepo;
    }

    /**
     * Display a listing of the MainMember.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $mainMembers = $this->mainMemberRepository->all();

        return view('main_members.index')
            ->with('mainMembers', $mainMembers);
    }

    /**
     * Show the form for creating a new MainMember.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        $query = Stdcode::query();
        $stdcode = $query->get();
        $mproperty = null;
        $mpropertydata = array();
        $stdcodedata = array();
        foreach ($stdcode as $key => $value){

            $stdcodedata[''] = 'Choose Standard Code of Practice';
            $stdcodedata[$value->id] = $value->standard_code;

            if($value->id == 4){
                $mproperty = $value->properties;
                $mpropertydata[''] = 'Choose Material Property';
                foreach ($mproperty as $key => $value2){
                    $mpropertydata[$value2->property] = $value2->property;
                }
            }
        }


        return view('main_members.create')->with(['stdcode'=>$stdcodedata,'mproperty'=>$mpropertydata]);
    }

    /**
     * Store a newly created MainMember in storage.
     *
     * @param CreateMainMemberRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateMainMemberRequest $request)
    {
        $input = $request->all();

        $mainMember = $this->mainMemberRepository->create($input);

        Flash::success('Main Member saved successfully.');

        return redirect(route('mainMembers.index'));
    }

    /**
     * Display the specified MainMember.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $mainMember = $this->mainMemberRepository->find($id);

        if (empty($mainMember)) {
            Flash::error('Main Member not found');

            return redirect(route('mainMembers.index'));
        }

        return view('main_members.show')->with('mainMember', $mainMember);
    }

    /**
     * Show the form for editing the specified MainMember.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $mainMember = $this->mainMemberRepository->find($id);

        if (empty($mainMember)) {
            Flash::error('Main Member not found');

            return redirect(route('mainMembers.index'));
        }

        return view('main_members.edit')->with('mainMember', $mainMember);
    }

    /**
     * Update the specified MainMember in storage.
     *
     * @param int $id
     * @param UpdateMainMemberRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateMainMemberRequest $request)
    {
        $mainMember = $this->mainMemberRepository->find($id);

        if (empty($mainMember)) {
            Flash::error('Main Member not found');

            return redirect(route('mainMembers.index'));
        }

        $mainMember = $this->mainMemberRepository->update($request->all(), $id);

        Flash::success('Main Member updated successfully.');

        return redirect(route('mainMembers.index'));
    }

    /**
     * Remove the specified MainMember from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $mainMember = $this->mainMemberRepository->find($id);

        if (empty($mainMember)) {
            Flash::error('Main Member not found');

            return redirect(route('mainMembers.index'));
        }

        $this->mainMemberRepository->delete($id);

        Flash::success('Main Member deleted successfully.');

        return redirect(route('mainMembers.index'));
    }
}
