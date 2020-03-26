<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    // Table = Surah
    protected $table = 'surah';

    // Fillable = Surah No
    protected $fillable = ['id'];

    // Disable timestamps
    public $timestamps = false;
}
