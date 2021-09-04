
@extends('layouts.admin_layout')
@section('content')
 
    <h1>Add your Project</h1><br>
    <form action="{{route('add_project.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Name" name="project_name">
    <br>
    <input type="text" placeholder="Description" name="project_desc">
    <input type="file" placeholder="img" name="file"><br>
   
    <button type="submit">Submit</button>

    

    </form>

    @if(Session::has('record_added'))
    
    {{Session('record_added')}}

    @endif
    
@endsection

