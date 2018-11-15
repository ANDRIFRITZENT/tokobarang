<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\factory::create(); //import library faker
		
		$limit = 5; //batasan banyak database
		
		for($i = 0; $i < $limit; $i++){
			DB::table('barang')->insert([	//mengisi data di database
				'nama_barang' => 'barang'.$i,
				'harga' => $faker->randomNumber(6),	
				'stok' => $faker->randomNumber(2),
				'expired_data' => $faker->date,
				'tanggal_produksi' => $faker->date,
			]);
		}
    }
}
