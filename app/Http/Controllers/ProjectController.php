<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function add_project(){


        return view('pages.project.add_project');
    }


    public function Store(Request $request){


        $name= $request->project_name;
        $desc= $request->project_desc;
        $image=$request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

         
        $record=new Project;
        $record->project_name=$name;
        $record->project_desc=$desc;
        $record->project_img=$imageName;
        $record->save();
        return back()->with('record_added','Record has been added');

       
    }

    public function all_projects(Request $request){

        $record=Project::all();
    
         return view('pages.project.all_projects',compact('record'));
    
        }

       
    public function edit_project($id){

        $record=Project::find($id);
         return view('pages.project.edit_project',compact('record'));
    
        }

        public function update_project(Request $request){


            $name= $request->project_name;
            $desc= $request->project_desc;
            $image=$request->file('file');
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('images'),$imageName);
    
             
            $record=Project::find($request->id);
            $record->project_name=$name;
            $record->project_desc=$desc;
            $record->project_img=$imageName;
            $record->save();
            return back()->with('record_updated','Header Updated');
    
    
           
        }


        public function delete_project($id){

            $record=Project::find($id);

            unlink(public_path('images').'/'.$record->project_img);

            $record->delete();
            return back();
                
           
        }

}
