<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['name', 'image', 'file_type', 'file_type', 'message', 'status', 'fb_id', 'fb_post_id'];
}
