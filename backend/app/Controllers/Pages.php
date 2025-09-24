<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function about()
    {
        return view('user/about');
    }

    public function contact()
    {
        return view('user/contact');
    }
}
