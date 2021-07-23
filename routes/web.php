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



//<===========For Admin Dashboard============>


// Route::group(['middleware' => ['auth','admin']], function () {

    // member
    Route::get('admin/member','MemberController@index');

    // sub category
    Route::get('admin/category','CategoryController@index');

    //    blog
    Route::get('/admin/blog','BlogController@index');

    //    event
    Route::get('/admin/event','EventController@index');

    // company
    Route::get('admin/company', 'CompanyController@index');

    // ads
    Route::get('admin/ads','AdsController@index');

     // Contact
    Route::get('admin/contact_list', 'ContactController@contact');

    //gallery
    Route::get('admin/gallery/','GalleryController@index');

// });





//<========For Member Dashboard=========>


// company for member
    Route::get('member/company', 'CompanyController@index');

// Member Profile
    Route::get('member/profile', 'MemberController@member_profile');


// <===========For UI===========>
Route::get('/', 'UIController@index');
Route::get('/companies', 'UIController@company_list');
Route::get('/company/{id}', 'UIController@company_profile');
Route::get('category/company/{cat_id}', 'UIController@category_company');
Route::get('/about', 'UIController@about');
Route::get('/category', 'UIController@category');
Route::get('/gallery', 'UIController@gallery');
Route::get('/blog', 'UIController@blog');
Route::get('/blog/{id}', 'UIController@blog_detail');
Route::get('/contact', 'UIController@contactus');
Route::get('/event', 'UIController@event');
Route::get('/event/{id}', 'UIController@event_single');
Route::get('get_sub_category/{id}', 'Controller@get_sub_category');
Route::get('search/company/{sub_id}/{keyword}', 'UIController@search_company');
Route::post('/search_event', 'UIController@search_event');
Route::post('/search_blog', 'UIController@search_blog');

Route::post('/contact', 'Controller@store');