<?php

use Illuminate\Database\Seeder;

class AyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ayah')->insert([
        	'ayah_no' => 99,
        	'page' => 15,
        	'juz' => 1,
        	'text_arab' => '',
        	'text_latin' => 'wa laqad anzalnā ilaika āyātim bayyināt, wa mā yakfuru bihā illal-fāsiqụn',
        	'text_indonesia' => 'Dan sungguh, Kami telah menurunkan ayat-ayat yang jelas kepadamu (Muhammad), dan tidaklah ada yang mengingkarinya selain orang-orang fasik.',
        	'text_tafsir' => '',
        	'tags' => '',
        	'surah_id' => 2
        ]);
    }
}
