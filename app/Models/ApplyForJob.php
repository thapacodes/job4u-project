<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyForJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'applied_by_id',
        'status'
    ];
}
