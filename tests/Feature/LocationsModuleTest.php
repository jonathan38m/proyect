<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Location;
use App\Article;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocationsModuleTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * load the locations for booking.
     *
     * @test 
     */
    public function it_load_all_locations()
    {

        //$this->withoutExceptionHandling();

        $response = $this->post(route('load.all.locations'),[]);
        $response->assertStatus(200);
        //$response->assertSee("Location");
    }

    /**
     * load the locations for booking.
     *
     * @test 
     */
    public function be_sure_select_a_location()
    {
        $response = $this->post(route('validate.locations'));
        
        $response->assertSessionHasErrors(['locations']);
    }

    /**
     * load the locations for booking.
     *
     * @test 
     *
     */
    public function be_sure_select_a_exits()
    {
        $location = array('id'=>0);

        $response = $this->post('/locationsValidate', [
            'locations' => array($location),
        ]);
        $response->assertSessionHasErrors(['locations']);
    }

    /**
     * load the locations for booking.
     *
     * @test 
     *
    
    public function be_sure_that_all_is_ok()
    {
        $location1 = factory(Location::class)->create();
        dd($location1);
        $location = array('id'=>$location1->id);
        $response = $this->post('/locationsValidate', [
            'locations' => array($location)
        ]);
        $response->assertStatus(200);
    } */
}
