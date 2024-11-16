<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class WebsiteController extends Controller
{
    //
    public function index(){
        return view('website.index');
    }

    public function service() {
        
        return view('website.service');        
    }

    public function blog()
    {
        return view('website.blog');
    }

    public function partner()
    {
        return view('website.partner');
    }

    public function team() {
        return view('website.team');        
    }

    public function pricePlan() {
        return view('website.plan');        
    }

    public function testimonial() {
        return view('website.testimonial');        
    }

    public function faq()
    {
        return view('website.faq');
    }

    public function ModelCreate(){
        // // php artisan make:model $modelName;
        // Artisan::call('cache:clear');
        // Artisan::call('config:clear');
        // // Artisan::make();

        // // return redirect()->route('website.home');
        // return back();

        return view('backend.create-model');
    }


    public function ModelStore(Request $request)
    {
        // // php artisan make:model $modelName;
        // Artisan::call('cache:clear');
        // Artisan::call('config:clear');
        // // Artisan::make();

        // // return redirect()->route('website.home');
        // return back();
        
        
        $model = $request->input('createModel');
        // return $model;
        // $emon."_".
        $type = $request->input('type');


        // $folder = "user";
        // $createName = $model . "/" . "Emon";

        // if($createName){

        // }
        // else{

        // }
        // $list = Artisan::call("make:migration" . " " . $type.'/'.$model);
        //make:migration create_flights_table
        Artisan::call("make:migration" . " create" .$model.'s'.'_table');
        // dd(Artisan::output());
        // return response($list)->json('create',"Model create success");


        $notification = array(
            'message' => 'Model Created successfully',
            'alert-type' => 'success',
            'data' => 'Created',
        );
        return redirect()->route('model-create')->with($notification);


        // return response()->json(['success' => 'Model Create ' . $list . ' Success']);

        // return view('backend.create-model');
    }
}
