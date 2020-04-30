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
        //
        DB::table('siswa')->insert([
        	'nis' 	=> 001,
        	'email' => 'sinat@gmail.com',
        	'nama'	=> 'sinat',
        	'kelas'	=> '12',
        	'password' => '$2b$10$uXsnRUcNMWfcaIXK0F3jIeipSmeYbc2mpqhV8IEKDG8tgG/tOYCEO'
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 002,
        	'email' => 'lanang@gmail.com',
        	'nama'	=> 'lanang',
        	'kelas'	=> '12',
        	'password' => '$2b$10$GTRibGaDPxyQbKUwEDZ8j.AaKbB6blag9kwYe3WGwlufYyFn/2bri'
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 003,
        	'email' => 'rizha@gmail.com',
        	'nama'	=> 'rizha',
        	'kelas'	=> '12',
        	'password' => '$2b$10$VhFUkEt1TQKhG8tFJkpfReSpmKTwEPHhxnm80TzNo.Rn0.XLJsweO'
        ]);

    }

}
