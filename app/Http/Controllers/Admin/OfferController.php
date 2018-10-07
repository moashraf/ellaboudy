<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateOfferRequest;
use App\Http\Requests\Admin\UpdateOfferRequest;
use App\Repositories\Admin\OfferRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class OfferController extends AppBaseController
{
    /** @var  OfferRepository */
    private $offerRepository;
    private $uploadDir = "slider/";

    public function __construct(OfferRepository $offerRepo)
    {
        $this->middleware('auth');
        $this->offerRepository = $offerRepo;
    }

    /**
     * Display a listing of the Offer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->offerRepository->pushCriteria(new RequestCriteria($request));
        $offers = $this->offerRepository->all();

        return view('admin.offers.index')
            ->with('offers', $offers);
    }

    /**
     * Show the form for creating a new Offer.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created Offer in storage.
     *
     * @param CreateOfferRequest $request
     *
     * @return Response
     */
    public function store(CreateOfferRequest $request)
    {
        $input = $request->all();

        $english_lang = DB::table('language')->get()->first();

        $arabic_lang = DB::table('language')->get()->last();


        // $banner = $this->bannerRepository->create($input);
        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;

        $offer_id = DB::table('offer')->insertGetId(
            ['image' => $input["image"]]
        );

        DB::table('offer_description')->insert(
            ['lang_id' => $english_lang->id , 'title' => $input['title']['en'],'description' => $input["description"]['en'],'offer_id' => $offer_id]
        );

        
        DB::table('offer_description')->insert(
            ['lang_id' => $arabic_lang->id , 'title' => $input['title']['ar'] ,'description' => $input["description"]['ar'],'offer_id' => $offer_id]
        );


        Flash::success('Offer saved successfully.');

        return redirect(route('admin.offers.index'));
    }

    /**
     * Display the specified Offer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offer = $this->offerRepository->findWithoutFail($id);

        if (empty($offer)) {
            Flash::error('Offer not found');

            return redirect(route('admin.offers.index'));
        }

        return view('admin.offers.show')->with('offer', $offer);
    }

    /**
     * Show the form for editing the specified Offer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
		
		
		
        $offer = $this->offerRepository->findWithoutFail($id);

        if (empty($offer)) {
            Flash::error('Offer not found');

            return redirect(route('admin.offers.index'));
        }

        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $offer_description_ar = DB::table('offer_description')->where('lang_id',$arabic_lang->id)->where('offer_id',$offer->id)->first();
        $offer_description_en = DB::table('offer_description')->where('lang_id',$english_lang->id)->where('offer_id',$offer->id)->first();



        $title['ar'] = $offer_description_ar->title ;
        $title['en'] = $offer_description_en->title ;
        $description["ar"] = $offer_description_ar->description ;
        $description["en"] = $offer_description_en->description ;

        $offer["title"] = $title ;
        $offer["description"] = $description ;

        return view('admin.offers.edit')->with('offer', $offer);
    }

    /**
     * Update the specified Offer in storage.
     *
     * @param  int              $id
     * @param UpdateOfferRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfferRequest $request)
    {
       


 $input = $request->all();

        $photoName = time().'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir . $photoName ;



	   $offer = $this->offerRepository->findWithoutFail($id);

        if (empty($offer)) {
            Flash::error('Offer not found');

            return redirect(route('admin.offers.index'));
        }

       
        $offer = $this->offerRepository->update( $input, $id);

        
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $offer_description_ar = DB::table('offer_description')->where('lang_id',$arabic_lang->id)->where('offer_id',$offer->id)->first();
        $offer_description_en = DB::table('offer_description')->where('lang_id',$english_lang->id)->where('offer_id',$offer->id)->first();

        $offer_description_ar->title = $request->title["ar"];
        $offer_description_ar->description = $request->description["ar"];
        
        $offer_description_en->title = $request->title["en"];
        $offer_description_en->description = $request->description["en"];
        
        DB::table('offer_description')
        ->where('id',$offer_description_en->id)
        ->update([
            'title' => $offer_description_en->title,'description' => $offer_description_en->description
        ]);


        DB::table('offer_description')
        ->where('id',$offer_description_ar->id)
        ->update([
            'title' => $offer_description_ar->title,'description' => $offer_description_ar->description
        ]);

        Flash::success('Offer updated successfully.');

        return redirect(route('admin.offers.index'));
    }

    /**
     * Remove the specified Offer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offer = $this->offerRepository->findWithoutFail($id);

        if (empty($offer)) {
            Flash::error('Offer not found');

            return redirect(route('admin.offers.index'));
        }

        $this->offerRepository->delete($id);

        Flash::success('Offer deleted successfully.');

        return redirect(route('admin.offers.index'));
    }
}
