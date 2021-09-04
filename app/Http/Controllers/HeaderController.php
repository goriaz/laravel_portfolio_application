<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Header;

class HeaderController extends Controller
{
    public function addRecords(){


        return view('pages.header.add_record');
    }

    public function Store(Request $request){


        $name= $request->name;
        $image=$request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

         
        $record=new Header;
        $record->name=$name;
        $record->logo=$imageName;
        $record->save();
        return back()->with('record_added','Record has been added');

       
    }

    public function showAllRecords(Request $request){

        $record=Header::all();
    
         return view('pages.header.all_records',compact('record'));
    
        }

       
    public function editHeader($id){

        $record=Header::find($id);
    
         return view('pages.header.editHeader',compact('record'));
    
        }

        public function UpdateHeader(Request $request){


            $name= $request->name;
            $image=$request->file('file');
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('images'),$imageName);
    
             
            $record=Header::find($request->id);
            $record->name=$name;
            $record->logo=$imageName;
            $record->save();
            return back()->with('record_updated','Header Updated');
    
    
           
        }


        public function DeleteHeader($id){

            $record=Header::find($id);

            unlink(public_path('images').'/'.$record->logo);

            $record->delete();
            return back();
                
           
        }




       


    
}
