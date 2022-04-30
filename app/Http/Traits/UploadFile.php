<?php
namespace App\Http\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadFile
{

    public function uploadFile($files)
         {
            $image_64=$files;
            $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf
            $replace = substr($image_64, 0, strpos($image_64, ',')+1);
            // find substring fro replace here eg: data:image/png;base64 or data:audio/mpeg,
            $file = str_replace($replace, '', $image_64);
            $file = str_replace(' ', '+',  $file );
            $fileName = Str::random(10).'.'.$extension;
            $imageExtension = array("png", "jpeg", "jpg");
            $audioExtension = array("mpeg", "mp3", "wav","ogg");
            if (in_array($extension, $imageExtension )) {
                $file_path =Storage::disk('tracks')->put($fileName, base64_decode($file));

            }
            if (in_array($extension,  $audioExtension)) {
                $file_path =Storage::disk('tracksAudio')->put($fileName, base64_decode($file));

            }
            return  $fileName ;
        }


}





?>
