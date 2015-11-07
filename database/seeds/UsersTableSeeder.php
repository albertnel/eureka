<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Albert',
            'surname' => 'Nel',
            'email' => 'moovallei@gmail.com',
            'password' => bcrypt('password')
        ]);

        factory(App\User::class, 10)->create();
    }
}
