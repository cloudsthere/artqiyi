<?php

use Illuminate\Database\Seeder;

class WareImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(WareImageModel::class, 400)->create();
    }
}
