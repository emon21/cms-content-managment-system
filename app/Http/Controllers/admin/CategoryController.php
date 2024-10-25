<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('backend.category.index', compact('categories'));
        // return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        // return $request->all();

        $cat = Category::create([
            'name' => $request->input('CategoryName'),
            'slug' => Str::slug($request->CategoryName),
            'type' => $request->type,
            'status' => $request->input('status')
            // 'image' => $request->image,
        ]);

        // Picture Upload

        if ($request->hasFile('FileUpload')) {
            $image = $request->file('FileUpload');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $url = $image->move('uploads/category/', $filename);
            $cat->image = $url;
            $cat->save();
        }
        else{

            $cat->save();
        }

        // $cat = Category::create($request->all());

    // ===================================== dsdgdgdfgh ===================== 

        
        // $category = New Category();
        // $category->name = $request->input('CategoryName');
        // $category->slug = Str::slug($request->CategoryName);
        // $category->type = $request->type;
        // $category->status = $request->input('status');
        // $category->save();


        // return response()->json(['success' => true]);
        // return response()->json(['success' => 'Category Create Successfully ... !!']);

        // return response($cat);
        return redirect()->route('category');

        // $data = [];

        // return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $category = DB::table('categories')->where('id', $id)->first();
        // return $category;
        return view('backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

     
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // return $request->all();

        //update category

        // $cat = Category::findOrFail($id);
        // $cat = Category::find($id);
        // $cat = new Category();
      
        if ($request->hasFile('FileUpload')) {

            # old img delete
            $oldImg = Category::where('id',$id)->first();
            // return $oldImg;

            if (File::exists($oldImg->image)) {
                File::delete($oldImg->image);
            }
           
            # Image upload
            // $image = $request->file('FileUpload');
            // $file = $request->file('image');
            // $filename = time() . '.' . $file->getClientOriginalExtension();
            // $url = $file->move(public_path('uploads/car'), $filename);
            // $url = $file->move('uploads/category', $filename);
            // $url = $image->move('uploads/category/', $filename);

                // $file->move('uploads/car', $filename);
                // $url = uploadImage($request->file('image'), 'car');

            # Image upload
            $file = $request->file('FileUpload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $url = $file->move(public_path('uploads/car'), $filename);

            $url = $file->move('uploads/category/',$filename);

            // $file->move('uploads/car', $filename);
            
            Category::where('id', $id)->update([
                'name' => $request->input('CategoryName'),
                'slug' => Str::slug($request->CategoryName),
                'type' => $request->type,
                'status' => $request->input('status'),
                'image' => $url
            ]);
           
        } else {


            Category::where('id', $id)->update([
                'name' => $request->input('CategoryName'),
                'slug' => Str::slug($request->CategoryName),
                'type' => $request->type,
                'status' => $request->input('status')
            ]);

         
            // $car->CarImage = 'uploads/default.jpg';
          
        }

        
        return redirect()->route('category');

        // $cat->update($request->all());
        // return response()->json(['success' => 'Category Update Successfully ... !!']);

        // $cat = Category::find($id);

        // $cat = Category::where('id', $id);
        // ->update($request->all());

        // return $cat;

        // $cat->update($request->all());
        return response()->json(['success' => 'Category Update Successfully ... !!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cat = Category::find($id);

        //Delete Image with data
        if (File::exists($cat->image)) {
            File::delete($cat->image);
        }
        // return $cat;

        $cat->delete();
        return redirect('category');
        // return response()->json(['success' => 'Category Delete Successfully ... !!']);
    }
}
 