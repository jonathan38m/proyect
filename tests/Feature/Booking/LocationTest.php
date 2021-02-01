<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_location()
    {
        // yo conozco que existe el id 1 y 7 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.locations'), [
            'locations' => [1, 7],
            'students' => 1
        ]);
        $response->assertOk();
        $response->assertSessionHasNoErrors();
        $response->assertJsonStructure(['message']);
    }


    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_no_estan_los_parametros()
    {
        // yo conozco que existe el id 1 y 2 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.locations'), [
          //
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['locations', 'students']);
    }
}
