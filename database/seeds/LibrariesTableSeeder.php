<?php

use Illuminate\Database\Seeder;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libraries')->insert([
            'name' => 'Library 01',
            'description' => 'This is Library 01'
        ]);

        // factory(App\Library::class, 3)->create();
    }
}
