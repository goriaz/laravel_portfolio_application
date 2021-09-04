@extends('layouts.admin_layout')
@section('content')
    <h1>Edit your project</h1>
    
    <form action="{{route('update.project')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$record->id}}">
    <input type="text"  name="project_name"  value="{{$record->project_name}}">
    <input type="text" placeholder="Description" name="project_desc" value="{{$record->project_desc}}">
    <input type="file" placeholder="img" name="file"><br>
    <br>
   
    
    <button type="submit">Submit</button>

    

    </form>

    @if(Session::has('record_updated'))
    
    {{Session('record_updated')}}

    @endif

    <a href="/all_projects">Back to all data</a>

    @endsection