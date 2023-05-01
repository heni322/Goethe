<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'path', 'path_name', 'jobs_id'];

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }
}
