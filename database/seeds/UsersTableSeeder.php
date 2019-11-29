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
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'camilo.narv13@gmail.com',
            'password' => bcrypt('12345'),            
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos Trucco',
            'email' => 'carlos.trucco@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Derly Narvaez',
            'email' => 'derly.narvaez@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andres Narvaez',
            'email' => 'andres.narvaez@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Eddimar Calderon',
            'email' => 'eddi.calderon@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
