<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseAppliedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
   public function build()
    {
        return $this->from('info@theaccity.com', 'The Accity')
                    ->subject('Course Application Confirmation')
                    ->view('emails.course_applied')
                    ->with('data', $this->data);
    }

}
