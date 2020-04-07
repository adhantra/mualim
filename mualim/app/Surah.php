<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
	// Table = Surah
    protected $table = 'surah';

    // Fillable = Surah No
    protected $fillable = ['id','nama_arab','nama_latin','nama_indonesia','total_ayah'];

    // Disable timestamps
    public $timestamps = false;

    public function ayah(){
    	return $this->hasMany('App\Ayah');
    }
}
