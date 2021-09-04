
@extends('layouts.admin_layout')
@section('content')

    <a href="/addHeader">Add New Record</a>
    <h1>View All Records</h1>
    <table>
       <thead>
             <tr>

                <th>Name</th>
                <th>image</th>
                <th>Action</th>
             </tr>

       </thead>

       <tbody>

        @foreach ($record as $item)

        <tr>
              <td>{{$item->name}}</td>
              <td><img src="{{asset('images')}}/{{$item->logo}}"  style="max-width: 80px;" alt=""></td>
              <td><a href="/editHeader/{{$item->id}}">Edit</a></td>
              <td><a href="/deleteHeader/{{$item->id}}">Delete</a></td>
        </tr>

        @endforeach




       </tbody>



    </table>


    
    
    @endsection