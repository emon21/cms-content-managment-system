<?php

namespace App\Http\Controllers\admin;

use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $TeamMembers = TeamMember::all();
        return view('backend.team.index', compact('TeamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, TeamMember $TeamMember)
    {
        //

        // if ($request->hasFile('image')) {
        //     # Image Upload
        //     $image = $request->file('image');
        //     $image_name = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('uploads/team'), $image_name);
        //     $url= 'uploads/team/' . $image_name;
        //     $TeamMember->image = $url;
        // }


        # Img upload  in database

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $url = $image->move('uploads/team/', $filename);
            $TeamMember->image = $url;
            // $TeamMember->save();
        }

        $TeamMember->name = $request->name;
        $TeamMember->designation = $request->designation;
        $TeamMember->facebook = $request->facebook;
        $TeamMember->twitter = $request->twitter;
        $TeamMember->instagram = $request->instagram;
        $TeamMember->linkedin = $request->linkedin;
        $TeamMember->status = $request->status;


        // # If you want to upload Image
        // if ($request->hasFile('image')) {
        //     // Image Upload
        //     $image = $request->file('image');
        //     $image_name = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('uploads/team'), $image_name);
        //     $TeamMember->image = 'uploads/team/' . $image_name;
        //     $TeamMember->image = $image_name;
        // }

        $TeamMember->save();

        return redirect()->route('team-member.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamMember $teamMember)
    {
        //
        // return $teamMember;
        return view('backend.team.show', compact('teamMember'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $TeamMember)
    {
        //
        return view('backend.team.edit', compact('TeamMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $TeamMember)
    {
        //

        // $TeamMember->update($request->all());

        # IF Yoy CHange Image with Update
        if ($request->hasFile('image')) {
            // delete old image
            if (File::exists($TeamMember->image)) {
                File::delete($TeamMember->image);
            }

            # Image Upload
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/team'), $image_name);
            $url = 'uploads/team/' . $image_name;
            $TeamMember->image = $url;
        }


        // $TeamMember->update($request->all());
        $TeamMember->name = $request->name;
        $TeamMember->designation = $request->designation;
        $TeamMember->facebook = $request->facebook;
        $TeamMember->twitter = $request->twitter;
        $TeamMember->instagram = $request->instagram;
        $TeamMember->linkedin = $request->linkedin;
        $TeamMember->status = $request->status;
        $TeamMember->save();


        return redirect()->route('team-member.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $TeamMember)
    {
        //

        # Delete on Image

        if (File::exists($TeamMember->image)) {
            File::delete($TeamMember->image);
        }

        # Delete the team member

        // $TeamMember->delete();

        TeamMember::destroy($TeamMember->id);
        return redirect()->route('team-member.index');
    }
}
