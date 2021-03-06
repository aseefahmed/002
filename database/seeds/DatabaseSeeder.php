<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\fr_FR\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,200) as $index) {
                $email = $faker->email;
                $photo = $faker->numberBetween($min = 1, $max = 14);
	        DB::table('employees')->insert([
	            'email' => $email,
                    'photo' => $photo.'.png'
                    
	        ]);
	        DB::table('users')->insert([
	            'first_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'email' => $email,
                    'password'=>'aseefahmed',
                    'dept_id'=>$faker->numberBetween($min = 1, $max = 10),
                    'designation_id'=>$faker->numberBetween($min = 1, $max = 21),
                    
	        ]);
        }
    }
}
