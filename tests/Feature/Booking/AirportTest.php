<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Carbon\Carbon;

class AirportTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_airport_1()
    {
        $response = $this->post(route('validate.airport.information'), [
            'meetAirport' => true,
            'dateArrival' => Carbon::now(),
            'timeArrival' => '13:00',
            'airlineCompany' => 'Tame',
            'flightNumber' => '12354',
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
    public function formulario_se_envia_correctamente_airport_2()
    {
        $response = $this->post(route('validate.airport.information'), [
            'meetAirport' => false,
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
    public function formulario_falla_si_no_envia_parametros_airport_1()
    {
        $response = $this->post(route('validate.airport.information'), [
            'meetAirport' => true,
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'dateArrival',
            'timeArrival',
            'airlineCompany',
            'flightNumber',
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_no_envia_parametros_airport_2()
    {
        $response = $this->post(route('validate.airport.information'), [
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([ 'meetAirport' ]);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_envia_parametros_erroneos_airport_1()
    {
        $response = $this->post(route('validate.airport.information'), [
            'meetAirport' => true,
            'dateArrival' => 'prueba',
            'timeArrival' => '123',
            'airlineCompany' => 'qwertyuiopoñlkjgfdsazxcvbnm1234567890qwertyuiopoñlkjgfdsazxcvbnm1234567890',
            'flightNumber' => 'qwertyuiopoñlkjgfdsazxcvbnm1234567890qwertyuiopoñlkjgfdsazxcvbnm1234567890',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'dateArrival',
            'timeArrival',
            'airlineCompany',
            'flightNumber',
          ]);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_envia_parametros_erroneos_airport_2()
    {
        $response = $this->post(route('validate.airport.information'), [
            'meetAirport' => 'hola',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([ 'meetAirport' ]);
    }
}
