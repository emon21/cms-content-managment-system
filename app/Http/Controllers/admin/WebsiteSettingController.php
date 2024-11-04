<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
use App\Http\Controllers\Controller;

class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('backend.websiteSetting.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new website setting
        WebsiteSetting::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_author' => $request->meta_author,
            'meta_copyright' => $request->meta_copyright,
            'meta_robots' => $request->meta_robots,
            'meta_canonical' => $request->meta_canonical,
            'status' => $request->status,
            'image' => $request->image,
            'image_alt' => $request->image_alt,
            'image_title' => $request->image_title,
            'image_position' => $request->image_position,
            'image_url' => $request->image_url,
            'image_width' => $request->image_width,
            'image_height' => $request->image_height,
            'image_border_radius' => $request->image_border_radius,
            'image_border_width' => $request->image_border_width,
            'image_border_color' => $request->image_border_color,
            'image_border_style' => $request->image_border_style,
            'image_background_color' => $request->image_background_color,
            'image_background_image' => $request->image_background_image,
            'image_background_position' => $request->image_background_position,
            'image_background_repeat' => $request->image_background_repeat,
            'image_background_attachment' => $request->image_background_attachment,
            'image_background_size' => $request->image_background_size,
            'image_background_opacity' => $request->image_background_opacity,
            'image_background_gradient' => $request->image_background_gradient,
            'image_background_gradient_color_1' => $request->image_background_gradient_color_1,
            'image_background_gradient_color_2' => $request->image_background_gradient_color_2,
            'image_background_gradient_color_3' => $request->image_background_gradient_color_3,
            'image_background_gradient_color_4' => $request->image_background_gradient_color_4,
            'image_background_gradient_color_5' => $request->image_background_gradient_color_5,
            'image_background_gradient_color_6' => $request->image_background_gradient_color_6,
            'image_background_gradient_color_7' => $request->image_background_gradient_color_7,
            'image_background_gradient_color_8' => $request->image_background_gradient_color_8,
            'image_background_gradient_color_9' => $request->image_background_gradient_color_9,
            'image_background_gradient_color_10' => $request->image_background_gradient_color_10,
            'image_background_gradient_color_11' => $request->image_background_gradient_color_11,
            'image_background_gradient_color_12' => $request->image_background_gradient_color_12,

            'primary_color' =>$request->primary_color,
            'secondary_color' => $request->secondary_color,
            'tertiary_color' => $request->tertiary_color,
            'quaternary_color' => $request->quaternary_color,
            'quinary_color' => $request->quinary_color,
            'senary_color' => $request->senary_color,
            'septenary_color' => $request->septenary_color,
            'octonary_color' => $request->octonary_color,
            'nonary_color' => $request->nonary_color,
            'decenary_color' => $request->decenary_color,
            'color_1' => $request->color_1,
            'color_2' => $request->color_2,
            'color_3' => $request->color_3,
            'color_4' => $request->color_4,
            'color_5' => $request->color_5,
            'color_6' => $request->color_6,
            'color_7' => $request->color_7,
            'color_8' => $request->color_8,
            'color_9' => $request->color_9,
            'color_10' => $request->color_10,
            'color_11' => $request->color_11,
            'color_12' => $request->color_12,
            'color_13' => $request->color_13,
            'color_14' => $request->color_14,
            'color_15' => $request->color_15,
            'color_16' => $request->color_16,
            'color_17' => $request->color_17,
            'color_18' => $request->color_18,
            'color_19' => $request->color_19,
            'color_20' => $request->color_20,
            'color_21' => $request->color_21,
            'color_22' => $request->color_22,
            'color_23' => $request->color_23,
            'color_24' => $request->color_24,
            'color_25' => $request->color_25,
            'color_26' => $request->color_26,
            'color_27' => $request->color_27,
            'color_28' => $request->color_28,            

        ]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
