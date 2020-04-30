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
        //
        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => '100',
        	'nama_matpel' => 'Matematika'
        ]);

        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => '200',
        	'nama_matpel' => 'Fisika'
        ]);

        DB::table('mata_pelajaran')->insert([
        	'kode_matpel' => '300',
        	'nama_matpel' => 'Biologi'
        ]);
    }
}
