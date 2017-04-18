<?php

namespace Artqiyi\Tags;

class CouponTag
{
    public function render()
    {
        $coupons = \Auth::user()->coupons;

        return view('tags.coupon', compact('coupons'));
    }
}