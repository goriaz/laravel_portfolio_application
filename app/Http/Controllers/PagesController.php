<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;
use App\Models\Header;
use App\Models\Skill;
use App\Models\Project;
use App\Models\About;

class PagesController extends Controller
{
    public function index(){

        $main=Main::first();
        $services = Service::all();
    
        $record=Header::first();
        $skill=Skill::all();
        $project=Project::all();
        $about=About::first();
     
        return view('pages.index',compact('main','services','record','skill','project','about'));

 
    }
    public function dashboard(){
     
        return view('pages.dashboard');


    }
  
   
}




