<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        helper('url');
        return view('about');
    }
}
