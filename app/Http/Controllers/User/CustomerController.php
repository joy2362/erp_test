<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Customer;
use App\Models\State;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     *
     */
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('user.customer.index',['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        return view('user.customer.create',['country'=>$country]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|unique:customers',
            'phone_number' => 'required|regex:/(91)[0-9]{10}/',
            'address' => 'required|',
            'country' => 'required|',
            'state' => 'required|',
            'city' => 'required|',
        ]);

        Customer::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'phone_number'=>$request->phone_number,
           'address'=>$request->address,
           'country_id'=>$request->country,
           'state_id'=>$request->state,
           'city_id'=>$request->city,
        ]);

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Country $country
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchState(Country $country){
        $state = State::where('country_id',$country->id)->get();
        return response()->json([
           'state'=>$state,
        ]);
    }

    /**
     * @param State $state
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchCity(State $state){
        $city = City::where('state_id',$state->id)->get();
        return response()->json([
            'city'=>$city,
        ]);
    }
}
