<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrackResource;
use App\Http\Traits\UploadFile;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class TrackController extends Controller
{
    use UploadFile ;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():AnonymousResourceCollection
    {
        return TrackResource::collection(Track::paginate(4));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):TrackResource
    {
         $request->validate(
             [
                 'title'=>'required',
                 'description'=>'required',
                 'image'=>'sometimes|base64dimensions:min_width=100,min_height=200',
                //  'audio'=>'required',
                 'is_favourite'=>'nullable',
             ]
             );
          
        if ($request->image){
        $imageName=$this->uploadFile($request['image']);
                              }
         if ($request->audio){
        $audioName=$this->uploadFile($request['audio']);
                             }
         $track= Track::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=> isset($imageName) ?'/storage/tracks/'.$imageName : "",
            'audio'=>isset($audioName) ?'/storage/tracks/audios/'.$audioName : "",
            'is_favourite'=>$request->is_favourite ?? 0,
        ]);
        return new TrackResource($track);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track,$id):TrackResource
    {      $track=Track::find($id);
        return TrackResource::make($track);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track,$id):TrackResource
    {
        $testIfImageBase64=$track->is_base64($request->image); //check New image if new image it must be type base64


        $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
                'image'=>'required',

               //  'audio'=>'required',
                'is_favourite'=>'nullable',
            ]);
            if ($testIfImageBase64){

                $image_64 = $request['image']; //your base64 encoded data
                $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf
                $replace = substr($image_64, 0, strpos($image_64, ',')+1);
                // find substring fro replace here eg: data:image/png;base64,
                $image = str_replace($replace, '', $image_64);
                $image = str_replace(' ', '+', $image);
                $imageName = Str::random(10).'.'.$extension;
                 $file_path =Storage::disk('tracks')->put($imageName, base64_decode($image));
            }
            $track=Track::find($id);
            $track->update(['title'=>$request->title,'description'=>$request->description,'is_favourite'=>$request->is_favourite,'image'=>$testIfImageBase64==true?'/storage/tracks/'.$imageName:$request->image]);
            return new TrackResource($track);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track, $id):Response
{
        $track->find($id)->delete();
        return response()->noContent();
    }


}
