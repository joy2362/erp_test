@extends('layouts.main')
@section('title')
    <title>Dashboard</title>
@endsection
@section('main-content')
   <div class="container mt-5">
       <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-success m-3  text-center" >
                            <div class="card-header">User</div>
                            <div class="card-body text-success">
                                <h5 class="card-title">No of Users</h5>
                                <p class="card-text fw-bold">{{$noOfUser}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success m-3 text-center" >
                            <div class="card-header">Customer</div>
                            <div class="card-body text-success">
                                <h5 class="card-title">No of Customers</h5>
                                <p class="card-text">{{$noOfCustomer}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success m-3 text-center" >
                            <div class="card-header">Supplier</div>
                            <div class="card-body text-success">
                                <h5 class="card-title">No of Suppliers</h5>
                                <p class="card-text">{{$noOfSupplier}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="row mt-5 justify-content-center">
           <div class="col-md-6">
               <div class="card border-success mb-3"  style="max-width: 540px;">
                   <div class="row g-0">
                       <div class="col-md-4 m-1">
                           <img src="{{asset('img/profile/profile.png')}}" class="img-fluid rounded-start" alt="...">
                       </div>
                       <div class="col-md-7">
                           <div class="card-body">
                               <h5 class="card-title">{{auth()->user()->name}}</h5>
                               <p class="card-text">{{auth()->user()->username}}</p>
                               <p class="card-text">{{auth()->user()->email}}</p>
                               <p class="card-text"><small class="text-muted">Last updated {{auth()->user()->updated_at->diffForHumans()}}</small></p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
