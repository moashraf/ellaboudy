<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateVideoProjectRequest;
use App\Http\Requests\Admin\UpdateVideoProjectRequest;
use App\Repositories\Admin\VideoProjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class VideoProjectController extends AppBaseController
{
    /** @var  VideoProjectRepository */
    private $videoProjectRepository;

    public function __construct(VideoProjectRepository $videoProjectRepo)
    {
        $this->videoProjectRepository = $videoProjectRepo;
    }

    /**
     * Display a listing of the VideoProject.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->videoProjectRepository->pushCriteria(new RequestCriteria($request));
        $videoProjects = $this->videoProjectRepository->all();

        return view('admin.video_projects.index')
            ->with('videoProjects', $videoProjects);
    }

    /**
     * Show the form for creating a new VideoProject.
     *
     * @return Response
     */
    public function create()
    {
        $projects = DB::table('project')->get();


        return view('admin.video_projects.create',compact('projects'));
    }

    /**
     * Store a newly created VideoProject in storage.
     *
     * @param CreateVideoProjectRequest $request
     *
     * @return Response
     */
    public function store(CreateVideoProjectRequest $request)
    {
        $input = $request->all();

        $videoProject = $this->videoProjectRepository->create($input);

        Flash::success('Video Project saved successfully.');

        return redirect(route('admin.videoProjects.index'));
    }

    /**
     * Display the specified VideoProject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $videoProject = $this->videoProjectRepository->findWithoutFail($id);

        if (empty($videoProject)) {
            Flash::error('Video Project not found');

            return redirect(route('admin.videoProjects.index'));
        }

        return view('admin.video_projects.show')->with('videoProject', $videoProject);
    }

    /**
     * Show the form for editing the specified VideoProject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $videoProject = $this->videoProjectRepository->findWithoutFail($id);
        $projects = DB::table('project')->get();

        if (empty($videoProject)) {
            Flash::error('Video Project not found');

            return redirect(route('admin.videoProjects.index'));
        }

        return view('admin.video_projects.edit')->with('videoProject', $videoProject)->with('projects',$projects);
    }

    /**
     * Update the specified VideoProject in storage.
     *
     * @param  int              $id
     * @param UpdateVideoProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVideoProjectRequest $request)
    {
        $videoProject = $this->videoProjectRepository->findWithoutFail($id);

        if (empty($videoProject)) {
            Flash::error('Video Project not found');

            return redirect(route('admin.videoProjects.index'));
        }

        $videoProject = $this->videoProjectRepository->update($request->all(), $id);

        Flash::success('Video Project updated successfully.');

        return redirect(route('admin.videoProjects.index'));
    }

    /**
     * Remove the specified VideoProject from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $videoProject = $this->videoProjectRepository->findWithoutFail($id);

        if (empty($videoProject)) {
            Flash::error('Video Project not found');

            return redirect(route('admin.videoProjects.index'));
        }

        $this->videoProjectRepository->delete($id);

        Flash::success('Video Project deleted successfully.');

        return redirect(route('admin.videoProjects.index'));
    }
}
