<?php

namespace App\Http\Controllers\admin;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function App\Helper\deleteImage;
use function App\Helper\uploadImage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonials = Testimonial::all();
        return view('backend.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Testimonial $testimonial)
    {
        //
        $testimonial->client_name = $request->client_name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        // $testimonial->status = $request->status;

        # Image Upload with Helper Function

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('uploads/testimonial/', $filename);
        //     $testimonial->image = $filename;
        // }




        if ($request->hasFile('image')) {
            $UploadFile = uploadImage($request->image, 'testimonial');
            $testimonial->image = $UploadFile;
        }

        // $url = uploadImage($request->image, 'testimonial');

        // $url = uploadImage($request->hasFile('image'), 'testimonial');
        // $testimonial->image = $UploadFile;

        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial Created Successfully');
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
    public function edit(Testimonial $testimonial)
    {
        //
        return view('backend.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
        $testimonial->client_name = $request->client_name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;


        if ($request->hasFile('image')) {

            # Old Image Delete on Helper Function
            deleteImage($testimonial->image);

            # Image Upload with Helper Function
            $url = uploadImage($request->file('image'), 'testimonial');
            $testimonial->image = $url;
        }




        # Old Image Delete on Helper Function
        // if ($request->hasFile('image')) {
        //     deleteImage($testimonial->image);
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('uploads/testimonial/', $filename);
        //     $testimonial->image = $filename;
        // }

        $testimonial->status = $request->status;

        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        # Delete Image with Helper Function

        # old img delete 

        if ($testimonial->image) {
            deleteImage($testimonial->image);
        }

        // if ($testimonial->image) {
        //     unlink('uploads/testimonial/' . $testimonial->image);
        // }

        // return $testimonial;
        // return deleteImage($testimonial->image);

        // if ($testimonial->image) {
        //     $old_image = 'uploads/testimonial/' . $testimonial->image;
        //     if (file_exists($old_image)) {
        //         unlink($old_image);
        //     }
        // }

        // deleteImage($testimonial->image);


        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial Deleted Successfully');
    }
}
