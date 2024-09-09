<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        
        $faker = Faker::create('id_ID');
    	for($i = 1; $i <= 50; $i++){
    		DB::table('matakuliahs')->insert([
    			'kodeMatakuliah' => 'SYS00001',
    			'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis',
    			'sks' => 4
    		]);
    	}
    }
}
