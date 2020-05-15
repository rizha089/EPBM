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
            'list_pertanyaan' => 'Mengacu pada KD yang ingin dicapai'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Memuat proses dan gambaran hasil belajar yang ingin dicapai'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Sesuai dengan kebutuhan belajar siswa'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Relevan untuk mencapai tujuan pembelajaran'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Memudahkan pemahaman siswa'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Variatif'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Melibatkan siswa'
        ]);
    }
}
