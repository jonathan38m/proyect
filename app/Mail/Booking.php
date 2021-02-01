<?php

namespace App\Mail;

use App\Booking as Model;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Booking extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Model $booking)
    {
        //
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject(__('email.bookin-customer'))
        ->markdown('emails.custumer.booking');
    }
}
