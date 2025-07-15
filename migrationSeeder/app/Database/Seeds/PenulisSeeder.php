<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker;

class PenulisSeeder extends Seeder
{
	public function run()
	{
		// $data = [
		// 	[
		// 		'name' => 'Tomy Syafrudin',
		// 		'address'  => 'Jl Pahlawan no 100 Jombang',
		// 		'created_at'  => Time::now(),
		// 		'updated_at'  => Time::now()
        //     ],
		// 	[
		// 		'name' => 'Bagus',
		// 		'address'  => 'Jl Pahlawan no 98 Jombang',
		// 		'created_at'  => Time::now(),
		// 		'updated_at'  => Time::now()

        //     ],
		// 	[
		// 		'name' => 'Dedi',
		// 		'address'  => 'Jl Pahlawan no 99 Jombang',
		// 		'created_at'  => Time::now(),
		// 		'updated_at'  => Time::now()

        //     ],
		// ];
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i < 10 ; $i++) { 
            $data=[
                'name' => $faker->name,
				'address'  => $faker->address,
				'created_at'  => Time::createFromTimestamp($faker->unixTime()),
				'update_at'  => Time::now(),
                'email' => $faker->email,
                'tanggal_lahir' => $faker->date

            ];
            $this->db->table('penulis')->insertBatch($data);
        }
        
        //$this->db->query('INSERT INTO penulis (name, address, created_at,updated_at) VALUES(:name:, :address:, :created_at:,:updated_at:)', $data);

        //$this->db->table('penulis')->insertBatch($data);
        
	}
}