<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     *
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $noOfUser = User::all()->count();
        $noOfSupplier = Supplier::all()->count();
        $noOfCustomer = Customer::all()->count();
        return view('user.dashboard',['noOfUser'=>$noOfUser,'noOfSupplier'=>$noOfSupplier,'noOfCustomer'=>$noOfCustomer]);
    }
}
