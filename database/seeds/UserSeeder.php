<?php

use Artqiyi\Models\UserModel;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserModel::class, 100)->create();
    }
}
