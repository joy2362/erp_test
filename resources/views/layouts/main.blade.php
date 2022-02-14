<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@if (!request()->routeIs('register')  && !request()->routeIs('login') )
<div class="container-fluid ">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{route('home')}}">Erp-test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="customers" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customers
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="customers">
                            <li><a class="dropdown-item" href="{{route('customer.create')}}">Add Customer</a></li>
                            <li><a class="dropdown-item" href="{{route('customer.index')}}">Manage Customers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="suppliers" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Suppliers
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="suppliers">
                            <li><a class="dropdown-item" href="{{route('supplier.create')}}">Add Supplier</a></li>
                            <li><a class="dropdown-item" href="{{route('supplier.index')}}">Manage Suppliers</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="users" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Users
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="users">
                            <li><a class="dropdown-item" href="{{route('user.manage')}}">Manage Users</a></li>
                        </ul>
                    </li>

                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="users" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           @if(auth()->user())
                            {{auth()->user()->name}}
                               @endif
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
</div>
@endif
    @yield('main-content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
@yield('script')
</body>
</html>
