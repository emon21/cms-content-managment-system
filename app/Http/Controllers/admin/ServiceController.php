<?php

namespace App\Http\Controllers\admin;

use App\Helper\helper;
use App\Models\Service;
use App\Models\Category;
use App\Models\PricePlan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use function App\Helper\deleteImage;
use function App\Helper\uploadImage;

// use function App\Helper\helper\uploadImage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $service = Service::find(1);

        $service = Service::all();
        return view('backend.service.index', compact('service'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::orderBy('id', 'desc')->get();
        $plan = PricePlan::all();
        return view('backend.service.create', compact('category', 'plan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $service;

        $service = new Service();

        // $input = $request->all();
        // // $planList = $request->plan;
        // $plan = $input['plans'];

        // $input['plan_id'] = implode(",", $plan);
        // // $service->fill($input)->save();
        // // $service->save();
        // Service::create($input);
        // return response()->json(['success' => 'Data Added successfully.']);
        // exit;


       
        // $plan = implode(',', $planList);
        // return $request->icon_picker;
   // dd($request->all());
        // $request->attach('plans', $request->plan);

          // $array = array($request->plan);
        // array_push($array);
        // return $a;

        //   return $planList = array_push($request->plan);

        // $planList = $plan[$request->plan];
        // $plan = implode(', ', $request->plan);

        // return array_slice(',',$request->plan);

        // $service->plan_id = $request->except('plan');

        // $array_request = $request->get('plan');
        // $array = array_chunk($array_request, 1);

        // $string = implode(",", $request->plan);

        //  $service->plan_id = $string;

        // $collection = collect([$request->plan]);

        // $collection = collect([
        //     ['plan_id' => 1, 'product' => 'Desk'],
        //     ['plan_id' => 2, 'product' => 'Chair'],
        // ]);

        // return $collection->implode(',');

        // $myString = implode(',', array_column($myArray, 'name'));

        // $string = implode(",", $your_array);

        // $collection->implode('product', ', ');



        //    $service->plan_id = array_merge($request->plan);


        // $output = implode(',', $request->plans);

        // dd($output);
        // json_encode($request->plan);

        // $service->plan_id = $request->attach('plans');
        // $service->plan_id = $service->plan()->attach($request->plans);
        // $service->plan_id = $service->plan()->attach($request->plans);


    //    $service->plan_id = json_encode($output);
        // return $request->plans;
 // foreach (request()->plans as $plan) {
        //     $service->plan()->attach($plan);
        // }


        // $service->plans()->attach($request->plans);

        // if ($request->has('plans')) {
        // }




        // $service= Service::where()->with('category')->get();


        //validation
        // $request->validate([
        //     'title' => 'required',
        //     'heading' => 'required',
        //     'cat_id' => 'required',
        //     'plan' => 'required',
        //     'status' => 'required',
        //     'icon' => 'required',
        //     'description' => 'required',
        //     'meta_title' => 'required',
        //     'meta_keywords' => 'required',
        //     'meta_description' => 'required',
        // ]);


     

        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->heading = $request->heading;
        $service->cat_id = $request->cat_id;
        
        $service->status = $request->status;
        $service->icon = $request->icon_picker;
        $service->description = $request->description;

       

        if ($request->hasFile('image')) {

            // Image Upload With Helper Function
            $url = uploadImage($request->file('image'), 'service');
            $service->image = $url;
        }


        $service->meta_title = $request->meta_title;
        $service->meta_keywords = $request->meta_keywords;
        $service->meta_description = $request->meta_description;

        $service->save();


        $notification = array(
            'message' => 'Service Created successfully',
            'alert-type' => 'success',
            'data' => 'Created',
        );
        return redirect()->route('service.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $Service)
    {
        //
        // return $Service;
        return view('backend.service.show', compact('Service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
        // return $service;
        $category = Category::orderBy('id', 'desc')->get();
        $plan = PricePlan::all();
        return view('backend.service.edit', compact('service', 'category', 'plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $Service)
    {
        //

        // return $request->icon_picker;

        $Service->title = $request->title;
        $Service->slug = Str::slug($request->title);
        $Service->heading = $request->heading;
        $Service->cat_id = $request->cat_id;
        $Service->plan_id = $request->plan;
        $Service->status = $request->status;
        // $Service->icon = $request->icon;
        $Service->icon = $request->icon_picker;
        $Service->description = $request->description;
        $Service->meta_title = $request->meta_title;
        $Service->meta_keywords = $request->meta_keywords;
        $Service->meta_description = $request->meta_description;

        # IF You Change image
        if ($request->hasFile('image')) {

            // delete old image with Helper Function
            deleteImage($Service->image);

            # Image upload with Helper Function
            $url = uploadImage($request->file('image'), 'service');
            $Service->image = $url;
        }

        $Service->save();

        $notification = array(
            'message' => 'Service Updated successfully',
            'alert-type' => 'success',
            'data' => 'Updated',
        );

        return redirect()->route('service.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $Service)
    {
        //

        # Image Delete on Destroy

        deleteImage($Service->image);

        // $Service->delete();
        Service::destroy($Service->id);
        $notification = array(
            'message' => 'Service Deleted successfully',
            'alert-type' => 'error',
            'data' => 'Deleted',
        );
        return redirect()->route('service.index')->with($notification);
    }
}
