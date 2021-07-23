<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index(){
        return view('admin.site_admin.admin.admin_gallery')->with([
            'url' => 'gallery'
        ]);
    }
}
