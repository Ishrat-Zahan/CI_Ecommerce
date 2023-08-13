<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        if (session()->get("logged_in")) {
            $name = session()->get('ss_username');
            return view('profile', ['ss_username' => $name]);
        } else {
            return view('login'); // Redirect to login view if not logged in
        }
    }
    public function test(){
        return view('test');
    }
}

