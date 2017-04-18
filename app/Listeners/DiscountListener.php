<?php

namespace App\Listeners;

use App\Events\SomeEvent;
use Artqiyi\Models\CouponModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DiscountListener
{
    private $discount = 0.9;
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle($event)
    {
        $event->order->money_reduce += $event->order->money_payable * (1 - $this->discount);
    }
}
