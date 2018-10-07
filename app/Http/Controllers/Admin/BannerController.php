<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Repositories\Admin\BannerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class BannerController extends AppBaseController
{
    /** @var  BannerRepository */
    private $bannerRepository;
    private $uploadDir = "slider/";
    
    public function __construct(BannerRepository $bannerRepo)
    {
        $this->middleware('auth');
        $this->bannerRepository = $bannerRepo;
    }


    /**
     * Display a listing of the Banner.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bannerRepository->pushCriteria(new RequestCriteria($request));
        $banners = $this->bannerRepository->all();

        return view('admin.banners.index')
            ->with('banners', $banners);
    }

    /**
     * Show the form for creating a new Banner.
     *
     * @return Response
     */
    public function create()
    {
        $projects = DB::table('project')->get();
        return view('admin.banners.create',compact('projects'));
    }

    /**
     * Store a newly created Banner in storage.
     *
     * @param CreateBannerRequest $request
     *
     * @return Response
     */
    public function store(CreateBannerRequest $request)
    {
        
        $input = $request->all();

        $english_lang = DB::table('language')->get()->first();

        $arabic_lang = DB::table('language')->get()->last();


        // $banner = $this->bannerRepository->create($input);
        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;

        $banner_id = DB::table('banner')->insertGetId(
            ['image' => $input["image"], 'project_route' => $input["project_route"]]
        );

        DB::table('banner_description')->insert(
            ['lang_id' => $english_lang->id , 'title' => $input['title']['en'],'description' => $input['description']['en'],'btn_text' => $input["btn_text"]['en'] ,
                'banner_id' => $banner_id]
        );

        
        DB::table('banner_description')->insert(
            ['lang_id' => $arabic_lang->id , 'title' => $input['title']['ar'],'description' => $input['description']['ar'],'btn_text' => $input["btn_text"]['ar'],
            'banner_id' => $banner_id]
        );

        

        Flash::success('Banner saved successfully.');

        return redirect(route('admin.banners.index'));
    }

    /**
     * Display the specified Banner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        return view('admin.banners.show')->with('banner', $banner);
    }

    /**
     * Show the form for editing the specified Banner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);
        $projects = DB::table('project')->get();

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $banner_description_ar = DB::table('banner_description')->where('lang_id',$arabic_lang->id)->where('banner_id',$banner->id)->first();
        $banner_description_en = DB::table('banner_description')->where('lang_id',$english_lang->id)->where('banner_id',$banner->id)->first();

        $banner["title"] = "Test";

        $title['ar'] = $banner_description_ar->title ;
        $title['en'] = $banner_description_en->title ;
        $description["ar"] = $banner_description_ar->description ;
        $description["en"] = $banner_description_en->description ;
        $btn_text["ar"] = $banner_description_ar->btn_text ;
        $btn_text["en"] = $banner_description_en->btn_text ;

        $banner["title"] = $title ;
        $banner["description"] = $description ;
        $banner["btn_text"] = $btn_text ;
        

        return view('admin.banners.edit')
        ->with('banner', $banner)
        ->with('projects',$projects);
    }

    /**
     * Update the specified Banner in storage.
     *
     * @param  int              $id
     * @param UpdateBannerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBannerRequest $request)
    {
		
		        $input = $request->all();

				
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }


        if(request()->hasFile('image')){ 
		
		 
	   
	   
            $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($this->uploadDir), $photoName);
            $input["image"] = $this->uploadDir . $photoName ;
			
			
        }
        $banner = $this->bannerRepository->update($input , $id);
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $banner_description_ar = DB::table('banner_description')->where('lang_id',$arabic_lang->id)->where('banner_id',$banner->id)->first();
        $banner_description_en = DB::table('banner_description')->where('lang_id',$english_lang->id)->where('banner_id',$banner->id)->first();

        $banner_description_ar->title = $request->title["ar"];
        $banner_description_ar->description = $request->description["ar"];
        $banner_description_ar->btn_text = $request->btn_text["ar"];
        
        $banner_description_en->title = $request->title["en"];
        $banner_description_en->description = $request->description["en"];
        $banner_description_en->btn_text = $request->btn_text["en"];

        DB::table('banner_description')
        ->where('id',$banner_description_en->id)
        ->update([
            'title' => $banner_description_en->title,'description' => $banner_description_en->description,'btn_text' => $banner_description_en->btn_text
        ]);


        DB::table('banner_description')
        ->where('id',$banner_description_ar->id)
        ->update([
            'title' => $banner_description_ar->title,'description' => $banner_description_ar->description,'btn_text' => $banner_description_ar->btn_text
        ]);


        Flash::success('Banner updated successfully.');

        return redirect(route('admin.banners.index'));
    }

    /**
     * Remove the specified Banner from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        $this->bannerRepository->delete($id);

        Flash::success('Banner deleted successfully.');

        return redirect(route('admin.banners.index'));
    }
}
