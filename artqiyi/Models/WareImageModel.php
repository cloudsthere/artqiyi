<?php

namespace Artqiyi\Models;

use Artqiyi\Models\WareModel;
use Illuminate\Database\Eloquent\Model;

class WareImageModel extends Model
{
    protected $table = 'ware_images';

    protected $primaryKey = 'ware_image_id';

    public function ware()
    {
        return $this->belongsTo(WareModel::class);
    }
}
