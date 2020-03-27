<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    // Table = Surah
    protected $table = 'ayah';

    // Fillable = Surah No
    protected $fillable = ['id','page','juz','text_arab','text_latin','text_indonesia','text_tafsir','tags','surah_no'];

    // Disable timestamps
    public $timestamps = false;
}
