<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Comment;

class Comment extends Model
{
  use HasFactory;

  protected $table = "comments";

  protected $fillable = ["post_id", "user_id", "content"];

  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
