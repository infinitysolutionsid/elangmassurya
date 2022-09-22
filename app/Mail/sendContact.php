<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendContact extends Mailable
{
    public $getDM;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($getDM)
    {
        $this->getDM = $getDM;
    }
    public function build()
    {
        $string = base64_encode(random_bytes(4));
        $date = date('Ymd');
        return $this->from('contact@elangmassurya.co.id', 'Request Quotation #EMSQUOT' . $date)
            ->subject('[EMS-QUOTATION-' . $date . '] New contact for quotation has been requested!')
            ->markdown('emails.sendContact');
    }
}
