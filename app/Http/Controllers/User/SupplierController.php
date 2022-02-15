<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
        $suppliers = Supplier::all();
        return view('user.suppliers.index',['suppliers'=>$suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        return view('user.suppliers.create',['country'=>$country]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'code' => 'required|max:200|unique:suppliers,supplier_code',
            'email' => 'required|email|unique:suppliers',
            'phone_number' => 'required|regex:/(91)[0-9]{10}/',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);

        Supplier::create([
            'name'=>$request->name,
            'supplier_code'=>$request->code,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'country_id'=>$request->country,
            'state_id'=>$request->state,
            'city_id'=>$request->city,
        ]);

        return back();
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Supplier $supplier){
       $country = Country::all();
       return view('user.suppliers.edit',['country'=>$country,'supplier'=>$supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Supplier $supplier){

        $request->validate([
            'name' => 'nullable|max:200',
            'code' => 'nullable|max:200|unique:suppliers,supplier_code,'. $supplier->id,
            'email' => 'nullable|email|unique:suppliers,email,'.  $supplier->id,
            'phone_number' => 'nullable|regex:/(91)[0-9]{10}/',
        ]);

        if (!empty($request->name)){
            $supplier->name = $request->name;
        }
        if (!empty($request->email)){
            $supplier->email = $request->email;
        }
        if (!empty($request->code)){
            $supplier->supplier_code = $request->code;
        }
        if (!empty($request->phone_number)){
            $supplier->phone_number = $request->phone_number;
        }
        if (!empty($request->address)){
            $supplier->address = $request->address;
        }
        if (!empty($request->country)){
            $supplier->country_id = $request->country;
        }
        if (!empty($request->state)){
            $supplier->state_id = $request->state;
        }
        if (!empty($request->city)){
            $supplier->city_id = $request->city;
        }
        $supplier->save();
        return back();
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
}
