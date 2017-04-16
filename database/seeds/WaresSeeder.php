<?php

use Artqiyi\Models\WareImageModel;
use Artqiyi\Models\WareModel;
use Illuminate\Database\Seeder;

class WaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(WareModel::class, 100)
            ->create()
            ->each(function($ware) {
                $images = factory(WareImageModel::class, 4)->make();
                foreach ($images as $image) {
                    $ware->images()->save($image);
                }
            });
    }
}
