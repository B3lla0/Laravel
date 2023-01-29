<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostList extends Model
{
    use HasFactory;

    protected $table = 'postlist';
    protected $fillable = ['title', 'body', 'user_id'];
}
