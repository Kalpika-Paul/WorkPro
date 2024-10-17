<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'emp_id', 'dept', 'date'];

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'emp_id');
    }
}

