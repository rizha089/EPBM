<?php

use Illuminate\Database\Seeder;

class MatpelSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '1',
            'siswa_id' => '1',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '3',
            'siswa_id' => '1',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '5',
            'siswa_id' => '1',
            'filled'  => '0'
        ]);
            
        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '1',
            'siswa_id' => '2',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '2',
            'siswa_id' => '2',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '4',
            'siswa_id' => '2',
            'filled'  => '0'
        ]);
            
        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '5',
            'siswa_id' => '2',
            'filled'  => '0'
        ]);


        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '2',
            'siswa_id' => '3',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '4',
            'siswa_id' => '3',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '5',
            'siswa_id' => '4',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '6',
            'siswa_id' => '4',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '1',
            'siswa_id' => '4',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '3',
            'siswa_id' => '5',
            'filled'  => '0'
        ]);
    }
}
