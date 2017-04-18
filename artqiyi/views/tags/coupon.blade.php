<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">优惠券</div>

  <!-- Table -->
  <table class="table">
    <tr>
        <td></td>
        <td>商品名</td>
        <td>价格</td>
    </tr>
    @foreach($coupons as $coupon)
    <tr>
        <td><input name="coupon_id" type="radio" value='{{$coupon->coupon_id}}'></td>
        <td>{{$coupon->name}}</td>
        <td>{{$coupon->amount}}</td>
    </tr>
    @endforeach
  </table>
</div>
