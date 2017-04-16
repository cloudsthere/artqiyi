<?php

namespace Artqiyi\Models;

use Illuminate\Database\Eloquent\Model;

class OrderWareModel extends Model
{
    protected $table = 'order_wares';

    protected $fillable = ['ware_name', 'price', 'ware_id'];

}
