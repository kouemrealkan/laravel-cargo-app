<?php

namespace App\Mail;

use App\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserContactTrackNumber extends Mailable
{
    use Queueable, SerializesModels;
    public $contact_form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactForm $contact_form)
    {
        $this->contact_form = $contact_form;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('alkan4802@gmail.com')
            ->subject(config('app.name') . ' - Şikeyet Takip Kodu')
            ->view('mails.contact-track-number');
    }
}
