<?php

return  [
    'Artqiyi\Events\OrderPayEvent' => [
        'Artqiyi\Listeners\CouponListener',
        'App\Listeners\DiscountListener',
    ],
    'Artqiyi\Events\ViewEvent' => [
        'Artqiyi\Listeners\ViewListener',
    ]
];