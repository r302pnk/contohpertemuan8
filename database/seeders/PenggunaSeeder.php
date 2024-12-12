<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        $bulk = [];
        for($i=0; $i<4000; $i++){
            $bulk[] = [
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'tanggal_lahir' => $faker->date(),
                'alamat' => $faker->address,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        Pengguna::insert($bulk);
    }
}
