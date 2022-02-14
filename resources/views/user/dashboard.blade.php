@extends('layouts.main')
@section('title')
    <title>Dashboard</title>
@endsection
@section('main-content')
    <div class="container-fluid">
        <section>
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}">Erp-test</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="customers" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Customers
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="customers">
                                    <li><a class="dropdown-item" href="#">Add Customer</a></li>
                                    <li><a class="dropdown-item" href="#">Manage Customers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="suppliers" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Suppliers
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="suppliers">
                                    <li><a class="dropdown-item" href="#">Add Supplier</a></li>
                                    <li><a class="dropdown-item" href="#">Manage Suppliers</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="users" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Users
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="users">
                                    <li><a class="dropdown-item" href="#">Manage Users</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="users" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{auth()->user()->name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="users">
                                    <li> <form method="POST" action="{{ route('logout')  }}">
                                            @csrf
                                            <a href="{{route('logout')}} "
                                               class="dropdown-item"
                                               onclick="event.preventDefault();
                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </section>
    </div>
@endsection
