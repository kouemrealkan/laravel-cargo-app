<?php

namespace App\Mail;

use App\Models\CargoTransit;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCargoTrackNumber extends Mailable
{
    use Queueable, SerializesModels;

    public $cargo_transit;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CargoTransit $cargo_transit)
    {
        $this->cargo_transit = $cargo_transit;
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
            ->subject(config('app.name') . ' - Kargo Takip Numarası')
            ->view('mails.cargo-track-number');
    }
}
