<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetters extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'employer',
        'job_seeker',
        'status'
    ];
}
