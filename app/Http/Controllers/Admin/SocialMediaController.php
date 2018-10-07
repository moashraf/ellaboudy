<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateSocialMediaRequest;
use App\Http\Requests\Admin\UpdateSocialMediaRequest;
use App\Repositories\Admin\SocialMediaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SocialMediaController extends AppBaseController
{
    /** @var  SocialMediaRepository */
    private $socialMediaRepository;

    public function __construct(SocialMediaRepository $socialMediaRepo)
    {
        $this->socialMediaRepository = $socialMediaRepo;
    }

    /**
     * Display a listing of the SocialMedia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->socialMediaRepository->pushCriteria(new RequestCriteria($request));
        $socialMedia = $this->socialMediaRepository->all();

        return view('admin.social_media.index')
            ->with('socialMedia', $socialMedia);
    }

    /**
     * Show the form for creating a new SocialMedia.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.social_media.create');
    }

    /**
     * Store a newly created SocialMedia in storage.
     *
     * @param CreateSocialMediaRequest $request
     *
     * @return Response
     */
    public function store(CreateSocialMediaRequest $request)
    {
        $input = $request->all();

        $socialMedia = $this->socialMediaRepository->create($input);

        Flash::success('Social Media saved successfully.');

        return redirect(route('admin.socialMedia.index'));
    }

    /**
     * Display the specified SocialMedia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $socialMedia = $this->socialMediaRepository->findWithoutFail($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('admin.socialMedia.index'));
        }

        return view('admin.social_media.show')->with('socialMedia', $socialMedia);
    }

    /**
     * Show the form for editing the specified SocialMedia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $socialMedia = $this->socialMediaRepository->findWithoutFail($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('admin.socialMedia.index'));
        }

        return view('admin.social_media.edit')->with('socialMedia', $socialMedia);
    }

    /**
     * Update the specified SocialMedia in storage.
     *
     * @param  int              $id
     * @param UpdateSocialMediaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSocialMediaRequest $request)
    {
        $socialMedia = $this->socialMediaRepository->findWithoutFail($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('admin.socialMedia.index'));
        }

        $socialMedia = $this->socialMediaRepository->update($request->all(), $id);

        Flash::success('Social Media updated successfully.');

        return redirect(route('admin.socialMedia.index'));
    }

    /**
     * Remove the specified SocialMedia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $socialMedia = $this->socialMediaRepository->findWithoutFail($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('admin.socialMedia.index'));
        }

        $this->socialMediaRepository->delete($id);

        Flash::success('Social Media deleted successfully.');

        return redirect(route('admin.socialMedia.index'));
    }
}
