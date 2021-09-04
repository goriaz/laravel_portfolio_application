<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;

class AboutController extends Controller
{
    public function create_about(){


        return view('pages.about.add_about');
    }


    public function Store(Request $request){


        $name= $request->about_name;
        $desc= $request->about_desc;
        $image=$request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

         
        $record=new About;
        $record->about_name=$name;
        $record->about_desc=$desc;
        $record->about_pdf=$imageName;
        $record->save();
        return back()->with('record_added','Record has been added');

       
    }

    public function list_about(Request $request){

        $record=About::all();
    
         return view('pages.about.all_abouts',compact('record'));
    
        }

       
    public function edit_about($id){

        $record=About::find($id);
         return view('pages.about.edit_about',compact('record'));
    
        }

        public function update_about(Request $request){


            $name= $request->about_name;
            $desc= $request->about_desc;
            $image=$request->file('file');
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('images'),$imageName);
    
             
            $record=About::find($request->id);
            $record->about_name=$name;
            $record->about_desc=$desc;
            $record->about_pdf=$imageName;
            $record->save();
            return back()->with('record_updated','Header Updated');
    
    
           
        }


        public function destroy_about($id){

            $record=About::find($id);

            unlink(public_path('images').'/'.$record->about_pdf);

            $record->delete();
            return back();
                
           
        }

}


