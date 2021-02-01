<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Carbon\Carbon;

class AccommodationTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_accommodation_1()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 1,
            'startDate' => Carbon::now(),
            'endDate' => Carbon::now(),
            'meals' => 1,
            'bathroom' => 1,
            'people' => 1,
            'type' => 1,
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
    public function formulario_se_envia_correctamente_accommodation_2()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 2,
            'startDate' => Carbon::now(),
            'endDate' => Carbon::now(),
            'people' => 1,
            'type' => 1,
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
    public function formulario_se_envia_correctamente_accommodation_3()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 3,
            'nameHotel' => 'Hotel',
            'addressHotel' => 'Direccion',
            'phoneHotel' => '123'
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
    public function formulario_se_envia_correctamente_accommodation_4()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 4,
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
    public function formulario_falla_si_no_envia_parametros_accommodation()
    {
        $response = $this->post(route('validate.accommodation'), [
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['accommodation']);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_no_envia_parametros_accommodation_1()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 1,
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['startDate','endDate','meals','bathroom','people','type']);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_envia_parametros_incorrectos_accommodation_1()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 1,
            'startDate' => 'fecha',
            'endDate' => 'fecha',
            'meals' => "123",
            'bathroom' => "123",
            'people' => "1234",
            'type' => "123",
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['startDate','endDate','meals','bathroom','people','type']);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_no_envia_parametros_accommodation_2()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 2,
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['startDate','endDate','people','type']);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_envia_parametros_incorrectos_accommodation_2()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 2,
            'startDate' => 'fecha',
            'endDate' => 'fecha',
            'people' => "1234",
            'type' => "123",
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['startDate','endDate','people','type']);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_no_envia_parametros_accommodation_3()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 3,
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['nameHotel','addressHotel','phoneHotel']);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_envia_parametros_incorrectos_accommodation_3()
    {
        $response = $this->post(route('validate.accommodation'), [
            'accommodation' => 3,
            'nameHotel' => '123456789012345678901',
            'addressHotel' => 'qwertyuiopñlkjhgfdsazxcvbnm1234567890qwertyuiopñlkjhgfdsazxcvbnm1234567890qwertyuiopñlkjhgfdsazxcvbnm1234567890',
            'phoneHotel' => "123456789012345678901",
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['nameHotel','addressHotel','phoneHotel']);
    }
}
