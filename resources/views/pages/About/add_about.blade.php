
@extends('layouts.admin_layout')
@section('content')
 
    <h1>Add your About</h1><br>
    <form action="{{route('add_about.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Heading" name="about_name">
    <br>
    <input type="textera" placeholder="Description" name="about_desc">
    <input type="file" placeholder="CV" name="file"><br>
   
    <button type="submit">Submit</button>

    

    </form>

    @if(Session::has('record_added'))
    
    {{Session('record_added')}}

    @endif
    
@endsection

