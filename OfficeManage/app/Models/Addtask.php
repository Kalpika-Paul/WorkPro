<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addtask extends Model
{
    use HasFactory;

    protected $fillable = ['id','taskName','dept','description','priority','deadline','status','client_id'];

    public function client(){
        
        return $this->belongsTo(Client::class, 'client_id');
    }
}
