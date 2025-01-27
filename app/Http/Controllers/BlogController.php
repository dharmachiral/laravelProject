<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog=blog::all();
        return view("blog.index",compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "blogName" => "required",
            "content" => "required",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif", // Validation for image image |max:2048
        ]);

        $imageName = null;

        // Handle the file upload if the image image is provided
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension(); // Generate a unique name
            $request->image->move(public_path('images/blogs'), $imageName); // Save to the directory
        }

        // Create the blog record
        blog::create([
            'blogName' => $request->blogName,
            'content' => $request->content,
            'image' => $imageName, // Save the generated image name
        ]);

        return redirect()->back()->with('success', 'Blog added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        return view("blog.show",compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return view("blog.edit",compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "blogName" => "required",
            "content" => "required",
            // "image" => "nullable|image|mimes:jpeg,png,jpg,gif", // Validation for image image |max:2048
        ]);

        $blog = blog::findOrFail($id);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/blogs'), $imageName);
        }
        else{
            $imageName = $blog->image;
        }
        // Update other fields
        $blog->update([
            'blogName' => $request->blogName,
            'content' => $request->content,
            'image' =>$imageName,
        ]);
        // return redirect()->back()->with('success', 'Blog edit successfully!');
        return redirect()->route("blogs.index")->with('success', 'blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $blog->delete();
        // return redirect()->back()->with('success', 'Blog delete successfully!');
    return redirect()->route("blogs.index")->with('success', 'blog deleted successfully.');
    }
}
