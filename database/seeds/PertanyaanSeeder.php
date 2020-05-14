<?php

use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //insert data
         DB::table('pertanyaan')->insert([
        	'id' => '1',
            'list_pertanyaan' => 'Mengacu pada KD yang ingin dicapai'
        ]);
        DB::table('pertanyaan')->insert([
        	'id' => '2',
            'list_pertanyaan' => 'Memuat proses dan gambaran hasil belajar yang ingin dicapai'
        ]);
        DB::table('pertanyaan')->insert([
        	'id' => '3',
            'list_pertanyaan' => 'Sesuai dengan kebutuhan belajar siswa'
        ]);
        DB::table('pertanyaan')->insert([
        	'id' => '4',
            'list_pertanyaan' => 'Relevan untuk mencapai tujuan pembelajaran'
        ]);
        DB::table('pertanyaan')->insert([
        	'id' => '5',
            'list_pertanyaan' => 'Memudahkan pemahaman siswa'
        ]);
        DB::table('pertanyaan')->insert([
        	'id' => '6',
            'list_pertanyaan' => 'Variatif'
        ]);
        DB::table('pertanyaan')->insert([
        	'id' => '7',
            'list_pertanyaan' => 'Melibatkan siswa'
        ]);
    }
}
