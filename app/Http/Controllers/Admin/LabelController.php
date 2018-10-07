<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateLabelRequest;
use App\Http\Requests\Admin\UpdateLabelRequest;
use App\Repositories\Admin\LabelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class LabelController extends AppBaseController
{
    /** @var  LabelRepository */
    private $labelRepository;

    public function __construct(LabelRepository $labelRepo)
    {
        $this->middleware('auth');
        $this->labelRepository = $labelRepo;
    }

    /**
     * Display a listing of the Label.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->labelRepository->pushCriteria(new RequestCriteria($request));
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();


        $labels = $this->labelRepository->all();
        $labels_extra = [];

        
        foreach($labels as $label){
            $text['ar'] = DB::table('label_description')->where('lang_id',$arabic_lang->id)->where('label_id',$label->id)->first()->text;
            $text['en'] = DB::table('label_description')->where('lang_id',$english_lang->id)->where('label_id',$label->id)->first()->text;
            $label["text"] = $text ;
            array_push($labels_extra,$label);
        }


        return view('admin.labels.index')
            ->with('labels', $labels_extra);
    }

    /**
     * Show the form for creating a new Label.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.labels.create');
    }

    /**
     * Store a newly created Label in storage.
     *
     * @param CreateLabelRequest $request
     *
     * @return Response
     */
    public function store(CreateLabelRequest $request)
    {
        $input = $request->all();
       
        $english_lang = DB::table('language')->get()->first();

        $arabic_lang = DB::table('language')->get()->last();

        // $label = $this->labelRepository->create($input);
        $label_id = DB::table('label')->insertGetId(
            []
        );
        
        DB::table('label_description')->insert(
            [ 'lang_id' => $english_lang->id ,'text' => $input['text']['en'] ,'label_id' => $label_id]
        );

        
        DB::table('label_description')->insert(
            ['lang_id' => $arabic_lang->id , 'text' => $input['text']['ar'],'label_id' => $label_id]
        );




        Flash::success('Label saved successfully.');

        return redirect(route('admin.labels.index'));
    }

    /**
     * Display the specified Label.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $label = $this->labelRepository->findWithoutFail($id);

        if (empty($label)) {
            Flash::error('Label not found');

            return redirect(route('admin.labels.index'));
        }

        return view('admin.labels.show')->with('label', $label);
    }

    /**
     * Show the form for editing the specified Label.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $label = $this->labelRepository->findWithoutFail($id);

        if (empty($label)) {
            Flash::error('Label not found');

            return redirect(route('admin.labels.index'));
        }

        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $label_description_ar = DB::table('label_description')->where('lang_id',$arabic_lang->id)->where('label_id',$label->id)->first();
        $label_description_en = DB::table('label_description')->where('lang_id',$english_lang->id)->where('label_id',$label->id)->first();

        $text['ar'] = $label_description_ar->text ;
        $text['en'] = $label_description_en->text ;

        $label["text"] = $text ;


        return view('admin.labels.edit')->with('label', $label);
    }

    /**
     * Update the specified Label in storage.
     *
     * @param  int              $id
     * @param UpdateLabelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLabelRequest $request)
    {
        $label = $this->labelRepository->findWithoutFail($id);

        if (empty($label)) {
            Flash::error('Label not found');

            return redirect(route('admin.labels.index'));
        }



        // $label = $this->labelRepository->update([$request->all()], $id);


        // $label = $this->labelRepository->update([$request->all()], $id);
        $english_lang = DB::table('language')->get()->first();
        $arabic_lang = DB::table('language')->get()->last();

        $label_ar = DB::table('label_description')->where('lang_id',$arabic_lang->id)->where('label_id',$label->id)->first();
        $label_en = DB::table('label_description')->where('lang_id',$english_lang->id)->where('label_id',$label->id)->first();


        DB::table('label_description')
        ->where('id',$label_en->id)
        ->update([
            'text' => $request->text["en"]
        ]);


        DB::table('label_description')
        ->where('id',$label_ar->id)
        ->update([
            'text' => $request->text["ar"]
        ]);



        Flash::success('Label updated successfully.');

        return redirect(route('admin.labels.index'));
    }

    /**
     * Remove the specified Label from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $label = $this->labelRepository->findWithoutFail($id);

        if (empty($label)) {
            Flash::error('Label not found');

            return redirect(route('admin.labels.index'));
        }

        $this->labelRepository->delete($id);

        Flash::success('Label deleted successfully.');

        return redirect(route('admin.labels.index'));
    }
}
