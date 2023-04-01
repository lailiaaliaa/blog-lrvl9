<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //mengatur supaya kolom title dan content bisa diisi (fill)
    protected $fillable = ['title', 'content'];
    use HasFactory;
}
