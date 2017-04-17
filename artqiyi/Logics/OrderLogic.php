<?php

namespace Artqiyi\Logics;

use Artqiyi\Events\OrderPayEvent;
use Artqiyi\Models\OrderModel;

class OrderLogic extends AbstractLogic
{
    public static function pay($order_id)
    {
        $order = OrderModel::find($order_id);

        $order->money_payable = $order->wares()->lists('total_price')->sum();

        event(new OrderPayEvent($order));

        $order->money_paid = $order->money_payable - $order->money_reduce;
        $order->status = 1;
        $order->save();
    }
}