<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('updated_at', 'DESC')->paginate(4);
        return view('pages.blog.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blog.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation du formulaire
        $request->validate([
            'title'=> 'required|max:255',
            'content'=>'required|max:2000',
            'url_img'=> 'required|max:2000|mimes:png,jpg',
            'author'=> 'required|max:255',
        ]);

        $validateImg = $request->file('url_img')->store('cover');

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'url_img' => $validateImg,
            'author' => $request->author,
            'created_at' =>now()
        ]);

        // redirect
        return redirect()->route('blog')->with('status', 'Post enregistré');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('pages.blog.showBlog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
         return view('pages.blog.editBlog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // validate form
         $request->validate([
            'title'=> 'required|max:255',
            'content'=>'required|max:2000',
            'url_img'=> 'required|sometimes|max:2000|mimes:png,jpg',
            'author'=> 'required|max:255',
        ]);

        // 2 if image
        if ($request->hasFile('url_img')){
        //delete the images
        Storage::delete($blog->url_img);
        // store new image in storage
        $blog->url_img = $request->file('url_img')->store('cover');
        }

        //3 update and store to DB
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'url_img' => $blog->url_img,
            'author' => $request->author,
            'created_at' =>now()
        ]);

        //4 redirect
        return redirect()->route('blogs.show', $blog->id)->with("status", 'modification réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog')->with('status', 'Post deleted!');
    }
}
