<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WebsiteController@index')->name('home');
Route::get('/project/{id}', 'WebsiteController@project')->name('project');
Route::get('/contact', 'WebsiteController@contact')->name('contact');
Route::get('/about', 'WebsiteController@about')->name('about');
Route::get('/offers/{id}', 'WebsiteController@offers')->name('offers');

Route::post('/form', 'WebsiteController@form')->name('form');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('admin/banners', ['as'=> 'admin.banners.index', 'uses' => 'Admin\BannerController@index']);
Route::post('admin/banners', ['as'=> 'admin.banners.store', 'uses' => 'Admin\BannerController@store']);
Route::get('admin/banners/create', ['as'=> 'admin.banners.create', 'uses' => 'Admin\BannerController@create']);
Route::put('admin/banners/{banners}', ['as'=> 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
Route::patch('admin/banners/{banners}', ['as'=> 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
Route::delete('admin/banners/{banners}', ['as'=> 'admin.banners.destroy', 'uses' => 'Admin\BannerController@destroy']);
Route::get('admin/banners/{banners}', ['as'=> 'admin.banners.show', 'uses' => 'Admin\BannerController@show']);
Route::get('admin/banners/{banners}/edit', ['as'=> 'admin.banners.edit', 'uses' => 'Admin\BannerController@edit']);


Route::get('admin/labels', ['as'=> 'admin.labels.index', 'uses' => 'Admin\LabelController@index']);
Route::post('admin/labels', ['as'=> 'admin.labels.store', 'uses' => 'Admin\LabelController@store']);
Route::get('admin/labels/create', ['as'=> 'admin.labels.create', 'uses' => 'Admin\LabelController@create']);
Route::put('admin/labels/{labels}', ['as'=> 'admin.labels.update', 'uses' => 'Admin\LabelController@update']);
Route::patch('admin/labels/{labels}', ['as'=> 'admin.labels.update', 'uses' => 'Admin\LabelController@update']);
Route::delete('admin/labels/{labels}', ['as'=> 'admin.labels.destroy', 'uses' => 'Admin\LabelController@destroy']);
Route::get('admin/labels/{labels}', ['as'=> 'admin.labels.show', 'uses' => 'Admin\LabelController@show']);
Route::get('admin/labels/{labels}/edit', ['as'=> 'admin.labels.edit', 'uses' => 'Admin\LabelController@edit']);


Route::get('admin/videos', ['as'=> 'admin.videos.index', 'uses' => 'Admin\VideoController@index']);
Route::post('admin/videos', ['as'=> 'admin.videos.store', 'uses' => 'Admin\VideoController@store']);
Route::get('admin/videos/create', ['as'=> 'admin.videos.create', 'uses' => 'Admin\VideoController@create']);
Route::put('admin/videos/{videos}', ['as'=> 'admin.videos.update', 'uses' => 'Admin\VideoController@update']);
Route::patch('admin/videos/{videos}', ['as'=> 'admin.videos.update', 'uses' => 'Admin\VideoController@update']);
Route::delete('admin/videos/{videos}', ['as'=> 'admin.videos.destroy', 'uses' => 'Admin\VideoController@destroy']);
Route::get('admin/videos/{videos}', ['as'=> 'admin.videos.show', 'uses' => 'Admin\VideoController@show']);
Route::get('admin/videos/{videos}/edit', ['as'=> 'admin.videos.edit', 'uses' => 'Admin\VideoController@edit']);


Route::get('admin/offers', ['as'=> 'admin.offers.index', 'uses' => 'Admin\OfferController@index']);
Route::post('admin/offers', ['as'=> 'admin.offers.store', 'uses' => 'Admin\OfferController@store']);
Route::get('admin/offers/create', ['as'=> 'admin.offers.create', 'uses' => 'Admin\OfferController@create']);
Route::put('admin/offers/{offers}', ['as'=> 'admin.offers.update', 'uses' => 'Admin\OfferController@update']);
Route::patch('admin/offers/{offers}', ['as'=> 'admin.offers.update', 'uses' => 'Admin\OfferController@update']);
Route::delete('admin/offers/{offers}', ['as'=> 'admin.offers.destroy', 'uses' => 'Admin\OfferController@destroy']);
Route::get('admin/offers/{offers}', ['as'=> 'admin.offers.show', 'uses' => 'Admin\OfferController@show']);
Route::get('admin/offers/{offers}/edit', ['as'=> 'admin.offers.edit', 'uses' => 'Admin\OfferController@edit']);


Route::get('admin/languages', ['as'=> 'admin.languages.index', 'uses' => 'Admin\LanguageController@index']);
Route::post('admin/languages', ['as'=> 'admin.languages.store', 'uses' => 'Admin\LanguageController@store']);
Route::get('admin/languages/create', ['as'=> 'admin.languages.create', 'uses' => 'Admin\LanguageController@create']);
Route::put('admin/languages/{languages}', ['as'=> 'admin.languages.update', 'uses' => 'Admin\LanguageController@update']);
Route::patch('admin/languages/{languages}', ['as'=> 'admin.languages.update', 'uses' => 'Admin\LanguageController@update']);
Route::delete('admin/languages/{languages}', ['as'=> 'admin.languages.destroy', 'uses' => 'Admin\LanguageController@destroy']);
Route::get('admin/languages/{languages}', ['as'=> 'admin.languages.show', 'uses' => 'Admin\LanguageController@show']);
Route::get('admin/languages/{languages}/edit', ['as'=> 'admin.languages.edit', 'uses' => 'Admin\LanguageController@edit']);


Route::get('admin/services', ['as'=> 'admin.services.index', 'uses' => 'Admin\ServiceController@index']);
Route::post('admin/services', ['as'=> 'admin.services.store', 'uses' => 'Admin\ServiceController@store']);
Route::get('admin/services/create', ['as'=> 'admin.services.create', 'uses' => 'Admin\ServiceController@create']);
Route::put('admin/services/{services}', ['as'=> 'admin.services.update', 'uses' => 'Admin\ServiceController@update']);
Route::patch('admin/services/{services}', ['as'=> 'admin.services.update', 'uses' => 'Admin\ServiceController@update']);
Route::delete('admin/services/{services}', ['as'=> 'admin.services.destroy', 'uses' => 'Admin\ServiceController@destroy']);
Route::get('admin/services/{services}', ['as'=> 'admin.services.show', 'uses' => 'Admin\ServiceController@show']);
Route::get('admin/services/{services}/edit', ['as'=> 'admin.services.edit', 'uses' => 'Admin\ServiceController@edit']);


Route::get('admin/projects', ['as'=> 'admin.projects.index', 'uses' => 'Admin\ProjectController@index']);
Route::post('admin/projects', ['as'=> 'admin.projects.store', 'uses' => 'Admin\ProjectController@store']);
Route::get('admin/projects/create', ['as'=> 'admin.projects.create', 'uses' => 'Admin\ProjectController@create']);
Route::put('admin/projects/{projects}', ['as'=> 'admin.projects.update', 'uses' => 'Admin\ProjectController@update']);
Route::patch('admin/projects/{projects}', ['as'=> 'admin.projects.update', 'uses' => 'Admin\ProjectController@update']);
Route::delete('admin/projects/{projects}', ['as'=> 'admin.projects.destroy', 'uses' => 'Admin\ProjectController@destroy']);
Route::get('admin/projects/{projects}', ['as'=> 'admin.projects.show', 'uses' => 'Admin\ProjectController@show']);
Route::get('admin/projects/{projects}/edit', ['as'=> 'admin.projects.edit', 'uses' => 'Admin\ProjectController@edit']);


Route::get('admin/projectImages', ['as'=> 'admin.projectImages.index', 'uses' => 'Admin\ProjectImageController@index']);
Route::post('admin/projectImages', ['as'=> 'admin.projectImages.store', 'uses' => 'Admin\ProjectImageController@store']);
Route::get('admin/projectImages/create', ['as'=> 'admin.projectImages.create', 'uses' => 'Admin\ProjectImageController@create']);
Route::put('admin/projectImages/{projectImages}', ['as'=> 'admin.projectImages.update', 'uses' => 'Admin\ProjectImageController@update']);
Route::patch('admin/projectImages/{projectImages}', ['as'=> 'admin.projectImages.update', 'uses' => 'Admin\ProjectImageController@update']);
Route::delete('admin/projectImages/{projectImages}', ['as'=> 'admin.projectImages.destroy', 'uses' => 'Admin\ProjectImageController@destroy']);
Route::get('admin/projectImages/{projectImages}', ['as'=> 'admin.projectImages.show', 'uses' => 'Admin\ProjectImageController@show']);
Route::get('admin/projectImages/{projectImages}/edit', ['as'=> 'admin.projectImages.edit', 'uses' => 'Admin\ProjectImageController@edit']);


Route::get('admin/videoProjects', ['as'=> 'admin.videoProjects.index', 'uses' => 'Admin\VideoProjectController@index']);
Route::post('admin/videoProjects', ['as'=> 'admin.videoProjects.store', 'uses' => 'Admin\VideoProjectController@store']);
Route::get('admin/videoProjects/create', ['as'=> 'admin.videoProjects.create', 'uses' => 'Admin\VideoProjectController@create']);
Route::put('admin/videoProjects/{videoProjects}', ['as'=> 'admin.videoProjects.update', 'uses' => 'Admin\VideoProjectController@update']);
Route::patch('admin/videoProjects/{videoProjects}', ['as'=> 'admin.videoProjects.update', 'uses' => 'Admin\VideoProjectController@update']);
Route::delete('admin/videoProjects/{videoProjects}', ['as'=> 'admin.videoProjects.destroy', 'uses' => 'Admin\VideoProjectController@destroy']);
Route::get('admin/videoProjects/{videoProjects}', ['as'=> 'admin.videoProjects.show', 'uses' => 'Admin\VideoProjectController@show']);
Route::get('admin/videoProjects/{videoProjects}/edit', ['as'=> 'admin.videoProjects.edit', 'uses' => 'Admin\VideoProjectController@edit']);


Route::get('admin/socialMedia', ['as'=> 'admin.socialMedia.index', 'uses' => 'Admin\SocialMediaController@index']);
Route::post('admin/socialMedia', ['as'=> 'admin.socialMedia.store', 'uses' => 'Admin\SocialMediaController@store']);
Route::get('admin/socialMedia/create', ['as'=> 'admin.socialMedia.create', 'uses' => 'Admin\SocialMediaController@create']);
Route::put('admin/socialMedia/{socialMedia}', ['as'=> 'admin.socialMedia.update', 'uses' => 'Admin\SocialMediaController@update']);
Route::patch('admin/socialMedia/{socialMedia}', ['as'=> 'admin.socialMedia.update', 'uses' => 'Admin\SocialMediaController@update']);
Route::delete('admin/socialMedia/{socialMedia}', ['as'=> 'admin.socialMedia.destroy', 'uses' => 'Admin\SocialMediaController@destroy']);
Route::get('admin/socialMedia/{socialMedia}', ['as'=> 'admin.socialMedia.show', 'uses' => 'Admin\SocialMediaController@show']);
Route::get('admin/socialMedia/{socialMedia}/edit', ['as'=> 'admin.socialMedia.edit', 'uses' => 'Admin\SocialMediaController@edit']);
