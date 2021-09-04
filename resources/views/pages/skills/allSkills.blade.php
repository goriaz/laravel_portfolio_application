
@extends('layouts.admin_layout')
@section('content')

    <a href="/add_skill">Add New skill</a>
    <h1>View All skill </h1>
    <table>
       <thead>
             <tr>

                <th>Name</th>
                <th>percentage</th>
                <th>Action</th>
             </tr>

       </thead>

       <tbody>

        @foreach ($record as $item)

        <tr>
              <td>{{$item->skill_name}}</td>
              <td>{{$item->percentage}}</td>
              
              <td><a href="/edit_skill/{{$item->id}}">Edit</a></td>
              <td><a href="/delete_skill/{{$item->id}}">Delete</a></td>
        </tr>

        @endforeach




       </tbody>



    </table>


    
    
    @endsection