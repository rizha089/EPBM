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
        	'nip' 	=> 1111,
        	'email' => 'auzi@gmail.com',
        	'nama'	=> 'Auzi',
        	'password' => bcrypt('123123')
        ]);

        DB::table('guru')->insert([
        	'nip' 	=> 1112,
        	'email' => 'auriza@gmail.com',
        	'nama'	=> 'Auriza',
        	'password' => bcrypt('123123')
        ]);

        DB::table('guru')->insert([
        	'nip' 	=> 1113,
        	'email' => 'dean@gmail.com',
        	'nama'	=> 'Dean',
        	'password' => bcrypt('123123')
        ]);

        DB::table('guru')->insert([
        	'nip' 	=> 1114,
        	'email' => 'sri@gmail.com',
        	'nama'	=> 'Sri',
        	'password' => bcrypt('123123')
        ]);

        DB::table('guru')->insert([
        	'nip' 	=> 1115,
        	'email' => 'annisa@gmail.com',
        	'nama'	=> 'Annisa',
        	'password' => bcrypt('123123')
        ]);

        DB::table('guru')->insert([
        	'nip' 	=> 1116,
        	'email' => 'imas@gmail.com',
        	'nama'	=> 'Imas',
        	'password' => bcrypt('123123')
        ]);
    }
}
