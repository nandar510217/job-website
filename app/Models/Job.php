<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Job.php model
    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function category () {
        return $this->hasMany(Job::class);
    }

}

