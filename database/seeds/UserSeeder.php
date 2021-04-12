<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
    	foreach (range(1,1000) as $index) {
	        DB::table('users')->insert([
                'username' => $faker->name,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
	            'password' => bcrypt('12345678'),
	        ]);
	}
    }
}
