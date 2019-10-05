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

        factory(App\DogLooker::class)->create([
            'user_id' => 1,
        ]);

        factory(App\Shelter::class)->create([
            'id' => 1,
            'user_id' => 2,
        ]);

        factory(App\shelter_has_dogs::class)->create([
            'shelter_id' => 1,
        ]);

    }
}
