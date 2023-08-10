<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //die("test");
        return view('site/front/home');
    }
}
