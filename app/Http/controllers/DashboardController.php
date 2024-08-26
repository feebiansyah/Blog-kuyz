<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;

use App\Models\Post;
use App\Models\Comment;

class DashboardController extends Controller
{
  public function index()
  {
    $posts = Post::where("user_id", Auth::id())->get();
    $post = $posts->first();
    $comments = [];
    
    if($post == null){
      $comments = collect($comments);
    }else{
      $comments = Comment::where("post_id", $post->id);
    }
    return view("dashboard.index", [
      "posts" => $posts,
      "comments" => $comments,
    ]);
  }

  public function showAllPosts()
  {
    Paginator::useBootstrap();
    $posts = Post::where("user_id", Auth::id())
      ->latest()
      ->paginate(5);

    return view("dashboard.show-posts", [
      "posts" => $posts,
    ]);
  }
  
  

  public function detailSinglePost(Post $post)
  {
    $comments = Comment::with('user')->where('post_id',
    $post->id)->get();
    return view("dashboard.detail-post", [
      "post" => $post,
      "comments" => $comments
    ]);
  }

  public function createPostForm()
  {
    return view("dashboard.form-posts");
  }

  public function actionCreatePostForm(Request $request)
  {
    $request->validate([
      "title" => "required|min:3|max:225",
      "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
      "content" => "required|min:5",
    ]);

    $slug = Str::slug($request->title);

    $originalSlug = $slug;
    $counter = 1;

    while (Post::where("slug", $slug)->exists()) {
      $slug = $originalSlug . "-" . $counter;
      $counter++;
    }

    $fotoName = time() . "." . $request->image->extension();
    $request->image->move(public_path("uploads/posts"), $fotoName);

    Post::create([
      "user_id" => Auth::id(),
      "title" => $request->title,
      "slug" => $slug,
      "content" => $request->content,
      "image" => "uploads/posts/" . $fotoName,
      "published_at" => now(),
    ]);

    return redirect()
      ->route("dashboard.posts")
      ->with(
        "pesan",
        'Post baru
      berhasil ditambahkan'
      );
  }

  public function deleteSinglePost(Post $post)
  {
    $post_title = $post->title;
    $post->delete();
    if (File::exists(public_path($post->image))) {
      File::delete(public_path($post->image));
    }

    return redirect()
      ->route("dashboard.posts")
      ->with(
        "pesan",
        "Postingan
    $post_title berhasil dihapus!"
      );
  }

  public function formEditSinglePost(Post $post)
  {
    if ($post->user_id !== Auth::id()) {
      return abort(403);
    }

    return view("dashboard.form-edit-post", [
      "post" => $post,
    ]);
  }

  public function actionEditSinglePost(Request $request, Post $post)
  {
    $request->validate([
      "title" => "required|min:3|max:225",
      "image" => "image|mimes:jpeg,png,jpg,gif|max:2048",
      "content" => "required|min:5",
    ]);

    $slug = Str::slug($request->title);

    $originalSlug = $slug;
    $counter = 1;

    while (Post::where("slug", $slug)->exists()) {
      $slug = $originalSlug . "-" . $counter;
      $counter++;
    }

    $post->title = $request->title;
    $post->slug = $slug;
    $post->content = $request->content;

    if ($request->hasFile("image")) {
      if (File::exists(public_path($post->image))) {
        File::delete(public_path($post->image));
      }
      
        $fotoName = time() . "." . $request->image->extension();
        $request->image->move(public_path("uploads/posts"), $fotoName);
        $post->image = "uploads/posts/" . $fotoName;
      
    }
 

      $post->save();

      return redirect()
        ->route("dashboard.posts")
        ->with(
          "pesan",
          "Postingan
    $post->title berhasil ubah!"
        );
  }
}
