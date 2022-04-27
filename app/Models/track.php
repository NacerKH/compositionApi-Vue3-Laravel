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

    public function is_base64($str):bool
{
    return (bool)preg_match('/data:([a-zA-Z0-9]+\/[a-zA-Z0-9-.+]+).base64,.*/', $str);
}

}
