<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OptionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function seccion_options_se_carga_correctamente()
    {
        // yo conozco que existe el id 1 y 2 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('load.selected.options'), [
            'courses' => [1, 2],
        ]);
        $response->assertOk();
        $response->assertSessionHasNoErrors();
        $response->assertSeeInOrder(['id', 'name', 'alias', 'location', 'options']);
    }


    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_option()
    {
        // yo conozco que existe el id 1 y 7 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.options'), [
            'options' => [ '20hrsWeek' => [ 'id' =>  1, 'weeks' => "1"]]
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
    public function formulario_falla_si_no_estan_los_parametros_option()
    {
        // yo conozco que existe el id 1 y 2 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.options'), [
          //
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['options']);
    }


    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_se_envia_id_no_existe_y_weeks_no_numerica_option()
    {
        // yo conozco que existe el id 1 y 2 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.options'), [
            'options' => [ '20hrsWeek' => [ 'id' =>  0, 'weeks' => "hola"]]
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['options.*.id','options.*.weeks']);
    }


    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_se_envia_sin_precio_plus_o_semanas_option()
    {
        // yo conozco que existe el id 1 y 2 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.options'), [
          'options' => [ '20hrsWeek' => [ 'id' =>  1,]]
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['options.*']);
    }
}
