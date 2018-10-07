<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateProjectRequest;
use App\Http\Requests\Admin\UpdateProjectRequest;
use App\Repositories\Admin\ProjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class ProjectController extends AppBaseController
{
    /** @var  ProjectRepository */
    private $projectRepository;
    private $uploadDir = "project/";


    public function __construct(ProjectRepository $projectRepo)
    {
        $this->middleware('auth');
        $this->projectRepository = $projectRepo;
    }

    /**
     * Display a listing of the Project.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectRepository->pushCriteria(new RequestCriteria($request));
        $projects = $this->projectRepository->all();

        return view('admin.projects.index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new Project.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created Project in storage.
     *
     * @param CreateProjectRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectRequest $request)
    {
        $input = $request->all();

        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;

        $project = $this->projectRepository->create($input);


        Flash::success('Project saved successfully.');

        return redirect(route('admin.projects.index'));
    }

    /**
     * Display the specified Project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $project = $this->projectRepository->findWithoutFail($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('admin.projects.index'));
        }

        return view('admin.projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified Project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $project = $this->projectRepository->findWithoutFail($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('admin.projects.index'));
        }

        return view('admin.projects.edit')->with('project', $project);
    }

    /**
     * Update the specified Project in storage.
     *
     * @param  int              $id
     * @param UpdateProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectRequest $request)
    {
		$input = $request->all();
		
        $project = $this->projectRepository->findWithoutFail($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('admin.projects.index'));
        }

         
if( $request->file('image')){
        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;
		
		
}
        $project = $this->projectRepository->update($input, $id);

        Flash::success('Project updated successfully.');

        return redirect(route('admin.projects.index'));
    }

    /**
     * Remove the specified Project from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $project = $this->projectRepository->findWithoutFail($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('admin.projects.index'));
        }

        $this->projectRepository->delete($id);

        Flash::success('Project deleted successfully.');

        return redirect(route('admin.projects.index'));
    }
}
