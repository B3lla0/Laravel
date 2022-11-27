<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostList extends Model
{
    use HasFactory;

    protected $fillable = ['postTitle', 'postBody'];
}
