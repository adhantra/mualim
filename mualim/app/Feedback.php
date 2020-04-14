<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // Table = Surah
    protected $table = 'feedback';

    // Fillable = Surah No
    protected $fillable = ['id','from','title','text','time'];

    // Disable timestamps
    public $timestamps = false;
}
