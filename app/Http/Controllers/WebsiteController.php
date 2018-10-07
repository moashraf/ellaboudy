<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nasution\Terbilang;
use App\Repositories\Admin\ProjectRepository;
use Flash;

class WebsiteController extends Controller
{
    //
    private $projectRepository;

    public function __construct(ProjectRepository $projectRepo)
    {
        $this->projectRepository = $projectRepo;
    }


	  public function  form(Request $request) 
    {
//dd($request->name);
        $to = "mohamed.be4em@gmail.com ,mmorsy.be4em@gmail.com";
        $subject = "ellaboudy";
        $neme = $request->name;
        $messagee =$request->messagee   ;
        $email =  $request->maile    ;
         $message="<html><head><title> ellaboudy  </title>
        </head><body><table>
        <tr><th>Firstname</th><th>message</th><th>email</th></tr>
        <tr> <td>$neme  </td><td>$messagee </td><td>$email  </td> </tr>
        </table></body></html> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@ellaboudy.com>' . "\r\n";

           if(isset( $request->name )){
        if(mail($to,$subject,$message,$headers)){
         	    return redirect('/');

        }else{  echo "Mail Not Sent"; } }  
        


    }
	
	
	
	 public function offers($id){
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $lang_id = $english_lang->id ;

		
       $offer = DB::table('offer')->where('id',$id)->first();
		        $offer_description = DB::table('offer_description')->where('offer_id',$id)->where('lang_id',$lang_id)->first();

 //dd($offer_description);
				
         $labels = DB::table('label_description')->where('lang_id',$lang_id)->get();

        if (empty($offer)) {
            Flash::error('Banner not found');

            return redirect(route('home'));
        }
        DB::enableQueryLog();

        
        return view('offers',compact('offer','offer_description','labels'));
    }
	
	
	
	
    public function index(){
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $lang_id = $english_lang->id ;
        $banners = [] ;
        $offers_final = [] ;
        $projects_final = [];
        $services_final = [] ;
        $sliders = DB::table('banner')->get();
        $social_media = DB::table('social_media')->get();

        foreach($sliders as $slider){
            $slider_description = DB::table('banner_description')->where('lang_id',$lang_id)->where('banner_id',$slider->id)->first();
            $slider->slider_description = $slider_description ;
            array_push($banners,$slider);
        }


        $offers = DB::table('offer')->get();
        
        foreach($offers as $offer){
            $offer_description = DB::table('offer_description')->where('lang_id',$lang_id)->where('offer_id',$offer->id)->first();
            $offer->offer_description = $offer_description ;
            array_push($offers_final,$offer);
        }


        $projects = DB::table('project')->get();

        $services = DB::table('service')->get();

        foreach($services as $service){
            $service_description = DB::table('service_description')->where('lang_id',$lang_id)->where('service_id',$service->id)->first();
            $service->service_description = $service_description ;
            array_push($services_final,$service);
        }

        
        $videos = DB::table('video')->get() ;

        $labels = DB::table('label_description')->where('lang_id',$lang_id)->get();



        return view('welcome',compact('social_media','banners','offers_final','projects','services_final','videos','labels'));
    }

    public function project($id){
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $lang_id = $english_lang->id ;

        $project = $this->projectRepository->findWithoutFail($id);
        $labels = DB::table('label_description')->where('lang_id',$lang_id)->get();

        if (empty($project)) {
            Flash::error('Banner not found');

            return redirect(route('home'));
        }
        DB::enableQueryLog();

        $projects = [];

        $project_images = DB::table('project_image')->where('project_id',$project->id)->get();
//dd($project_images);
        $project_videos = DB::table('project_video')->where('project_id',$project->id)->get();
        $project->images = $project_images; 
        $project->videos = $project_videos ;

        
        return view('projects',compact('project','labels'));
    }

    public function contact(){
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $lang_id = $english_lang->id ;

        $labels = DB::table('label_description')->where('lang_id',$lang_id)->get();

        return view('contact',compact('labels'));
    }

    public function about(){
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $lang_id = $english_lang->id ;

        $labels = DB::table('label_description')->where('lang_id',$lang_id)->get();

        return view('about',compact('labels'));
    }


}
