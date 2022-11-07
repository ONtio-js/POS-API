<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Resources\V1\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(20);
        if ($customers->count() != 0){
            return CustomerResource::collection($customers);
        }else{
            return response('No customers Found',404);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestreturn CustomerResource::collection();
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $request->validated();

        $Customer = Customer::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'state' => $request->state,
            'country' => $request->country,
            'street' => $request->street,
            'phone' => $request->phone,
            'postalcode' => $request->postalcode,
        ]);
        if ($Customer){
            return new CustomerResource($Customer);
        }else{
            return response('internal server error',500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $id)
    {
        $customer =  Customer::find($id);

        if (isset($customer)){
            return new CustomerResource($customer);
        }else{
            return response('Customer doesn\'t exist',404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCustomerRequest $request,Customer $id)
    {
        $request->validated();
        $customer = Customer::where('id',$id)->updateOrCreate([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'country' => $request->country,
            'state' => $request->state,
            'street' => $request->street,
            'phone'  => $request->phone
        ]);

        if ($customer){
            return new CustomerResource($customer);
        }else{
            return response('server Error',500);
        }
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
