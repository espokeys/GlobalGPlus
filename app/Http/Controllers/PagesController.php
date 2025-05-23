<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        return view('index');
    }

    public function apropos()
    {
        return view('layouts.pages.apropos');
    }
    public function service()
    {
        return view('layouts.pages.service');
    }
    public function contact()
    {
        return view('layouts.pages.contact');
    }
    public function formation()
    {
        return view('layouts.pages.formation');
    }


}
