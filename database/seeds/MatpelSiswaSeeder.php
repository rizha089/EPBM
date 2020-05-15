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
            'id_siswa' => '1',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '3',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '5',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);
            
        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '1',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '2',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '4',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);
            
        DB::table('mata_pelajaran_siswa')->insert([
            'mata_pelajaran_id' => '5',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);


        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '2',
            'id_siswa' => '3',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '4',
            'id_siswa' => '3',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '5',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '6',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '1',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('mata_pelajaran_siswa')->insert([
        	'mata_pelajaran_id' => '3',
            'id_siswa' => '5',
            'filled'  => '0'
        ]);
    }
}
