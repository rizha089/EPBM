<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        DB::table('siswa')->insert([
        	'nis' 	=> 991,
        	'email' => 'jono@gmail.com',
        	'nama'	=> 'Jono Sujono',
        	'kelas'	=> '12',
            'password' => bcrypt('123123'),

            'token' => '1',
            'nisn' => 99191249876,
            'nik' => 991912649,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 992,
        	'email' => 'Tegar@gmail.com',
        	'nama'	=> 'Tegar Sutegar',
        	'kelas'	=> '10',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 991241119,
            'nik' => 99191119,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
		]);

		DB::table('siswa')->insert([
        	'nis' 	=> 993,
        	'email' => 'joni@gmail.com',
        	'nama'	=> 'Joni',
        	'kelas'	=> '11',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 9914219,
            'nik' => 99199743,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'

        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 994,
        	'email' => 'ahmad@gmail.com',
        	'nama'	=> 'Ahmad',
        	'kelas'	=> '12',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 99179,
            'nik' => 9919129,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
		]);

		DB::table('siswa')->insert([
        	'nis' 	=> 995,
        	'email' => 'jeni@gmail.com',
        	'nama'	=> 'Jeni',
        	'kelas'	=> '12',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 9911249,
            'nik' => 991999876,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 996,
        	'email' => 'ani@gmail.com',
        	'nama'	=> 'Ani',
        	'kelas'	=> '10',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 9919124,
            'nik' => 99198799,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
		]);

		DB::table('siswa')->insert([
        	'nis' 	=> 997,
        	'email' => 'ana@gmail.com',
        	'nama'	=> 'Ana',
        	'kelas'	=> '12',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 9912419,
            'nik' => 99194579,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 998,
        	'email' => 'ina@gmail.com',
        	'nama'	=> 'Ina',
        	'kelas'	=> '11',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 1249919,
            'nik' => 99191249,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
		]);

		DB::table('siswa')->insert([
        	'nis' 	=> 999,
        	'email' => 'ari@gmail.com',
        	'nama'	=> 'Ari',
        	'kelas'	=> '12',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 991239,
            'nik' => 99199124,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
        ]);

        DB::table('siswa')->insert([
        	'nis' 	=> 1001,
        	'email' => 'budi@gmail.com',
        	'nama'	=> 'Budi',
        	'kelas'	=> '10',
            'password' => bcrypt('123123'),
            'token' => '1',
            'nisn' => 9912,
            'nik' => 99192,
            'nama_panggilan' => 'jono',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'telepon' => 628112387612,
            'tinggal' => 'asrama',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'kewarganegaraan' => 'Indonesia',
            'yatim' => 'Piatu',
            'alamat' => 'Jalan Perwira',
            'rt_rw' => '01/05',
            'kelurahan' => 'lurah',
            'kecamatan' => 'camat',
            'kota' => 'Kota Bogor',
            'nomor_kk' => 12345,
            'tanggal_gabung' => Carbon::create('2019', '01', '01'),
            'asal_sekolah' => 'SD 1 Bogor'
        ]);

    }

}
