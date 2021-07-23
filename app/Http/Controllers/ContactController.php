<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function contact(){
        return view('admin.site_admin.admin.contact')->with([
            'url' => 'contact_list'
        ]);
    }
    
}
