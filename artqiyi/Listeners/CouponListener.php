<?php

namespace Artqiyi\Listeners;

use App\Events\SomeEvent;
use Artqiyi\Models\CouponModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CouponListener
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle($event)
    {
        $request = request();

        if ($request->coupon_id) {
            $event->order->money_reduce = CouponModel::find($request->coupon_id)->amount;
        }
    }
}
