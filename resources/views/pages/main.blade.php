
@extends('layouts.admin_layout')
 @section('content')

   
                   


                    <main>
                        <div class="container">
                            <h1 class="mt-4">Main</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="index.html">Main</a></li>
                                
                            </ol>
            <form action="{{route('admin.main.update')}}" enctype="multipart/form-data" method="POST">
                @csrf   
                
                 {{-- {{ method_field('PUT')}} --}}
              
                            <div class="row">
                            
                                <div class="form-group col-md-3 mt-3">
    
                                        <h4>Background Image</h4>
                                        <img style="height: 20vh;" src="{{url($main->bg_img)}}" alt="">
                                        <input type="file" class="mt-3" id="bg_image" placeholder="" name="bg_img">
    
                                </div>
    
                                <div class="form-group col-md-4 mt-3">

                                    <h4>logo</h4>
                                    <img style="height: 5vh;" src="{{url($main->logo)}}" alt="">
                                    <input type="file" class="mt-3" id="bg_image" placeholder="" name="logo">
                                    <div >
                                        <label for="title" >Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{$main->title}}">
                                    </div>
                                    <div >
                                        <label for="sub_title" >Sub Title</label>
                                        <input type="text" class="form-control mb-3" id="sub_title" placeholder="" name="sub_title" value="{{$main->sub_title}}">
                                    </div>

                                    <div >
                                        <label for="Resume" >Upload Resume</label>
                                        <input type="file" class="mt-3" id="resume" placeholder="" name="resume">
                                    </div>
                                </div>
                                    
                                 

                                   
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary">
                </form> 
                        </div>

                      
                          
                    </main>

                  
    
     
     
@endsection
                