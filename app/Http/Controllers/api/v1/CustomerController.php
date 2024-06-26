<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Services\V1\CustomerQuery;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCutomerRequest;
use App\Http\Requests\UpdateCutomerRequest;
use App\Http\Resources\v1\CustomerResource;
use App\Http\Resources\v1\CustomerCollection;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        #make test and recape all ideas to solve the task man .
        return new CustomerCollection(Customer::where('name','LIKE','aa')->get());
    }


    public function avaliable_rooms(Request $request){

        $start_data=$request->startData();
        $end_data=$request->endData();


    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCutomerRequest $request)
    {
        Customer::create();

    
    
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer, Request $request)
    {


        $filter=new CustomerQuery();
        $rr=$filter->transform($request);
        dd($rr);
        return response()->json(new CustomerResource($customer));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCutomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
