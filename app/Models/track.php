<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $casts =['is_favourite'=> 'boolean'];
    protected $fillable= ['title', 'description', 'image','audio','is_favourite'];
    public $timestamps=false;

}
