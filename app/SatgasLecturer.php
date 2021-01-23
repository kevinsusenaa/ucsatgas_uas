<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatgasLecturer extends Model
{
    public $table = 'satgas_lecturers';

    protected $fillable = [
        'satgas_id',
        'nama',
        'nik',
        'keterangan',
    ];


    // public function country()
    // {
    //     return $this->belongsTo(Country::class, 'country_id');
    // }
}
