<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CourseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function seccion_course_se_carga_correctamente()
    {
        // yo conozco que existe el id 1 y 2 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('load.selected.courses'), [
            'locations' => [1, 2],
            'students' => 1
        ]);
        $response->assertOk();
        $response->assertSessionHasNoErrors();
        $response->assertSeeInOrder(['id', 'name', 'alias']);
    }


    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_course()
    {
        // yo conozco que existe el id 1 y 7 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.courses'), [
            'courses' => [1, 7]
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
    public function formulario_falla_si_no_estan_los_parametros_course()
    {
        // yo conozco que existe el id 1 y 2 por q las pruebas se ejecutan despues de las migraciones
        $response = $this->post(route('validate.courses'), [
          //
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['courses']);
    }


    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_id_no_existe_course()
    {
        $response = $this->post(route('validate.courses'), [
            'courses' => [0]
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['courses']);
    }
}
