<?php

namespace Tests\Feature;

use Tests\TestCase;

class BillingDetailsTest extends TestCase
{

    public function test_booking_load()
    {      
        $response = $this->get(route('booking.create'));
        $response->assertSessionHasNoErrors();
        $response->assertStatus(200);
    }

    public function test_all_field_are_requiere()
    {        
        $response = $this->post(route('validate.billing.information'),[]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors([
            'title',
            'lname',
            'fname',
            'email',
            'country',
            'address',
            'city'
        ]);
    }

    public function test_title_is_a_number()
    {        
        $response = $this->post(route('validate.billing.information'),[
            'title' => 'Mrs.'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['title']);
    }
    public function test_lname_has_min_length()
    {        
        $response = $this->post(route('validate.billing.information'),[
            'lname' => 'll'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['lname']);
    }
    public function test_lname_has_max_length()
    {        
        $response = $this->post(route('validate.billing.information'),[
            'lname' => 'lllllllllllllllllllllllllllllll'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['lname']);
    }
    public function test_fname_has_min_length()
    {        
        $response = $this->post(route('validate.billing.information'),[
            'fname' => 'll'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['fname']);
    }
    public function test_fname_has_max_length()
    {        
        $response = $this->post(route('validate.billing.information'),[
            'fname' => 'lllllllllllllllllllllllllllllll'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['fname']);
    }
    public function test_email_is_a_email()
    {        
        $response = $this->post(route('validate.billing.information'),[
            'email' => 'jonathan.com'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['email']);
    }
    public function test_country_exist()
    {       
        //$this->withoutExceptionHandling(); 
        $response = $this->post(route('validate.billing.information'),[
            'country' => '0'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['country']);
    }
    public function test_address_has_min_length()
    {        
        $response = $this->post(route('validate.billing.information'),[
            'address' => 'll'
        ]);
        $response->assertStatus(302); 
        $response->assertSessionHasErrors(['address']);
    }
}
