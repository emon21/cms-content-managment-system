<?php

namespace App\Http\Controllers\admin;

use App\Models\Faq;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Faq = Faq::all();
        //  return $Plan;
        // return $Plan;
        return view('backend.Faq.index', compact('Faq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Faq $Faq)
    {
        //Validation 

        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        $Faq->title = $request->title;
        $Faq->slug = Str::slug($request->title);
        $Faq->status = $request->status;
        $Faq->description = $request->description;
        $Faq->save();

        $notification = array(
            'message' => 'FAQ Created successfully',
            'alert-type' => 'success',
            'data' => 'Created',
        );
        return redirect()->route('faq.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('backend.faq.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        
        return view('backend.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        //
        $faq->title = $request->title;
        $faq->slug = Str::slug($request->title);
        $faq->status = $request->status;
        $faq->description = $request->description;
        $faq->save();

        $notification = array(
            'message' => 'FAQ Updated successfully',
            'alert-type' => 'success',
            'data' => 'Update',
        );

        return redirect()->route('faq.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        
        $faq->delete();
       
        $notification = array(
            'message' => 'FAQ Deleted successfully',
            'alert-type' => 'error',
            'data' => 'Delete',
        );

        return redirect()->route('faq.index')->with($notification);
    }
}
