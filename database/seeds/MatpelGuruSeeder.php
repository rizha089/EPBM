<?php

use Illuminate\Database\Seeder;

class MatpelGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        DB::table('matpel_guru')->insert([
        	'id_guru' => '1',
            'id_matpel' => '1',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
        	'id_guru' => '6',
            'id_matpel' => '1',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
            'id_guru' => '2',
            'id_matpel' => '2',
            'filled'  => '0'
        ]);
            
        DB::table('matpel_guru')->insert([
            'id_guru' => '3',
            'id_matpel' => '2',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
        	'id_guru' => '5',
            'id_matpel' => '2',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
            'id_guru' => '1',
            'id_matpel' => '3',
            'filled'  => '0'
        ]);
            
        DB::table('matpel_guru')->insert([
            'id_guru' => '2',
            'id_matpel' => '3',
            'filled'  => '0'
        ]);


        DB::table('matpel_guru')->insert([
        	'id_guru' => '4',
            'id_matpel' => '4',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
        	'id_guru' => '4',
            'id_matpel' => '5',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
        	'id_guru' => '6',
            'id_matpel' => '5',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
        	'id_guru' => '4',
            'id_matpel' => '6',
            'filled'  => '0'
        ]);

        DB::table('matpel_guru')->insert([
        	'id_guru' => '3',
            'id_matpel' => '6',
            'filled'  => '0'
        ]);
    }
}
