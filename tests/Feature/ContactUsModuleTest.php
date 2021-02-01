<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Article;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactUsModuleTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * load the contact us is OK
     *
     * @test 
     */
    public function it_loads_page_contact_us_ok()
    {
        //$this->withoutExceptionHandling();
        $response = $this->get(route('contact'));
        $response->assertStatus(200);
    }

    /**
     *  Verificar que los campos del formualrios sean requeridos
     *
     * @test
     */
    public function testNameIsRequiredInFormInformation()
    {
        $response = $this->post(route('informationform'));
        $response->assertStatus(302); 
        // esto es por que si el campo no esta debo ser rediriguido a la pagina anterior
        $response->assertSessionHasErrors([
            'name',
            'email',
            'subject',
            'message',
            'g-recaptcha-response'
        ]);
    }

    /**
     *  Verificar que el campo "name" tenga minimo 3 letras
     *
     * @test
     */
    public function testNameIsMinInFormInformation()
    {
        $response = $this->post(route('informationform'),[
            'name' => 'as',
        ]);
        $response->assertStatus(302); 
        // esto es por que si el campo no esta debo ser rediriguido a la pagina anterior
        $response->assertSessionHasErrors(['name']);
    }

    /**
     *  Verificar que el campo "email" sea valido
     *
     * @test
     */
    public function testEmailIsValidInFormInformation()
    {
        $response = $this->post(route('informationform'),[
            'email' => 'test',
        ]);
        $response->assertStatus(302); 
        // esto es por que si el campo no esta debo ser rediriguido a la pagina anterior
        $response->assertSessionHasErrors(['email']);
    }

    /**
     *  Verificar que el campo "subject" tenga minimo 3 letras
     *
     * @test
     */
    public function testSubjectIsMinInFormInformation()
    {
        $response = $this->post(route('informationform'),[
            'subject' => 'xx'
        ]);
        $response->assertStatus(302); 
        // esto es por que si el campo no esta debo ser rediriguido a la pagina anterior
        $response->assertSessionHasErrors(['subject']);
    }
}
