<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainPageController extends Controller
{
    
    public function index()
    {
        $main=Main::first();
    
        return view('pages.main',compact('main'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required',
        ]);

        $main=Main::first();
        $main->title=$request->title;
        $main->sub_title=$request->sub_title;

        if($request->file('bg_img')){
            $img_file = $request->file('bg_img');
            $img_file->storeAs('public/img/','bg_img' . '.' . $img_file->getClientOriginalExtension());
            $main->bg_img = 'storage/img/bg_img' . '.' . $img_file->getClientOriginalExtension();
           
        }

        if($request->file('logo')){
            $logo_file = $request->file('logo');
            $logo_file->storeAs('public/img/','logo' . '.' . $logo_file->getClientOriginalExtension());
            $main->logo = 'storage/img/logo' . '.' . $logo_file->getClientOriginalExtension();
           
        }

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume' .'.'. $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume'. '.'. $pdf_file->getClientOriginalExtension();
        }

     
        $main->save();

        return redirect()->route('admin.main')->with('success',"main page updated successdully");
    }

    
    public function destroy($id)
    {
        //
    }
}
