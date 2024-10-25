<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blog = Blog::all();

        return view('backend.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('backend.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // $blog = New Blog(); // Object Create 
        // $blog->title = $request->title;

        $data = []; // array
        // $data = array();
        $data['title'] = $request->title;
        $data['slug'] = Str::slug($request->title);
        $data['cat_id'] = $request->cat_id;
        $data['tags'] = $request->tags;
        $data['description'] = $request->description;
        $data['author'] = $request->author;
        $data['publish_date'] = $request->publish_date;
        // $date = date('D-m-y');
        // $data['publish_date'] = now($request->publish_date);
        $data['status'] = $request->status;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['meta_description'] = $request->meta_description;

        # Image upload
        $file = $request->file('FileUpload');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        // $url = $file->move(public_path('uploads/car'), $filename);
        $url = $file->move('uploads/blog/', $filename);
        $data['image'] = $url;

        // create Blog

        DB::table('blogs')->insert($data);
        // DB::table('blogs')->create($data);
        // Blog::create($data);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        $blogList = Blog::where('cat_id', $blog->cat_id)->get();
        // $category = Blog::where('cat_id',$blog->cat_id)
        // ->Join()
        // ->LeftJoin()
        // ->get();
        // return $blog;
        return view('backend.blog.single-blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        // return $blog;
        $category = Category::all();

        return view('backend.blog.edit', compact('blog', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
        // return $blog;
        // return $request->BlogID;

        // Blog::Where('id', $blog->id)->update([
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title),
        //     'cat_id' => $request->cat_id,
        //     'tags' => $request->tags,
        //     'description' => $request->description,
        //     'author' => $request->author,
        //     'publish_date' => $request->publish_date,
        //     'status' => $request->status,
        //     'meta_title' => $request->meta_title,
        //     'meta_keywords' => $request->meta_keywords,
        //     'meta_description' => $request->meta_description,


        // ]);

        if($request->hasFile('FileUpload')) {

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

        else{
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

       



        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        // return $blog;
        // Delete Data From Database

        # 1st way Query Builder
        // DB::table('blogs')->where('id',$blog->id)->delete(); // Delete Data on Database

        # 2nd way Eloquent ORM

        //    Blog::where('id', $blog->id)->delete();
        //   $list = Blog::destroy($DeleteID->id);
        //   $list = Blog::destroy($DeleteID);
        //   return $DeleteID->title;

        #img upload and old img delete
        if (File::exists($blog->image)) {
            File::delete($blog->image);
        }
        Blog::whereId($blog->id)->delete();
        //    return $ll;

        return redirect()->route('blog.index')->with('status', 'Blog Deleted Successfully Done..!!');
    }
}
