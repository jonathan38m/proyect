<?php

namespace Tests\Feature;

use App\Booking;
use Tests\TestCase;

class StudentInfoTest extends TestCase
{

    /**
     * Verifica que el student info cargue correctamente si
     * tenemos el id del booking y este se ha procesado correctamente si el booking fue rpcesado con tarjeta de credito
     *
     * @test
     * @return void
     */
    public function student_ok()
    {
        // por defecto el booking se procesa con tarjeta de credito
        $booking = factory(Booking::class)->create([
            'authorizationResult' => '00',
        ]);

        $response = $this->withSession(['booking' => $booking->id])->get(route('student-info'));

        $response->assertOk();
        $response->assertSessionHasNoErrors();
    }

    /**
     * Verifica que el student info cargue correctamente si
     * tenemos el id del booking y este se ha procesado correctamente y fue procesado
     * con un metodo de pago que no sea tarjeta de credito
     *
     * @test
     * @return void
     */
    public function student_ok_withouth_credit_card()
    {
        // por defecto el booking se procesa con tarjeta de credito
        $booking = factory(Booking::class)->create([
            'payment_id'          => 2,
        ]);

        $response = $this->withSession(['booking' => $booking->id])->get(route('student-info'));

        $response->assertOk();
        $response->assertSessionHasNoErrors();
    }

    /**
     * Verifica que el student info se rediriga al check out
     * si el booking fue procesado con tarjeta de credito y no se pudo realizar el pago
     *
     * @test
     * @return void
     */
    public function student_redirecct_error_pay()
    {
        // por defecto el booking se procesa con tarjeta de credito
        $booking = factory(Booking::class)->create([
            'authorizationResult' => '01',
        ]);

        $response = $this->withSession(['booking' => $booking->id])->get(route('student-info'));

        $response->assertStatus(302);
        $response->assertRedirect(route('booking.checkout'));
    }

    /**
     * Verifica que el student info se rediriga al check out
     * si el booking fue procesado con tarjeta de credito y aún no se realiza el pago
     *
     * @test
     * @return void
     */
    public function student_redirecct_still_pay()
    {
        // por defecto el booking se procesa con tarjeta de credito
        $booking = factory(Booking::class)->create();

        $response = $this->withSession(['booking' => $booking->id])->get(route('student-info'));

        $response->assertStatus(302);
        $response->assertRedirect(route('booking.checkout'));
    }

    /**
     * Redireccionar la página del booking si no se tiene el id del booking en la sesión
     *
     * @test
     * @return void
     */
    public function asegurar_que_el_studetn_se_redireccion_al_booking_si_no_tiene_el_id_del_booking()
    {
        $response = $this->get(route('student-info'));

        $response->assertStatus(302);
        $response->assertRedirect(route('booking.create'));
    }

}
