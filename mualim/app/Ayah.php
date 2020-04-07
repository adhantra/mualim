<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    // Table = Surah
    protected $table = 'ayah';

    // Fillable = Surah No
    protected $fillable = ['ayah_no','page','juz','text_arab','text_latin','text_indonesia','text_tafsir','tags','surah_id'];

    // Disable timestamps
    public $timestamps = false;

    public function surah(){
    	return $this->belongsTo('App\Surah');
    }
}
