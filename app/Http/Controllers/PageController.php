<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about(){
        return view('shop.content.about.index');
    }

    public function contact(){
        return view('shop.content.contact.index');
    }
}