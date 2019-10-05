<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'id' => 1,
            'username' => 'doglooker'
        ]);

        factory(App\User::class)->create([
            'id' => 2,
            'username' => 'shelter'
        ]);
    }
}
