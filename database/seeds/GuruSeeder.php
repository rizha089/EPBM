<?php

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('guru')->insert([
        // 	'nip' 	=> 001,
        // 	'email' => 'ujang@gmail.com',
        // 	'nama'	=> 'ujang',
        // 	'password' => 'ujang'
        // ]);

        DB::table('guru')->insert([
        	'nip' 	=> 002,
        	'email' => 'nana@gmail.com',
        	'nama'	=> 'nana',
        	'password' => 'nana'
        ]);

        DB::table('guru')->insert([
        	'nip' 	=> 003,
        	'email' => 'nini@gmail.com',
        	'nama'	=> 'nini',
        	'password' => 'nini'
        ]);
    }
}
