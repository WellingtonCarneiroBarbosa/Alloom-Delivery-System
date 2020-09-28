<?php

namespace App\Observers\TenantFront;

use App\Events\TenantFront\NewOrder;
use App\Models\Franchise\Order\Order;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Models\Franchise\Order\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        //
    }

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Models\Franchise\Order\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        //this should work, but it doesn't work :(
        //checks type of update
        if($order->isDirty('confirmed_by_receiver')){
            //emmit event
            event(new NewOrder($order));
            // email has changed
            //$new_email = $order->email;
            //$old_email = $order->getOriginal('email');
          }


    }

    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Models\Franchise\Order\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Models\Franchise\Order\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Models\Franchise\Order\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
