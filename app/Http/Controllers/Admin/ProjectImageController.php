<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateProjectImageRequest;
use App\Http\Requests\Admin\UpdateProjectImageRequest;
use App\Repositories\Admin\ProjectImageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class ProjectImageController extends AppBaseController
{
    private $uploadDir = "project_image/";
    /** @var  ProjectImageRepository */
    private $projectImageRepository;

    public function __construct(ProjectImageRepository $projectImageRepo)
    {
        $this->projectImageRepository = $projectImageRepo;
    }

    /**
     * Display a listing of the ProjectImage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectImageRepository->pushCriteria(new RequestCriteria($request));
        $projectImages = $this->projectImageRepository->all();

        return view('admin.project_images.index')
            ->with('projectImages', $projectImages);
    }

    /**
     * Show the form for creating a new ProjectImage.
     *
     * @return Response
     */
    public function create()
    {
        $projects = DB::table('project')->get();

        return view('admin.project_images.create',compact('projects'));
    }

    /**
     * Store a newly created ProjectImage in storage.
     *
     * @param CreateProjectImageRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectImageRequest $request)
    {
        $input = $request->all();

        
        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;

        $projectImage = $this->projectImageRepository->create($input);

        Flash::success('Project Image saved successfully.');

        return redirect(route('admin.projectImages.index'));
    }

    /**
     * Display the specified ProjectImage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projectImage = $this->projectImageRepository->findWithoutFail($id);

        if (empty($projectImage)) {
            Flash::error('Project Image not found');

            return redirect(route('admin.projectImages.index'));
        }

        return view('admin.project_images.show')->with('projectImage', $projectImage);
    }

    /**
     * Show the form for editing the specified ProjectImage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projectImage = $this->projectImageRepository->findWithoutFail($id);

        $projects = DB::table('project')->get();

        if (empty($projectImage)) {
            Flash::error('Project Image not found');

            return redirect(route('admin.projectImages.index'));
        }

        return view('admin.project_images.edit')
            ->with('projectImage', $projectImage)
            ->with('projects',$projects);
    }

    /**
     * Update the specified ProjectImage in storage.
     *
     * @param  int              $id
     * @param UpdateProjectImageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectImageRequest $request)
    {
		
		
		
		 $input = $request->all();

        
        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;
		
		
		
		
        $projectImage = $this->projectImageRepository->findWithoutFail($id);

        if (empty($projectImage)) {
            Flash::error('Project Image not found');

            return redirect(route('admin.projectImages.index'));
        }

        

        $projectImage = $this->projectImageRepository->update( $input, $id);

        Flash::success('Project Image updated successfully.');

        return redirect(route('admin.projectImages.index'));
    }

    /**
     * Remove the specified ProjectImage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projectImage = $this->projectImageRepository->findWithoutFail($id);

        if (empty($projectImage)) {
            Flash::error('Project Image not found');

            return redirect(route('admin.projectImages.index'));
        }

        $this->projectImageRepository->delete($id);

        Flash::success('Project Image deleted successfully.');

        return redirect(route('admin.projectImages.index'));
    }
}
