<?php

use Illuminate\Database\Seeder;

class CreateUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $faker = Faker\Factory::create('de_DE');

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([ //,
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt(str_random(10)),
   			 	'remember_token' => str_random(10),
   			 	'api_token' => str_random(60)
            ]);
        }
    
    }
}
