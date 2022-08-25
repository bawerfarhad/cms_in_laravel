<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    //

    public function index(){
        $posts= Post::all();
        return view('admin.posts.show-all-posts',['posts'=>$posts]);
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

        // auth()->user()->posts()-
        Session::flash('created-message','post "'.$new_post->title .'" has been created');
        return redirect()->route('admin.posts');

        // dd(auth()->user()->id);
    }
                // first way to delete the record and show the flash message
//    public function destroy(Post $post){
//        $post->delete();
//        Session::flash('message','post has been deleted');
//        return back();
//    }

    // other way to delete the record and show the flash message
    public function destroy(Post $post, Request $request){
        $post->delete();
        $request->session()->flash('deleted-message','post "'.$post->title.'" has been deleted');
        return back();
    }

}
