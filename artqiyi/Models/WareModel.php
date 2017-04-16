<?php

namespace Artqiyi\Models;

use Artqiyi\Models\WareImageModel;
use Illuminate\Database\Eloquent\Model;

class WareModel extends Model
{
    protected $table = 'wares';

    protected $primaryKey = 'ware_id';

    public function images()
    {
        return $this->hasMany(WareImageModel::class, 'ware_id', 'ware_id');
    }
}
