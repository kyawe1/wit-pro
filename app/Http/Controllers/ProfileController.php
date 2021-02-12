<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        return view('category',['home'=>'css/Category.css']);
    }
    public function create()
    {
        return view('new_make_profile',['home'=>'css/newmakeprofile.css']);
    }
}
