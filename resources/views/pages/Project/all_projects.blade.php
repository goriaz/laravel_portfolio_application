
@extends('layouts.admin_layout')
@section('content')

    <a href="/add_project">Add New Project</a>
    <h1>View All project </h1>
    <table>
       <thead>
             <tr>

                <th>Name</th>
                <th>project Description</th>
                <th>Project Image</th>
                <th>Action</th>
             </tr>

       </thead>

       <tbody>

        @foreach ($record as $item)

        <tr>
              <td>{{$item->project_name}}</td>
              <td>{{$item->project_desc}}</td>
              <td><img src="{{asset('images')}}/{{$item->project_img}}"  style="max-width: 80px;" alt=""></td>
              
              <td><a href="/edit_project/{{$item->id}}">Edit</a></td>
              <td><a href="/delete_project/{{$item->id}}">Delete</a></td>
        </tr>

        @endforeach




       </tbody>



    </table>


    
    
    @endsection