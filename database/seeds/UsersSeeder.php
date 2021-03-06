<?php

use Illuminate\Database\Seeder;
use App\Doglooker;

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
            'username' => 'doglooker',
            'name' => 'Mickey Mouse'
        ]);

        factory(App\User::class)->create([
            'id' => 2,
            'username' => 'shelter'
        ]);

        factory(App\User::class, 20)->create();

        factory(App\Doglooker::class)->create([
            'id' => 1,
            'user_id' => 1,
            'photo' => 'https://vignette.wikia.nocookie.net/disney/images/9/99/Mickey_Mouse_Disney_3.jpeg/revision/latest?cb=20190305233033'
        ]);

        factory(App\Shelter::class)->create([
            'id' => 1,
            'user_id' => 2,
        ]);

        for($i = 3; $i < 20; $i++){

            factory(App\Doglooker::class)->create([
                'user_id' => $i,
            ]);

        }

        
        for($i = 1; $i < 30; $i++){

            factory(App\shelter_has_dogs::class)->create([
                'shelter_id' => 1,
                'dog_id' => $i
            ]);

        }

        for($i = 1; $i < 30; $i++){
            
            $interested = array();
            $interested_person_ids = Doglooker::all()->random(7)->pluck('id');
            
            foreach($interested_person_ids as $interested_person_id){

                if($interested_person_id == 1) continue;

                factory(App\Interest::class)->create([
                    'doglooker_id' => $interested_person_id,
                    'dog_id' => $i
                ]);

            }

        }

    }
}
