<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrackControllerTest extends TestCase
{
    /**
     * @test
     */
    public function itListsTracks()
    {
        $response = $this->get('/api/Tracks');

        $response->assertOk();
         $this->assertCount(10,$response->json('data'));
        // dd($response->json('data'));
         $this->assertNotNull($response->json('data')[0]['audio']);
        $this->assertIsBool($response->json('data')[0]['is_favourite']);
    }
}
