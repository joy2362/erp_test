<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     *
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $store_name =env('SHOPIFY_SHOP_NAME');
        $store_api_key =env('SHOPIFY_API_KEY');
        $store_password =env('SHOPIFY_PASSWORD');
        $store_api_version =env('SHOPIFY_API_VERSION');

        $url = "https://".$store_api_key.":".$store_password."@".$store_name.".myshopify.com/admin/api/".$store_api_version."/products/count.json";

        $res = Http::get($url);
        $count = $res->json();

        $noOfUser = User::all()->count();
        $noOfSupplier = Supplier::all()->count();
        $noOfCustomer = Customer::all()->count();
        return view('user.dashboard',['noOfUser'=>$noOfUser,'noOfSupplier'=>$noOfSupplier,'noOfCustomer'=>$noOfCustomer,'noOfProduct'=>$count['count']]);
    }
}
