<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // LLlamando la semillay ejecutandola
         $this->call(UsersTableSeeder::class);
    }
}
