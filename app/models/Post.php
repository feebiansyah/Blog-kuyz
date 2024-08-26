<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
  use HasFactory;

  protected $table = "posts";

  protected $fillable = [
    "user_id",
    "title",
    "slug",
    "content",
    "image",
    "published_at",
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
}
