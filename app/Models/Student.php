<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'menus';
    
    protected $fillable = ['id','name','slug','parent_id','created_at','updated_at'];
}
