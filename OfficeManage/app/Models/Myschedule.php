<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myschedule extends Model
{
    use HasFactory;


    protected $fillable =['id','user_id','title','type','descrpition','date'];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
