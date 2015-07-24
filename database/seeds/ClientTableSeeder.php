<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    public function run()
    {
        \CodeProject\Entities\Client::truncate();
        factory(\CodeProject\Entities\Client::class,10)->create();
    }
}
