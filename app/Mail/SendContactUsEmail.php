<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;

class SendContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $details;

    public function __construct($payload)
    {
        $this->details = $payload;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-us')
        ->subject('Contact us email')
        ->to(Config::get('forms.forms.contact-us.email'), 'Contact us email')
        ->with([
            'details' => $this->details
        ]);
    }
}
