<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SignUp extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    /**
     * Create a new message instance.
     */
    public function __construct($name)
    {
        $this->name = $name;
        //
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->markdown('SignUpView');
        // return $this->from('musunzafestus2019@gmail.com')->attach('/path/to/file')->cc($moreUsers)->view('SignUpView');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sign Up',
        );
    }

    /**
     * Get the message content definition.
     */

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
