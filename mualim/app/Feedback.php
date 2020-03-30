<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // Table = Surah
    protected $table = 'feedback';

    // Fillable = Surah No
    protected $fillable = ['id','user_id','title','text','time'];

    // Disable timestamps
    public $timestamps = false;
}
