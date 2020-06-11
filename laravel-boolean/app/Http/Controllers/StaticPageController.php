<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //HOMEPAGE

    public function index(){
        return view('static-page.index');
    }


    //PRIVACY

        public function privacy(){
            return view('static-page.privacy');
        }


    //FAQ

    public function faq(){
        return view('static-page.faq');
    }

}
