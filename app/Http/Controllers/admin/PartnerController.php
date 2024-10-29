<?php

namespace App\Http\Controllers\admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partner = Partner::all();   
        return view('backend.partner.index',compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Partner $partner)
    {
        //

        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image_name = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('/uploads/partner');
        //     $url = 'uploads/partner/' . $image_name;
        //     $image->move($destinationPath, $image_name);
        //     $partner->image =  $url;
        // }



        # Img upload  in database

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $url = $image->move('uploads/partner/', $filename);
            $partner->image = $url;
            $partner->save();
        }


        
        $partner->title = $request->title;
        $partner->url = $request->url;
        $partner->status = $request->status;

        $partner->save();

        return redirect()->route('partner.index');
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
    public function edit(Partner $partner)
    {
        //
        return view('backend.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        //

        $partner->title = $request->title;
        $partner->url = $request->url;
        $partner->status = $request->status;

        # IF You hange image
        if ($request->hasFile('image')) {

            # Old Image Delete on Helper Function
            if (File::exists($partner->image)) {
                File::delete($partner->image);
            }

            # Image Upload with Helper Function
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $url = $image->move('uploads/partner/', $filename);
            $partner->image = $url;
        }

        $partner->save();
        return redirect()->route('partner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        // Delete on Database

        # 1st way Query Builder
        // DB::table('partners')->where('id',$partner->id)->delete(); // Delete Data on Database

        # 2nd way Eloquent ORM
        // $partner->delete();

        # 3rd way Query Builder
        // DB::table('partners')->where('id',$partner->id)->delete(); // Delete Data on Database

        # 4th way Eloquent ORM
        // $partner->delete();

        # Img upload and old img delete
        if (File::exists($partner->image)) {
            File::delete($partner->image);
        }

        Partner::destroy($partner->id);
        return redirect()->route('partner.index');
    }
}
