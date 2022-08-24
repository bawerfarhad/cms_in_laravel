<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function index(){
        return view('admin.posts.show-all-posts');
    }


    public function show(Post $post){
        // $post=Post::findOrFail($id);
        return view('blog-section.blogs', compact('post'));
    }

    public function create(){
        return view('admin.posts.create-post');
    }
    // public function store(){
    public function store(Request $request){ // use this way to works with the $new_post->save();
      
        // $inputs= request()->validate([
        //     'title'=>'required',
        //     'body'=>'required',
        // ]);


            $request->validate([
                'title'=>'required',
                'body'=>'required',
            ]);


        if($request->post_image){
            $request->post_image= $request->post_image->store('images');
        }
        
        $new_post= new Post;

        $new_post->user_id=auth()->user()->id;

        $new_post->title=$request->title;

        $new_post->body=$request->body;

        $new_post->post_image=$request->post_image;
        
        $new_post->save();  //auth()->user()->posts()->save(); // it works

        // auth()->user()->posts()->create($inputs);
        return view('admin.posts.show-all-posts');

        // dd(auth()->user()->id);
    }

}
