<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyForJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'avater',
        'resume',
        'about',
        'education',
        'experience',
        'skill',
        'contact',
        'address',
        'status'
    ];
}
