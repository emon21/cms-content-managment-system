<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PricePlan;
use Illuminate\Http\Request;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PricePlan $pricePlan)
    {
        //
        return view('backend.PricePlan.index', compact('pricePlan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $PricePlan = New PricePlan();
        $PricePlan->name = $request->name;
        $PricePlan->price = $request->price;
        $PricePlan->save();

        return redirect()->route('PricePlan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricePlan $pricePlan)
    {
        //
        return $pricePlan;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PricePlan $pricePlan)
    {
        //
        return $pricePlan;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricePlan $pricePlan)
    {
        //
        return $pricePlan;
    }
}
