<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Bbsformula;
use App\Models\Element;
use App\Models\Project;
use App\Repositories\MemberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;
use Response;
use App\Formulas\BbsFormulas;

class MemberController extends AppBaseController
{
    /** @var  MemberRepository */
    private $memberRepository;

    public function __construct(MemberRepository $memberRepo)
    {
        $this->memberRepository = $memberRepo;
    }

    /**
     * Display a listing of the Member.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $members = $this->memberRepository->all();

        return view('members.index')
            ->with('members', $members);
    }

    /**
     * Show the form for creating a new Member.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create(Request $request)
    {
        $pid = decrypt($request->pid);
        $eid = decrypt($request->eid);
        $members = $this->memberRepository->all()->where('element_id','=',$eid)->where('project_id','=',$pid);
        //dd($members);
        $project = Project::where('id',$pid)->first();
        $element = Element::where('id',$eid)->get();
        $element2 = Element::where('id',$eid)->first();

        $stype = $element2->steeltype->name;
        $barsize = [
            ''=>'Choose Bar Size',
            $stype.'6' => $stype.'6',
            $stype.'8' => $stype.'8',
            $stype.'10' => $stype.'10',
            $stype.'12' => $stype.'12',
            $stype.'16' => $stype.'16',
            $stype.'20' => $stype.'20',
            $stype.'25' => $stype.'25',
            $stype.'32' => $stype.'32',
            $stype.'40' => $stype.'40',
            $stype.'50' => $stype.'50'
        ];

        $steeltypeid = $element2->steel_type_id;
        $stdcode = $element2->stdcode_id;
        //$stdcode = 2;
        //echo $steeltypeid; exit;
        //echo $stdcode; exit;
        $shapecodes = array();
        if($stdcode == 1){ //BB4466
            //$scodes = Bbsformula::where('stdcode_id', $stdcode)->get();
            if($stdcode == 1){ //STEEL TYPE R
                $scodes = Bbsformula::where(['stdcode_id' => $stdcode,'steel_type_r'=>1,'steel_type_t'=>0,'steel_type_y'=>0])->get();
            }

            if($stdcode == 2 || $stdcode == 3){ // STEEL TYPE T AND Y
                $scodes = Bbsformula::where(['stdcode_id' => $stdcode,'steel_type_r'=>0,'steel_type_t'=>1,'steel_type_y'=>1])->get();
            }
        }
        if($stdcode == 2) { //BS8866
            $scodes = Bbsformula::where('stdcode_id', $stdcode)->get();
        }

        //$scodes = Bbsformula::where('stdcode_id', $stdcode)->get();

        //dd($scodes);

        $shapecodes[''] = 'Choose Shape Code';
        foreach ($scodes as $key => $value){
            $shapecodes[$value->id] = $value->shape_code;
        }
        //dd($shapecodes);
        //$shapecodes = Bbsformula::where('');
        ///dd($element);

        return view('members.create')->with(['project'=>$project,'element'=>$element,'shapecodes'=>$shapecodes,'barsize'=>$barsize,'members'=>$members,'scodes'=>$scodes,'name'=>$request->name]);
    }

    /**
     * Store a newly created Member in storage.
     *
     * @param CreateMemberRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateMemberRequest $request)
    {
        //dd(Config::get('constants.bbs')['CONST1']);
        //dd($request);


        $total_no_of_bars = $request->no_of_bar_in_each * $request->total_members;

        $formula = new BbsFormulas($total_no_of_bars, $request->bar_size, $request->shape_code, $request->length_a, $request->length_b, $request->length_c, $request->length_d, $request->length_e, $request->length_r, $request->length_f);

        $totalbarlength = $formula->findtotalbarlength();

        $input2 = [
            'total_no_of_bars' => $total_no_of_bars,
            'total_length_of_bars' => $totalbarlength,
        ];

        $input = array_merge($request->all(),$input2);
//dd($input);
        $member = $this->memberRepository->create($input);

        Flash::success('Member saved successfully.');

        //$pid = decrypt($request->pid);
        //$eid = decrypt($request->eid);
        //$members = $this->memberRepository->all()->where('element_id','=',$eid)->where('project_id','=',$pid);
        //dd($members);

        //return back()->withInput(['pid'=>$request->pid,'eid'=>$request->eid]);
        //return redirect(route('members.create'));
        //return redirect(route('members.index'));
        return back()->withInput(['name'=>$request->name]);
    }


    /**
     * Display the specified Member.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('members.index'));
        }

        return view('members.show')->with('member', $member);
    }

    /**
     * Show the form for editing the specified Member.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('members.index'));
        }

        return view('members.edit')->with('member', $member);
    }

    /**
     * Update the specified Member in storage.
     *
     * @param int $id
     * @param UpdateMemberRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateMemberRequest $request)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('members.index'));
        }

        $member = $this->memberRepository->update($request->all(), $id);

        Flash::success('Member updated successfully.');

        return redirect(route('members.index'));
    }

    /**
     * Remove the specified Member from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('members.index'));
        }

        $this->memberRepository->delete($id);

        Flash::success('Member deleted successfully.');

        //$members = $this->memberRepository->all();
        //dd($members);

        return back();

       // return redirect(route('members.index'));
    }
}
