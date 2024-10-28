<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PricePlan;
use App\Helper\helper;

use function App\Helper\deleteImage;
use function App\Helper\uploadImage;

// use function App\Helper\helper\uploadImage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $ServiceList)
    {
        // $service = Service::find(1);

        $service = Service::all();
        // return $ServiceList;
        return view('backend.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::orderBy('id','desc')->get();
        $plan = PricePlan::all();
        return view('backend.service.create', compact('category','plan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Service $service)
    {
        //

        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->heading = $request->heading;
        $service->cat_id = $request->cat_id;
        $service->plan_id = $request->plan;
        $service->status = $request->status;
        $service->icon = $request->icon;

        $service->description = $request->description;
        // $service->image = $request->image;

        // $service->image = $request->image;
        # Image upload with Helper Function
        // helper::imageUpload($request,'image','uploads/service/');
        // uploadImage($request,'image','uploads/service/');

        // if($request->hasFile('image')) {
        //     $UploadFile = uploadImage($request->image,'service/');
        //     $service->image = $UploadFile;
        // }
        // else{
        //     $UploadFile = uploadImage($request->image,'service/');
        //     $service->image = $UploadFile;
        // }

        // $UploadFile = uploadImage($request->FileUpload, 'service');

        $url = uploadImage($request->file('image'), 'service');
        // $service->image = $url;

            // $url = uploadImage($request->image, 'service');
            $service->image = $url;


        // $service->save();

        $service->meta_title = $request->meta_title;
        $service->meta_keywords = $request->meta_keywords;
        $service->meta_description = $request->meta_description;

        $service->save();

          return redirect()->route('service.index')->with('success', 'Service Created Successfully');
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

    
        $Service->title = $request->title;
        $Service->slug = Str::slug($request->title);
        $Service->heading = $request->heading;
        $Service->cat_id = $request->cat_id;
        $Service->plan_id = $request->plan;
        $Service->status = $request->status;
        $Service->icon = $request->icon;
        $Service->description = $request->description;
        $Service->meta_title = $request->meta_title;
        $Service->meta_keywords = $request->meta_keywords;
        $Service->meta_description = $request->meta_description;


        # Image Delete on Update
        // if (File::exists($cms->login_page_image)) {
        //     File::delete($cms->login_page_image);
        // }

        # IF You want to change the OLD Image and Keep the NEW Image on Update
        // if ($request->hasFile('image')) {

        // if ($request->hasFile('image')) {


        
        if ($request->hasFile('image')) {

            deleteImage($Service->image);
            $url = uploadImage($request->file('image'), 'service');
            $Service->image = $url;
        }

        // if ($request->hasFile('image')) {
            
        // }
        // }


        // $url = uploadImage($request->login_page_image, 'login');
        // $cms->login_page_image = $url;

        # Image upload with Helper Function
        // helper::imageUpload($request,'image','uploads/service/');
        // $service->image = $url;

        $Service->save();

        return redirect()->route('service.index')->with('success', 'Service Updated Successfully');
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
        return redirect()->route('service.index')->with('success', 'Service Deleted Successfully');
    }
}
