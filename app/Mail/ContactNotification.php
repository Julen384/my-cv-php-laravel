<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $email;
    public string $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $email, string $message)
    {
        //
        $this -> email = $email;
        $this -> message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this -> from($this -> email) -> subject('Contacto desde la Web') -> markdown('emails.contact');

    }
}
