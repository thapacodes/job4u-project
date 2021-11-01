<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'fully_remote',
        'work_region',
        'description',
        'salary',
        'experience',
        'education',
        'uploaded_by',
        'status'
    ];
}
