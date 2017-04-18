@extends('layout.app')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">确认订单: {{$order->order_id}}</div>

  <!-- Table -->
  <table class="table">
    <tr>
        <td>商品名</td>
        <td>价格</td>
        <td>数量</td>
        <td>小计</td>
    </tr>
    @foreach($order->wares as $ware)
    <tr>
        <td>{{$ware->ware_name}}</td>
        <td>{{$ware->price}}</td>
        <td>{{$ware->num}}</td>
        <td>{{$ware->total_price}}</td>
    </tr>
    @endforeach
  </table>
</div>

<form action="{{route('order.pay', $order->order_id)}}" method="post">
{{csrf_field()}}
    
{{tag('pay.confirm')}}



 <div class="btn-group" role="group" aria-label="...">
   <button type="submit" class="btn btn-primary">支付</button>
 </div> 
</form>
@endsection