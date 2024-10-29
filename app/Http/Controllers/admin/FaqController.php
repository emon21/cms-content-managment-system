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
        //
        $Faq->title = $request->title;
        $Faq->slug = Str::slug($request->title);
        $Faq->status = $request->status;
        $Faq->description = $request->description;

        $Faq->save();

        return redirect()->route('faq.index')->with('success', 'Faq Created Successfully');
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
        //
        // return $faq;
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

        return redirect()->route('faq.index')->with('success', 'Faq Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        //

        // $faq->delete();

        Faq::destroy($faq->id);

        return redirect()->route('faq.index')->with('success', 'Faq Deleted Successfully');
    }
}