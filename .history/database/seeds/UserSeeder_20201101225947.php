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
    	foreach (range(1,10) as $index) {
	        DB::table('users')->insert([
                'username' => $faker->name,
                'fullname' => $faker->fullname,
                'email' => $faker->email,
                'phone' => $faker->creditCardNumber,
	            'password' => bcrypt('12345678'),
	        ]);
	}
    }
}
