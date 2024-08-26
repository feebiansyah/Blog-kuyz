<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function allPost()
    {
      Paginator::useBootstrap();
      $posts = Post::with('user')->latest()->paginate(9);
      
      return view('posts', [
        "posts" => $posts]);
    }
    
    public function singlePost(Post $post)
    {
    $comments = Comment::with('user')->where('post_id', $post->id)->get();
      return view('post', [
        "post" => $post,
        "comments" => $comments
        ]);
    }
    
    public function search(Request $request)
    {
      Paginator::useBootstrap();
        
      if($request->has('search')){
        $posts = Post::with('user')->where('title', 'LIKE', '%'.
        $request->search. '%' )->latest()->paginate(9);
      }else{
        $posts = Post::with('user')->latest()->paginate(9);
      }
      
      return view('posts', [
        "posts" => $posts]);
    }
    
   
}
