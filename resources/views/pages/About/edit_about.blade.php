@extends('layouts.admin_layout')
@section('content')
    <h1>Edit your about</h1>
    
    <form action="{{route('update.about')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$record->id}}">
    <input type="text"  name="about_name"  value="{{$record->about_name}}">
    <input type="text" placeholder="Description" name="about_desc" value="{{$record->about_desc}}">
    <input type="file" placeholder="cv" name="file"><br>
    <br>
   
    
    <button type="submit">Submit</button>

    

    </form>

    @if(Session::has('record_updated'))
    
    {{Session('record_updated')}}

    @endif

    <a href="/all_abouts">Back to all data</a>

    @endsection