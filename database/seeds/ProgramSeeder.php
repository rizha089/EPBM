<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        //siswa1
        DB::table('programs')->insert([
            'id_guru' => '1',
        	'id_matpel' => '1',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '6',
        	'id_matpel' => '1',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '1',
            'id_matpel' => '3',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);
           
        DB::table('programs')->insert([
            'id_guru' => '2',
            'id_matpel' => '3',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '4',
            'id_matpel' => '5',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);
           
        DB::table('programs')->insert([
            'id_guru' => '6',
            'id_matpel' => '5',
            'id_siswa' => '1',
            'filled'  => '0'
        ]);
        

        //siswa2
        DB::table('programs')->insert([
            'id_guru' => '1',
            'id_matpel' => '1',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '6',
            'id_matpel' => '1',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '2',
        	'id_matpel' => '2',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '3',
        	'id_matpel' => '2',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '5',
        	'id_matpel' => '2',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru'   => '4',
            'id_matpel' => '4',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);
            
        DB::table('programs')->insert([
            'id_guru'   => '4',
            'id_matpel' => '5',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru'   => '6',
            'id_matpel' => '5',
            'id_siswa' => '2',
            'filled'  => '0'
        ]);

        //siswa3
        DB::table('programs')->insert([
            'id_guru' => '2',
        	'id_matpel' => '2',
            'id_siswa' => '3',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '3',
        	'id_matpel' => '2',
            'id_siswa' => '3',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '5',
        	'id_matpel' => '2',
            'id_siswa' => '3',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru'   =>'4',
        	'id_matpel' => '4',
            'id_siswa' => '3',
            'filled'  => '0'
        ]);
        
        //siswa4
        DB::table('programs')->insert([
            'id_guru'   => '4',
            'id_matpel' => '5',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru'   => '6',
            'id_matpel' => '5',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru'   => '3',
        	'id_matpel' => '6',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru'   => '4',
        	'id_matpel' => '6',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '1',
        	'id_matpel' => '1',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);

        DB::table('programs')->insert([
            'id_guru' => '6',
        	'id_matpel' => '1',
            'id_siswa' => '4',
            'filled'  => '0'
        ]);
        
        //siswa5
        DB::table('programs')->insert([
            'id_guru' => '1',
            'id_matpel' => '3',
            'id_siswa' => '5',
            'filled'  => '0'
        ]);
           
        DB::table('programs')->insert([
            'id_guru' => '2',
            'id_matpel' => '3',
            'id_siswa' => '5',
            'filled'  => '0'
        ]);
    }
}
