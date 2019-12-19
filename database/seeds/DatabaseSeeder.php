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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,5)->create();
        factory(App\Model\State::class,10)->create();
        factory(App\Model\City::class,10)->create();
        factory(App\Model\Property::class,20)->create();
    }
}
