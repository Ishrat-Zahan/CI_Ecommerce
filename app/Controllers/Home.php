<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layouts/content');
    }
    public function test()
    {
        // return view('test');
    }
}
