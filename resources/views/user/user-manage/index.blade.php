@extends('layouts.main')
@section('title')
    <title>Manager Users</title>
@endsection
@section('main-content')
   <div class="container-fluid mt-5">
       <div class="row justify-content-center">
           <div class="col-md-8 ">
               <table class="table table-borderless table-striped table-hover">
                   <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Name</th>
                       <th scope="col">User Name</th>
                       <th scope="col">Email</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($users as $row)
                   <tr>
                       <th scope="row">{{$row->id}}</th>
                       <td>{{$row->name}}</td>
                       <td>{{$row->username}}</td>
                       <td>{{$row->email}}</td>
                   </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
@endsection
