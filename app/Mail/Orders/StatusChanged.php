<?php

namespace App\Mail\Orders;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatusChanged extends Mailable
{
    use Queueable, SerializesModels;

    public $order, $franchise;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $franchise)
    {
        $this->order = $order;
        $this->franchise = $franchise;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.orders.status-changed')->with([
            "order" => $this->order,
            "franchise" => $this->franchise
        ]);
    }
}
