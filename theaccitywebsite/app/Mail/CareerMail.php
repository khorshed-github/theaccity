<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $cvPath;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $cvPath = null)
    {
        $this->data = $data;
        $this->cvPath = $cvPath;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $mail = $this->from('info@theaccity.com', 'The Accity')
                    ->subject('New Job Application - ' . $this->data['fullName'])
                    ->view('emails.career')
                    ->with('data', $this->data);

        if ($this->cvPath) {
            $mail->attach($this->cvPath);
        }

        return $mail;
    }
}
