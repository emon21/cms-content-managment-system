<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Helper\ProgressBar;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blog = Blog::all();
        return view('backend.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $category = Category::all();
        $tags = Tag::all();
        return view('backend.blog.create', compact('category','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        # Validation 
        // $request->validate([
        //     'title'=> 'required|unique:blogs|max:255',
        //     'FileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $blog = New Blog(); // Object Create 

        $data = []; // array
        // $data = array();

        $data['title'] = $request->title;
        $data['slug'] = Str::slug($request->title);
        $data['cat_id'] = $request->cat_id;
        $tag = implode(',', $request->tags);
        // dd($tag);
        $data['tag_id'] = $tag;

        $data['description'] = $request->description;
        $data['author'] = $request->author;
        $data['publish_date'] = $request->publish_date;

        // $date = date('D-m-y');
        // $data['publish_date'] = now($request->publish_date);

        $data['status'] = $request->status;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['meta_description'] = $request->meta_description;



        if ($request->file('FileUpload')) {

            # Image upload
            $file = $request->file('FileUpload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $url = $file->move(public_path('uploads/car'), $filename);
            $url = $file->move('uploads/blog/', $filename);
            $data['image'] = $url;
        }


        // create Blog

        // DB::table('blogs')->insert($data);
        // DB::table('blogs')->create($data);
        Blog::create($data);


        $notification = array(
            'message' => 'Blog Created Successfully Done..!!',
            'alert-type' => 'success',
            'data' =>'Created'
        );

        return redirect()->route('admin.blog.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        

        $blogList = Blog::where('cat_id', $blog->cat_id)->get();
        return view('backend.blog.single-blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $category = Category::all();
        return view('backend.blog.edit', compact('blog', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {

        # Validation 
        // $request->validate([
        //     'title' => 'required|unique:blogs|max:255',
        //     'FileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        if ($request->hasFile('FileUpload')) {

            #img upload and old img delete
            if (File::exists($blog->image)) {
                File::delete($blog->image);
            }

            # Image upload
            $file = $request->file('FileUpload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $url = $file->move(public_path('uploads/car'), $filename);
            $url = $file->move('uploads/blog/', $filename);
            // $file->move('uploads/car', $filename);
            // $url = uploadImage($request->file('image'), 'car');
            $blog->image = $url;

            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->cat_id = $request->cat_id;
            $blog->tags = $request->tags;
            $blog->description = $request->description;
            $blog->author = $request->author;
            $blog->publish_date = $request->publish_date;
            $blog->status = $request->status;
            $blog->meta_title = $request->meta_title;
            $blog->meta_keywords = $request->meta_keywords;
            $blog->meta_description = $request->meta_description;
            $blog->save();
        }

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->cat_id = $request->cat_id;
        $blog->tags = $request->tags;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->publish_date = $request->publish_date;
        $blog->status = $request->status;
        $blog->meta_title = $request->meta_title;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;
        $blog->save();



        $notification = array(
            'message' => 'Blog Updated Successfully Done..!!',
            'alert-type' => 'success',
            'data' => 'Updated',

        );

        return redirect()->route('admin.blog.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        #img upload and old img delete
        if (File::exists($blog->image)) {
            File::delete($blog->image);
        }

        Blog::whereId($blog->id)->delete();

        
        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'error',
            'data' => 'Deleted',
           
        );

        return redirect()->route('admin.blog.index')->with($notification);
    }
}
