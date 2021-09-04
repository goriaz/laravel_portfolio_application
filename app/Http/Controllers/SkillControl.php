<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillControl extends Controller
{
    //
    public function showAllSkills(Request $request){

        $record=Skill::all();
    
         return view('pages.skills.allSkills',compact('record'));
    
        }


        public function add_skill(){


            return view('pages.skills.add_skill');
        }

        public function Store(Request $request){


            $skill= $request->skill_name;
            $percentage= $request->percentage;
    
             
            $record=new Skill;
            $record->skill_name= $skill;
            $record->percentage=$percentage;
            $record->save();
            return back()->with('record_added','Record has been added');
    
           
        }

        public function edit_skill($id){

            $record=Skill::find($id);
        
             return view('pages.skills.edit_skill',compact('record'));
        
            }
    
            public function update_skill(Request $request){
    
    
                $skill= $request->skill_name;
                $percentage= $request->percentage;
               
        
                
                $record=Skill::find($request->id);
                $record->skill_name= $skill;
                $record->percentage=$percentage;
                $record->save();
                return back()->with('record_updated','Header Updated');
        
        
               
            }
    
    
            public function delete_skill($id){
    
                $record=Skill::find($id);
    
                $record->delete();
                return back();
                    
               
            }
    



}
