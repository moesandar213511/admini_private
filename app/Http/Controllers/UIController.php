<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function index()
    {
        return view('user.index')->with([
            'page' => 'home'
        ]);
    }
    public function company_list()
    {
        // return "ok";
        return view('user.company_list')->with([
            'page' => 'company'
        ]);
    }

    public function search_company($sub_id, $keyword)
    {
        
    }

    public function category_company($id)
    {
        return view('user.company_list')->with([
            'page' => 'company'
        ]);
    }
    public function company_profile()
    {
        return view('user.company_profile')->with([
            'page' => 'company'
        ]);
//        return $obj->getCompanyData()['company_photos'];

    }
    public function about()
    {
        return view('user.about')->with([
            'page' => 'about'
        ]);
    }
    public function category()
    {
        return view('user.category')->with([
            'page' => 'category'
//             'page'=>'home'
        ]);
    }
    public function gallery()
    {
        return view('user.gallery')->with([
            'page' => 'gallery'
        ]);
    }

    public function blog()
    {
        return view('user.blog')->with([
            'page' => 'blog'
        ]);
    }

    public function blog_detail($id)
    {
        return view('user.blog_detail')->with([
            'page' => 'blog'
        ]);
    }
    public function contactus()
    {
        return view('user.contactus')->with([
            'page' => 'contact'
        ]);
    }


    public function event_single($id)
    {
        return view('user.event_single')->with([
            'page' => 'event'
        ]);
    }
    public function search_event(Request $request)
    {
        return view('user.event')->with([
            'page' => 'event'
        ]);
    }


    public function event()
    {
        return view('user.event')->with([
            'page' => 'event'
        ]);
    }


    public function search_blog(Request $request)
    {
        return view('user.blog')->with([
            'page' => 'blog'
        ]);
    }

}
