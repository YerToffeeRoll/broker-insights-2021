<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Policy;
use App\Http\Resources\PolicyResource;
use App\Http\Resources\PolicyCollection;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PolicyCollection(Policy::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_address' => 'required',
            'premium' => 'required|integer',
            'policy_type' => 'required',
            'insurer_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        
        
        $request->request->add(['broker_id' => '1']);
        $policy = Policy::create($request->all());

        // 'customer_name', '', '', '', '',


        return response()->json($policy, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Policy $policy)
    {
        return  new PolicyResource($policy);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Policy $policy)
    {
        $validator =  Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_address' => 'required',
            'premium' => 'required|integer',
            'policy_type' => 'required',
            'insurer_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $request->request->add(['broker_id' => '1']);
        $policy->update($request->all());

        return response()->json($policy, 200);
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policy $policy)
    {
        $policy->delete();

        return response()->json(null, 204);
    }
}
