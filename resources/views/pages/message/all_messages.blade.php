@extends('layouts.admin_layout')
@section('content')

    
    <h1>View All message </h1>
    <table>
       <thead>
             <tr>

                <th>Name</th>
                <th>email</th>
                <th>message</th>
                <th>Action</th>
             </tr>

       </thead>

       <tbody>

        @foreach ($record as $item)

        <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->message}}</td>
              
              
              <td><a href="/delete_message/{{$item->id}}">Delete</a></td>
        </tr>

        @endforeach




       </tbody>



    </table>


    
    
    @endsection