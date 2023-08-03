<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x=1; $x<=10; $x++){
            DB::table('mahasiswa')->insert([
                'nim'=>$faker->nim,
                'nama'=>$faker->nama,
                'alamat'=>$faker->alamat,
                'jurusan'=>$faker->jurusan
            ]);
        }
    }
}
