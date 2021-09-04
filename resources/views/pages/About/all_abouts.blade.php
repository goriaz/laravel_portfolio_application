
@extends('layouts.admin_layout')
@section('content')

    <a href="/add_about">Add New About</a>
    <h1>View AbOUT </h1>
    <table>
       <thead>
             <tr>

                <th>Name</th>
                <th>about Description</th>
                <th>About Pdf</th>
                <th>Action</th>
             </tr>

       </thead>

       <tbody>

        @foreach ($record as $item)
            
        <tr>
              <td>{{$item->about_name}}</td>
              <td>{{$item->about_desc}}</td>
              <td><a src="{{asset('images')}}/{{$item->about_pdf}}">cv</a></td>
              
              <td><a href="/edit_about/{{$item->id}}">Edit</a></td>
              <td><a href="/delete_about/{{$item->id}}">Delete</a></td>
        </tr>

        @endforeach




       </tbody>



    </table>


    
    
    @endsection