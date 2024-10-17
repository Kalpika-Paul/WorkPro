<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id', 
        'assigned_team', 
        'status', 
        'due_date', 
        'dependencies'
    ];

    // Define relationships if necessary
    public function addtask()
    {
        return $this->belongsTo(Addtask::class, 'task_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'assigned_team');
    }
}
