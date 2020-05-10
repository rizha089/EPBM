<?php

use Illuminate\Database\Seeder;

class MatpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data mata pelajaran
        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => 'MTK1',
        	'nama_matpel' => 'Matematika'
        ]);

        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => 'FIS1',
        	'nama_matpel' => 'Fisika'
        ]);

        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => 'BIO1',
        	'nama_matpel' => 'Biologi'
        ]);

        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => 'IND1',
        	'nama_matpel' => 'Bahasa Indonesia'
        ]);

        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => 'SEJ1',
        	'nama_matpel' => 'Sejarah'
        ]);

        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => 'SEN1',
        	'nama_matpel' => 'Seni'
        ]);
    }
}
