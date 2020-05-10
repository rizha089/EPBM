<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        DB::table('siswa')->insert([
        	'nis' 	=> 991,
        	'email' => 'jono@gmail.com',
        	'nama'	=> 'Jono',
        	'kelas'	=> '12',
        	'password' => bcrypt('123123')
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 992,
        	'email' => 'Tegar@gmail.com',
        	'nama'	=> 'Tegar',
        	'kelas'	=> '10',
        	'password' => bcrypt('123123')
		]);
		
		DB::table('siswa')->insert([
        	'nis' 	=> 993,
        	'email' => 'joni@gmail.com',
        	'nama'	=> 'Joni',
        	'kelas'	=> '11',
        	'password' => bcrypt('123123')
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 994,
        	'email' => 'ahmad@gmail.com',
        	'nama'	=> 'Ahmad',
        	'kelas'	=> '12',
        	'password' => bcrypt('123123')
		]);
		
		DB::table('siswa')->insert([
        	'nis' 	=> 995,
        	'email' => 'jeni@gmail.com',
        	'nama'	=> 'Jeni',
        	'kelas'	=> '12',
        	'password' => bcrypt('123123')
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 996,
        	'email' => 'ani@gmail.com',
        	'nama'	=> 'Ani',
        	'kelas'	=> '10',
        	'password' => bcrypt('123123')
		]);
		
		DB::table('siswa')->insert([
        	'nis' 	=> 997,
        	'email' => 'ana@gmail.com',
        	'nama'	=> 'Ana',
        	'kelas'	=> '12',
        	'password' => bcrypt('123123')
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 998,
        	'email' => 'ina@gmail.com',
        	'nama'	=> 'Ina',
        	'kelas'	=> '11',
        	'password' => bcrypt('123123')
		]);
		
		DB::table('siswa')->insert([
        	'nis' 	=> 999,
        	'email' => 'ari@gmail.com',
        	'nama'	=> 'Ari',
        	'kelas'	=> '12',
        	'password' => bcrypt('123123')
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 1001,
        	'email' => 'budi@gmail.com',
        	'nama'	=> 'Budi',
        	'kelas'	=> '10',
        	'password' => bcrypt('123123')
        ]);

    }

}
