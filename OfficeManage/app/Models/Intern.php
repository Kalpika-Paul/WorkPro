<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','dept','supervisor','stipend','edu','email','phone','address','end_date','start_date','status'];
}
