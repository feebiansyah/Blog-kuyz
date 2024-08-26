<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

//Route grop untuk auth
Route::group(["middleware" => "guest"], function () {
  Route::get("/login", [AuthController::class, "formLogin"])->name("login");
  Route::post("/login", [AuthController::class, "actionLogin"])->name("login");

  Route::get("/registrasi", [AuthController::class, "formRegistrasi"])->name(
    "registrasi"
  );
  Route::post("/registrasi", [AuthController::class, "actionRegistrasi"])->name(
    "registrasi"
  );
});

//Route grup untuk dashboard
Route::group(["middleware" => "auth"], function () {
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
  
  Route::get("/dashboard", [DashboardController::class, "index"])->name(
    "dashboard"
  );
  Route::get("/dashboard/posts", [
    DashboardController::class,
    "showAllPosts",
  ])->name("dashboard.posts");
  
  
  Route::get("/dashboard/post/{post:slug}", [DashboardController::class,
  'detailSinglePost'])->name('dashboard.post.detail');
  Route::get("/dashboard/posts/create", [
    DashboardController::class,
    "createPostForm",
  ])->name("dashboard.posts.create");
  Route::post("/dashboard/posts/create", [
    DashboardController::class,
    "actionCreatePostForm",
  ])->name("dashboard.posts.create");
  
  
  
  
  
  Route::get("/dashboard/post/delete/{post:slug}", [
    DashboardController::class,
    "deleteSinglePost",
  ])->name("dashboard.post.delete");
  Route::get("/dashboard/post/edit/{post:slug}", [
    DashboardController::class,
    "formEditSinglePost",
  ])->name("dashboard.post.edit");
  Route::post("/dashboard/post/edit/{post:slug}", [
    DashboardController::class,
    "actionEditSinglePost",
  ])->name("dashboard.post.edit");
  
  //Komentar

Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');
  
});

Route::get("/",[HomeController::class, 'index'])->name("home");
Route::get("/posts", [PostController::class, 'allPost'])->name("posts");
Route::get("/post/{post:slug}", [PostController::class, 'singlePost'])->name("post");
Route::get("/about", [HomeController::class, 'about'])->name("about");
Route::get("/posts/search", [PostController::class,
'search'])->name("posts.search");

