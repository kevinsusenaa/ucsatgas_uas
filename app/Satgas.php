<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satgas extends Model
{
    public $table = 'satgas';

    protected $fillable = [
        'tugas',
        'waktu',
        'created_at',
        'updated_at',
    ];


    public function details()
    {
        return $this->hasMany('App\SatgasLecturer', 'satgas_id');
    }
}
