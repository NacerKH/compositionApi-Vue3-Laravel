<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrackResource;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():AnonymousResourceCollection
    {
        return TrackResource::collection(Track::OrderBy('created_at','DESC')->paginate(3));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(
             [
                 'title'=>'required',
                 'description'=>'required',
                //  'image'=>'required',
                //  'audio'=>'required',
                 'is_favourite'=>'required',
             ]
             );
        Track::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$request->image,
            'audio'=>$request->audio,
            'is_favourite'=>$request->is_favourite,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track,$id)
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
    public function update(Request $request, Track $track,$id)
    {
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
               //  'image'=>'required',
               //  'audio'=>'required',
                'is_favourite'=>'required',
            ]);
            $track=Track::find($id);
            $track->update($request->only(['title','description','is_favourite']));
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
