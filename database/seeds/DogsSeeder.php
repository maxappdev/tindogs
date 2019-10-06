<?php

use Illuminate\Database\Seeder;

class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Dog::class, 29)->create();
    }
}
