@extends('layouts.admin_layout')
@section('content')
    <h1>Edit your record</h1>

    <h1>Add your records</h1><br>
    
    <form action="{{route('update.header')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$record->id}}">
    <input type="text"  name="name"  value="{{$record->name}}">
    <br>
    <input type="file"  name="file" value="{{$record->name}}"><br>
    <button type="submit">Submit</button>

    

    </form>

    @if(Session::has('record_updated'))
    
    {{Session('record_updated')}}

    @endif

    <a href="/HeaderControl">Back to all data</a>

    @endsection