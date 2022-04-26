<?php

namespace Tests\Feature;

use App\Models\Track;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrackControllerTest extends TestCase
{
     use RefreshDatabase;

     /**
     * @test
     */
    public function itListsTracks()
    {
         $this->seed();
        $response = $this->get('/api/Tracks');

        $response->assertOk();

         $this->assertCount(3,$response->json('data'));  //3 Cause Pagination If I use get or all We test 10 count
        //  dd($response->json('data'));
         $this->assertNotNull($response->json('data')[0]['audio']);
        $this->assertIsBool($response->json('data')[0]['is_favourite']);
    }

     /**
     * @test
     */
    public function itCreateTracks(){
        $response= $this->post('/api/Tracks',[
            'title'=> 'alain khalifa',
            'description'=> 'description testing',
            'image'=> 'kali for test image',
            'audio'=> 'kali for test audio',
            'is_favourite'=>true,
        ]);
        $tracks=Track::all();
        $track=Track::first();
        $response->assertOk();
        $this->assertEquals(1, $tracks->count());
        $this->assertEquals('alain khalifa',$track->title);
    }
    /**
     * @test
     */
    public function itValidatesFields()
    {
        $response= $this->post('/api/Tracks',[
            'title'=> '',
            'description'=> '',
            'image'=> '',
            'audio'=> '',
            'is_favourite'=>'',
        ]);
        $response->assertSessionHasErrors(['title','description','is_favourite']);
     }
    /**
     * @test
     */
    public function itShowTrack(){
        $this->seed();
        $idFirsTrack= Track::first()->id;
    $response = $this->get('/api/Tracks/'.$idFirsTrack);
    $response->assertOk();
     // dd(  $response->json('data'));
    $this->assertEquals($response->json('data')['id'],  $idFirsTrack );
    }
    /**
     * @test
     */
    public function itUpdateTrack(){
        $this->seed();
        $track= Track::first();
        $response= $this->put('/api/Tracks/'.$track->id,[
            'title'=>"kali",
            'description'=>'test',
            'is_favourite'=>false,
        ]);
        $updateTrack=Track::find($track->id);

        $response->assertOk();
        $this->assertEquals("kali",$updateTrack->title);
    }
     /**
     * @test
     */
    public function itDeletesTrack(){
        $this->seed();

        $track=Track::first();
        $response = $this->delete('/api/Tracks/' .$track->id);
        $response->assertNoContent();
      $this->assertEquals(9, Track::count()); // we seed 10 in databaserseeder after delete 1 we must get 9


    }
    }
