<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Clients;
use App\Models\Element;
use App\Models\Stdcode;
use App\Models\Steeltype;
use App\Repositories\ProjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use PDF;

class ProjectController extends AppBaseController
{
    /** @var  ProjectRepository */
    private $projectRepository;

    public function __construct(ProjectRepository $projectRepo)
    {
        $this->projectRepository = $projectRepo;
    }

    /**
     * Display a listing of the Project.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $projects = $this->projectRepository->all();

        return view('projects.index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new Project.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        $clients = Clients::pluck('client_name', 'id');
        $clients[0] = 'Select Target Client';
        // print_r($clients);
        return view('projects.create')->with(['clients' => $clients]);
    }

    /**
     * Store a newly created Project in storage.
     *
     * @param CreateProjectRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateProjectRequest $request)
    {
        //dd($request->client_id);
        $input = $request->all();

        $project = $this->projectRepository->create($input);

        Flash::success('Project saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified Project.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $project = $this->projectRepository->find($id);
//        $project = $this->projectRepository->find(decrypt($id));

        //dd($project); exit;

        $query = Element::query();
        $element = $query->where('project_id', $project->id)->get();
        //dd($element);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

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

        //return view('elements.create')->with(['stdcode'=>$stdcodedata,'steeltype'=>$steeltypedata,'pid'=>$request->pid]);


        return view('projects.show')->with(['project' => $project, 'element' => $element, 'stdcode' => $stdcodedata, 'steeltype' => $steeltypedata, 'pid' => $id]);
//        return view('projects.show')->with(['project' => $project, 'element' => $element, 'stdcode' => $stdcodedata, 'steeltype' => $steeltypedata, 'pid' => decrypt($id)]);
    }

    public function printPDF($id)
    {
        //dd($id);
        $project = $this->projectRepository->find($id);
//        $project = $this->projectRepository->find(decrypt($id));

        $data = [
            'project'=>$project,
        ];

        $filename = 'test.pdf';
        $pdf = PDF::loadView('pdf_project_cover', $data)->setPaper('a4', 'portrait');
        return $pdf->stream($filename,array('Attachment'=>0));
        //return $pdf->download('project.pdf');
    }

    public function printPDF2($id)
    {
        //dd($id);
        $project = $this->projectRepository->find($id);
//        $project = $this->projectRepository->find(decrypt($id));

        $data = [
            'project'=>$project,
        ];

        $filename = 'test.pdf';
        $pdf = PDF::loadView('pdf_project_content', $data)->setPaper('a4', 'portrait');
        return $pdf->stream($filename,array('Attachment'=>0));
        //return $pdf->download('project.pdf');
    }


}

