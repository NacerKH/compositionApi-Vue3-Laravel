<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Response;


use Illuminate\Support\Facades\File ;

 trait ListenAudio{

     public function listen($path)
     {
             $filename=public_path($path);
             $filesize = (int) File::size($filename);

             $file = File::get($filename);
           

             $response = Response::make($file, 200);
             $response->header('Content-Type', 'audio/mpeg');
             $response->header('Content-Length', $filesize);
             $response->header('Accept-Ranges', 'bytes');
             $response->header('Content-Range', 'bytes 0-'.$filesize.'/'.$filesize);

             return $response;}
 }

 ?>
