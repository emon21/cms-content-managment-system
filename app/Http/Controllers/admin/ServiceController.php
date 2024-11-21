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
         $plan = PricePlan::all();

        //  $service = Service::all();
        return view('backend.service.index', compact('service', 'plan'));
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

        // $service = new Service();
        // return $service;
        
        // $service->title = $request->title;
        // $service->slug = Str::slug($request->title);
        // $service->heading = $request->heading;
        // $service->cat_id = $request->cat_id;

        // $service->plan_id  = implode(',', $request->plans);

        // $service->status = $request->status;
        // $service->icon = $request->icon_picker;
        // $service->description = $request->description;
        // $service->plans()->attach([$request->plans]);

        // $title = $request->input('title');
        // $slug = Str::slug($title);

        // dd($service);

        // $service->plans()->attach([1, 2, 3]);
        // $service->meta_title = $request->meta_title;
        // $service->meta_keywords = $request->meta_keywords;
        // $service->meta_description = $request->meta_description;
        // $service->save();

        $service = Service::create([
            'title' => $request->title,
            'slug' => Str::slug('-', $request->title),
            'heading' => $request->heading,
            'cat_id' => $request->cat_id,
            'status' => $request->status,
            'icon' => $request->icon_picker,
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);

        $service->plans()->attach($request->plans);


        if ($request->hasFile('image')) {

            // Image Upload With Helper Function
            $url = uploadImage($request->file('image'), 'service');
            $service->image = $url;
        }

        // Service::create($service);

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
        $plan = PricePlan::all();
        return view('backend.service.show', compact('Service','plan'));
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
        // $Service->plan_id = $request->plan;
        $Service->plans()->sync($request->plans);

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
