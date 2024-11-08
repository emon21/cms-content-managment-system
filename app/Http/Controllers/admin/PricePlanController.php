<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PricePlan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PricePlan $PricePlan)
    {
        //
        // PricePlan::where('status', 0)->delete();
        $pricePlan = PricePlan::all();
        return view('backend.PricePlan.index', compact('pricePlan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('backend.PricePlan.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        # Validation 

        $request->validate([

            'title' => 'required|',
            'title' => 'required|',
        ]);

        $PricePlan = new PricePlan();
        $PricePlan->title = $request->title;
        // $PricePlan->slug = Str::slug($request->title);
        $PricePlan->price = $request->price;
        $PricePlan->type = $request->plan;
        $PricePlan->cat_id = $request->cat_id;
        $PricePlan->feature = $request->features;
        $PricePlan->status = $request->status;
        $PricePlan->save();

        $notification = array(
            'message' => 'Price Plan Created successfully',
            'alert-type' => 'success',
            "success" => true
        );

        return redirect()->route('price-plan.index')->with($notification);

        // return redirect()->route('price-plan.index')->with('success', 'Price Plan created');
    }

    /**
     * Display the specified resource.
     */
    public function show(PricePlan $PricePlan)
    {
        //
        return $PricePlan;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricePlan $PricePlan)
    {
        //
        // return $PricePlan;
        $category = Category::all();
        return view('backend.PricePlan.edit', compact('PricePlan', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PricePlan $PricePlan)
    {
        
        $PricePlan->title = $request->title;
        $PricePlan->price = $request->price;
        $PricePlan->type = $request->plan;
        $PricePlan->cat_id = $request->cat_id;
        $PricePlan->feature = $request->features;
        $PricePlan->status = $request->status;
        $PricePlan->position = $request->position;
        $PricePlan->save();

        $notification = array(
            'message' => 'Price Plan Updated successfully',
            'alert-type' => 'success',
            'data' => 'Success',
        );

        return redirect()->route('price-plan.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricePlan $PricePlan)
    {
        //
        // return $PricePlan;

        // delete from data in database
        // $PricePlan->delete();//->forceDelete();

        //destroy
        PricePlan::destroy($PricePlan->id); //->forceDelete();
        // destroy($PricePlan->image);

        // destroy from folder
        // if (File::exists($PricePlan->image)) {
        //     File::delete($PricePlan->image);
        // }

        // delete from database
        
        // $PricePlan->delete();

       
        // PricePlan::destroy($PricePlan->id);

        $notification = array(
            'message' => 'Price Plan Deleted successfully',
            'alert-type' => 'error',
            'delete' => 'Deleted'
          
        );
        
        return redirect()->route('price-plan.index')->with($notification);
    }
}
