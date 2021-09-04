
@extends('layouts.admin_layout')
@section('content')
 
    <h1>Add your records</h1><br>
    <form action="{{route('add_record.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Name" name="name">
    <br>
    <input type="file" placeholder="img" name="file"><br>
    <button type="submit">Submit</button>

    

    </form>

    @if(Session::has('record_added'))
    
    {{Session('record_added')}}

    @endif
    
@endsection

