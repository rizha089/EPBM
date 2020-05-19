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
            'list_pertanyaan' => ' Guru menyampaikan materi di kelas dengan jelas dan sesuai.'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Guru menanggapi pertanyaan/pendapat siswa dengan baik.'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Guru mampu memotivasi dan melibatkan siswa untuk memperhatikan pembelajaran.'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Guru mampu memberikan contoh penerapan terkini konsep yang diajarkan.'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Guru menunjukkan keteladanan dan melatih siswa untuk berperilaku terpuji.'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Guru mengajar tepat waktu/disiplin sesuai dengan jadwal yang ditetapkan.'
        ]);
        DB::table('pertanyaan')->insert([
            'list_pertanyaan' => 'Guru mengendalikan diri dalam berbagai situasi dan kondisi di kelas.'
        ]);
    }
}
