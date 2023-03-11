<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'slug',
        'pname',
        'category',
        'link',
        'progress',
        'status',
        'thumbnail',
        'description',
    ];
}
