<?php

namespace App\Listeners\Artqiyi\Listeners;

use App\Events\Artqiyi\Events\OrderPayEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderPayListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderPayEvent  $event
     * @return void
     */
    public function handle(OrderPayEvent $event)
    {
        //
    }
}
