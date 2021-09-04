<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    

    public function Store(Request $request){

      
        $name= $request->name;
        $email= $request->email;
        $message= $request->message;

         
        $record=new Message;
        $record->name=$name;
        $record->email=$email;
        $record-> message=$message;
        $record->save();
        return back()->with('record_added',' message has been sent');

       
    }

    public function all_messages(Request $request){

        $record=Message::all();
    
         return view('pages.message.all_messages',compact('record'));
    
        }
}
