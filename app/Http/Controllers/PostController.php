<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class PostController extends Controller
{
    //
    public function create(){
    	return view('posts.create');
    }
    public function save(Request $request){
    	$created = post::create([
    		'title'=>$request->title,
    		'body'=>$request->body
    	]);
    	if ($created) {
    		return redirect('/post/create')->with('message','poste successful');
    	}
    }
    public function allposts(){
    	$posts=post::all();
    	return view('posts.allposts',compact('posts'));
    }
    public function singlepost(post $post){
    	$spost = post::find($post); // is jaga per koi issue ha 
    	return view('posts.singlepost',compact('spost'));
    }
}
