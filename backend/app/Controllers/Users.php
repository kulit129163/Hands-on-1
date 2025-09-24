<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }

    public function about()
    {
        return view('user/about'); // needs app/Views/user/about.php
    }

    public function contact()
    {
        return view('user/contact'); // needs app/Views/user/contact.php
    }
}
