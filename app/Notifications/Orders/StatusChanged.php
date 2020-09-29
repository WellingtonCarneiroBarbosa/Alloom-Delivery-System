<?php

namespace App\Notifications\Orders;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StatusChanged extends Notification
{
    use Queueable;

    public $order, $franchise;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order, $franchise)
    {
        $this->order = $order;
        $this->franchise = $franchise;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if($this->order->pick_up_at_the_counter === 1) {
            $message = "Seu pedido foi concluído e está aguardando a retirada.";
        } else {
            $message = "Seu pedido está a caminho!";
        }

        return (new MailMessage)
                    ->line($message)
                    ->action('Visualizar Detalhes', route("tenant-front.franchise.order.details", [
                        $this->franchise->tenant->url_prefix, $this->franchise->url_prefix, $this->order->id
                    ]))
                    ->line('Agradecemos por realizar mais um pedido com a gente! Abraços.')
                    ->line($this->franchise->tenant->corporative_name . ", " . $this->franchise->name );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
