@extends('layouts.main')
@section('title')
    <title>Manager Suppliers</title>
@endsection
@section('main-content')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md ">
                <table class="table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Email</th>
                        <th scope="col">phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Country</th>
                        <th scope="col">State</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->supplier_code}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->phone_number}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->country->country_name}}</td>
                            <td>{{$row->state->state_name}}</td>
                            <td>{{$row->city->city_name}}</td>
                            <td><a type="button" href="{{route('supplier.edit',$row->id)}}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
