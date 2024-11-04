<?php

namespace App\Http\Controllers\admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $gallery = Gallery::all();
        $category = Category::all();
        return view('backend.gallery.index',compact('gallery','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('backend.gallery.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Gallery $gallery)
    {
        //
        // $request->validate([
        //     'image' => 'required',
        // ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/gallery');
            $image->move($destinationPath, $image_name);
            $url = 'uploads/gallery/' . $image_name;
            $gallery->image = $url;

        }

        $gallery->title = $request->title;
        $gallery->type = $request->type;
        $gallery->cat_id = $request->cat_id;
        $gallery->status = $request->status;
        $gallery->save();

        $notification = array(
            'message' => 'Gallery Created successfully',
            'alert-type' => 'success',
            'data' => 'Created',
        );
        return redirect()->route('gallery.index')->with($notification);




    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
        return view('backend.gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //

        $category = Category::all();
        return view('backend.gallery.edit',compact('gallery','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        # If You want to change the OLD Image and Keep the NEW Image on Update

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');

        //     $image_name = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('uploads/gallery');
        //     $image->move($destinationPath, $image_name);
        //     $url = 'uploads/gallery/' . $image_name;
        //     $gallery->image = $url;
        // }


        #Old image delete and new image upload

        if (File::exists($gallery->image)) {
            File::delete($gallery->image);
        }


        # Image Upload

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/gallery');
            $image->move($destinationPath, $image_name);
            $url = 'uploads/gallery/' . $image_name;
            $gallery->image = $url;
        }


        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image_name = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('uploads/gallery');
        //     $image->move($destinationPath, $image_name);
        //     $url = 'uploads/gallery/' . $image_name;
        //     $gallery->image = $url;
        // }
        
        $gallery->title = $request->title;
        $gallery->type = $request->type;
        $gallery->cat_id = $request->cat_id;
        $gallery->status = $request->status;
        $gallery->save();

        $notification = array(
                'message' => 'Gallery Updated successfully',
                'alert-type' => 'success',
                'data' => 'Updated',
            );
        return redirect()->route('gallery.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        
        # Delete on Image
        
        if (File::exists($gallery->image)) {
            File::delete($gallery->image);
        }

        $gallery->delete();

        $notification = array(
            'message' => 'Gallery Deleted successfully',
            'alert-type' => 'error',
            'data' => 'Deleted',
        );
        return redirect()->route('gallery.index')->with($notification);
    }
}
