<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BillingDetailsTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_billing()
    {
        $response = $this->post(route('validate.billing.information'), [
            'title'=> '1',
            'lname'=> 'Mejía',
            'fname'=> 'Jonathan',
            'email'=> 'jonathan38m@gmail.com',
            'country'=> '1',
            'address'=> 'Av. sancho de Escobar',
            'city'=> 'Quito',
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
    public function formulario_falla_si_no_envia_parametros_billing()
    {
        $response = $this->post(route('validate.billing.information'), [
          //
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
          'title',
          'lname',
          'fname',
          'email',
          'country',
          'address',
          'city',
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_falla_si_se_envia_parametros_erroneos_billing()
    {
        $response = $this->post(route('validate.billing.information'), [
            'title'=> 'uno',
            'lname'=> 'a',
            'fname'=> 'a',
            'email'=> 'jonathan38m',
            'country'=> '0',
            'address'=> 'qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345',
            'city'=> 'qwertyuiopñlkjhgfdsazxcvbnm12345',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
          'title',
          'lname',
          'fname',
          'email',
          'country',
          'address',
          'city',
        ]);
    }

    /**
     * Verifica que la direccion acepte una longitud de  max de 191
     *
     * @test void
     */
    public function form_ok_with_address_less_than_191()
    {
        $response = $this->post(route('validate.billing.information'), [
            'title'=> '1',
            'lname'=> 'Apellido',
            'fname'=> 'Nombre',
            'email'=> 'test@test.com',
            'country'=> 65,
            'address'=> 'qwertyuiopñlkjhgfdsazxcvbnm12345qwertyuiopñlkjhgfdsazxcvbnm12345',
            'city'=> 'New York',
        ]);
        $response->assertOk();
        $response->assertSessionHasNoErrors();
    }
}
