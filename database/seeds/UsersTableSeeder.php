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

        DB::table('users')->insert([
            'name' => 'Arie',
            'surname' => 'Odendaal',
            'email' => 'arie@ce-tech.co.za',
            'password' => bcrypt('Not4u2c#')
        ]);

        factory(App\User::class, 10)->create();
    }
}
