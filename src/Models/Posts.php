<?php

namespace Soulplus\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['title'];
}
