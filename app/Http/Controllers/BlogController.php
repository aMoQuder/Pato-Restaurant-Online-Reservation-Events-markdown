<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Model\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = blog::orderBy('created_at', 'desc')->paginate(3);;
        return view('blog', compact('blogs'));
    }
    public function all()
    {
        $blogs = blog::all();
        return view('blog.all', compact('blogs'));
    }

    /////////////////////create///////////////////////

    public function create()
    {
        return view('blog.create');
    }
    /////////////////////save created//////////////////////

    public function store(BlogRequest $request)
    {

        $imageName = "";
        if ($request->hasFile("image")) {
            $image = $request->image;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("blog/img/"), $imageName);
        }


        blog::create([
            "title" => $request->title,
            "image" => $imageName,
            "description" => $request->description,
        ]);
        return redirect()->route('createblog')->with("massege", "successfully adding new blog");
    }

    /////////////////////Delete///////////////////////
    public function delete($id)
    {
        $blog = blog::findOrFail($id);
        if (File::exists(public_path('blog/img/' . $blog->image))) {
            File::delete(public_path('blog/img/' . $blog->image));
        }
        $blog->delete();
        return redirect()->back()->with("massege", "successfully deleted blog");
    }



    /////////////////////  Edit///////////////////////
    public function edit($id)
    {
        $blog = blog::findOrFail($id);
        return view("blog.edit", ['blog' => $blog]);
    }




    ///////////////////// Save Edit///////////////////////


    public function save(Request $request)
    {
        $imageName = "";
        $old_id = $request->old_id;


        if ($request->description == "") {
            $old_description = $request->old_description;
        } else {
            $old_description = $request->description;
        }


        $blog = blog::findOrFail($old_id);

        if ($request->hasFile('image')) {
            if (File::exists(public_path('blog/img/' . $blog->image))) {
                File::delete(public_path('blog/img/' . $blog->image));
            }
            $image = $request->image;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("blog/img/"), $imageName);
        } else {
            $imageName = $request->old_img;
        }

        $blog->update([
            'image' => $imageName,
            'title' => $request->title,
            "description" =>  $old_description,
        ]);
        return redirect()->route('allblog')->with("massege", "successfully updated new blog");
    }
}
