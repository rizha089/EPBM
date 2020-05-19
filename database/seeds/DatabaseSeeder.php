<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(GuruSeeder::class);
        // $this->call(MatpelSeeder::class);
        // $this->call(SiswaSeeder::class);
        // $this->call(MatpelGuruSeeder::class);
        // $this->call(MatpelSiswaSeeder::class);
        // $this->call(ProgramSeeder::class);
        $this->call(PertanyaanSeeder::class);
    }
}
