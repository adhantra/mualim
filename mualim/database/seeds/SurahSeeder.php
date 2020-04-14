<?php

use Illuminate\Database\Seeder;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surah')->insert([
        	'nama_arab' => '',
        	'nama_latin' => 'Al-Fatihah',
        	'nama_indonesia' => 'Pembukaan',
        	'total_ayah' => 7
        ]);
    }
}
