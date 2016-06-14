<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'aseefahmed@gmail.comm',
            'password' => bcrypt('aseefahmed')
        ]);
    }
}
