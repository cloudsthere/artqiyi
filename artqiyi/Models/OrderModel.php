<?php

namespace Artqiyi\Models;

use Artqiyi\Models\OrderWareModel;
use Artqiyi\Models\UserModel;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'orders';

    protected $primaryKey = 'order_id';

    public function user()
    {
        return $this->belongsToOne(UserModel::class, 'user_id', 'user_id');
    }

    public function wares()
    {
        return $this->hasMany(OrderWareModel::class, 'order_id', 'order_id');
    }
}
