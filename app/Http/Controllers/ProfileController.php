<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }
    public function index()
    {
        return view('category',['home'=>'css/Category.css']);
    }
    public function create()
    {
        return view('new_make_profile',['home'=>'css/newmakeprofile.css']);
    }
    public function make_profile(){
        $n=request()->validate([
            'photo'=>'required',
            'job'=>'required|string',
            'location'=>'required|string',
            'bio'=>'required|string',
            'phno'=>'required|string',
            'dob'=>'required|date',
            ]
        );
        
        if(!empty($n)){
            $temp=User::where('id',request()->user()->id)->get()->first();
            $temp->job_name=$n['job'];
            $temp->job_location=$n['location'];
            $temp->bio=$n['bio'];
            $temp->date_of_birth=$n['dob'];
            $temp->phonenumber =$n['phno'];
            $temp->save();
            redirect('home');
        }
    }
    public function update_profile(){
        return view('updateprofile');
    }
    public function process_update_profile(){
        $n=request()->validate([
            'photo'=>'required',
            'job'=>'required|string',
            'location'=>'required|string',
            'bio'=>'required|string',
            'phno'=>'required|string',
            'dob'=>'required|date',
            ]
        );
        
        if(!empty($n)){
            $temp=User::where('id',request()->user()->id)->get()->first();
            $temp->job_name=$n['job'];
            $temp->job_location=$n['location'];
            $temp->bio=$n['bio'];
            $temp->date_of_birth=$n['dob'];
            $temp->phonenumber =$n['phno'];
            $temp->save();
            redirect('home');
        }
    }
}
