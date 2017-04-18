<?php

namespace Artqiyi\Controllers;

use App\Http\Controllers\Controller;
use Artqiyi\Controllers\BaseController;
use Artqiyi\Logics\OrderLogic;
use Artqiyi\Models\CouponModel;
use Artqiyi\Models\OrderModel;
use Artqiyi\Models\OrderWareModel;
use Artqiyi\Models\WareModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends BaseController
{
    public function store(Request $request)
    {
        $order = new OrderModel;
        Auth::user()->orders()->save($order);

        $ware = WareModel::findOrFail($request->ware_id);

        $orderWare = new OrderWareModel;
        $orderWare->fill($ware->toArray());
        $orderWare->num = $request->num;
        $orderWare->total_price = sprintf('%0.2f', $ware->price * $request->num);
        $orderWare->order_id = $order->order_id;
        $orderWare->save();

        return redirect(route('order.confirm', [$order->order_id]));
    }

    public function confirm($order_id)
    {
        $order = OrderModel::find($order_id);
        return view('order.confirm', compact('order'));
    }

    public function pay($order_id)
    {
        OrderLogic::pay($order_id);

        return redirect(route('ware.index'));
    }
}