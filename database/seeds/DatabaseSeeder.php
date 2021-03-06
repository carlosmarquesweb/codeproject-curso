<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        DB::statement("SET foreign_key_checks = 0");

        $this->call(UserTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(ProjectTableSeeder::class);

        DB::statement("SET foreign_key_checks = 1");
        Model::reguard();
    }
}
