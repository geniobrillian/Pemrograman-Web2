<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker;

class PenulisSeeder extends Seeder
{
    public function run()
    {
        // Bagian ini dikomentari karena Anda menggunakan Faker di bawah.
        // Tidak ada masalah dengan bagian ini jika ingin digunakan.
        // $data = [
        //     [
        //         'name'       => 'Tomy Syafrudin',
        //         'address'    => 'Jl. Gus Dur no 158 Jombang',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now(),
        //     ],
        //     [
        //         'name'       => 'Tomy Syafrudin',
        //         'address'    => 'Jl. Gus Dur no 158 Jombang',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now(),
        //     ],
        //     [
        //         'name'       => 'Tomy Syafrudin',
        //         'address'    => 'Jl. Gus Dur no 158 Jombang',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now(),
        //     ],
        // ];
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'name'       => $faker->name,
                'address'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ];

            $this->db->table('penulis')->insert($data);
        }
    }
}
