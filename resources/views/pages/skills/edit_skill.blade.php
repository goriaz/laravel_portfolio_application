@extends('layouts.admin_layout')
@section('content')
    <h1>Edit your record</h1>
    
    <form action="{{route('update.skill')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$record->id}}">
    <input type="text"  name="skill_name"  value="{{$record->skill_name}}">
    <br>
    <input type="text"  name="percentage"  value="{{$record->percentage}}">
    
    <button type="submit">Submit</button>

    

    </form>

    @if(Session::has('record_updated'))
    
    {{Session('record_updated')}}

    @endif

    <a href="/skillControl">Back to all data</a>

    @endsection