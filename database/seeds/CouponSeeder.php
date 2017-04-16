<?php

use Artqiyi\Models\CouponModel;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coupon = new CouponModel;
        $coupon->name = '满100减10';
        $coupon->user_id = 1;
        $coupon->amount = 10;
        $coupon->save();

        $coupon = new CouponModel;
        $coupon->name = '满100减20';
        $coupon->user_id = 1;
        $coupon->amount = 20;
        $coupon->save();
    }
}
