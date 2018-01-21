<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PageController extends Controller
{
    public function index(){
    	$posts=Post::all();
    	return view('index',compact('posts'));
    }
    public function add_post(Request $request){
    	$post=new Post;
    	$post->name=$request->name;
    	$post->post=$request->post;
    	$post->title=$request->title;
    	$post->likes=0;
    	$post->save();
    	return back()->with('success','Post Added Successfullly');
    }
    public function edit_post($id){
    	$posts=Post::find($id);
    	return view('edit',compact('posts'));
    }
    public function post_edit(Request $request,$id){
    	$post=Post::find($id);
    	$post->name=$request->name;
    	$post->post=$request->post;
    	$post->title=$request->title;
    	$post->save();
    	return back()->with('success','Post Updated Successfullly');
    }
    public function viewpost($id){
    	$posts=Post::find($id);
    	$comments=Post::find($id)->comments;
    	 return view('viewpost',compact('posts','comments'));
    	
    }
    public function addlike($id){
    	$posts=Post::find($id);
    	$likecount=$posts->likes;
    	$likecount+=1;
    	$posts->likes=$likecount;
    	$posts->save();
    	return back();
    }
    public function add_comment(Request $request,$id){
    	$commnets= new Comment;
    	$commnets->post_id=$id;
    	$commnets->comments=$request->cmnt;
    	$commnets->save();
    	return back();
    }
    public function delete($id)
    {
    	$delpost=Post::find($id);
    	$delpost->delete();
    	$delcmt=Comment::where('post_id',$id)->delete();
    	
    	return back()->with('success','Post Deleted Successfullly');

    }
}
