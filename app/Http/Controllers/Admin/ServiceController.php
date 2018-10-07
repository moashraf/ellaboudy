<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;
use App\Repositories\Admin\ServiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class ServiceController extends AppBaseController
{
    /** @var  ServiceRepository */
    private $serviceRepository;
    private $uploadDir = "service/";


    public function __construct(ServiceRepository $serviceRepo)
    {
        $this->middleware('auth');
        $this->serviceRepository = $serviceRepo;
    }

    /**
     * Display a listing of the Service.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviceRepository->pushCriteria(new RequestCriteria($request));
        $services = $this->serviceRepository->all();

        return view('admin.services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new Service.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created Service in storage.
     *
     * @param CreateServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequest $request)
    {
        $input = $request->all();

        // $service = $this->serviceRepository->create($input);

        $english_lang = DB::table('language')->get()->first();

        $arabic_lang = DB::table('language')->get()->last();


        // $banner = $this->bannerRepository->create($input);
        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;

        $service_id = DB::table('service')->insertGetId(
            ['image' => $input["image"]]
        );

        DB::table('service_description')->insert(
            ['lang_id' => $english_lang->id , 'title' => $input['title']['en'],'description' => $input["description"]['en'],'service_id' => $service_id]
        );

        
        DB::table('service_description')->insert(
            ['lang_id' => $arabic_lang->id , 'title' => $input['title']['ar'] ,'description' => $input["description"]['ar'],'service_id' => $service_id]
        );


        Flash::success('Service saved successfully.');

        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('admin.services.index'));
        }

        return view('admin.services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('admin.services.index'));
        }

        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $service_description_ar = DB::table('service_description')->where('lang_id',$arabic_lang->id)->where('service_id',$service->id)->first();
        $service_description_en = DB::table('service_description')->where('lang_id',$english_lang->id)->where('service_id',$service->id)->first();



        $title['ar'] = $service_description_ar->title ;
        $title['en'] = $service_description_en->title ;
        $description["ar"] = $service_description_ar->description ;
        $description["en"] = $service_description_en->description ;
        $service["title"] = $title ;
        $service["description"] = $description ;
 
        return view('admin.services.edit')->with('service', $service);
    }

    /**
     * Update the specified Service in storage.
     *
     * @param  int              $id
     * @param UpdateServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequest $request)
    {
		  $input = $request->all();

        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('admin.services.index'));
        }

   

        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;
		
		
		  
        $service = $this->serviceRepository->update(  $input, $id);

    // dd("ddd");
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $service_description_ar = DB::table('service_description')->where('lang_id',$arabic_lang->id)->where('service_id',$service->id)->first();
        $service_description_en = DB::table('service_description')->where('lang_id',$english_lang->id)->where('service_id',$service->id)->first();

        $service_description_ar->title = $request->title["ar"];
        $service_description_ar->description = $request->description["ar"];
        
        $service_description_en->title = $request->title["en"];
        $service_description_en->description = $request->description["en"];
        
        DB::table('service_description')
        ->where('id',$service_description_en->id)
        ->update([
            'title' => $service_description_en->title,'description' => $service_description_en->description
        ]);


        DB::table('service_description')
        ->where('id',$service_description_ar->id)
        ->update([
            'title' => $service_description_ar->title,'description' => $service_description_ar->description
        ]);


        Flash::success('Service updated successfully.');

        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified Service from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('admin.services.index'));
        }

        $this->serviceRepository->delete($id);

        Flash::success('Service deleted successfully.');

        return redirect(route('admin.services.index'));
    }
}
