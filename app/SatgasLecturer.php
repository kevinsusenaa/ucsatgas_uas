<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatgasLecturer extends Model
{
    public $table = 'satgas_lecturers';

    protected $fillable = [
        'satgas_id',
        'name',
        'nik',
        'comment',
    ];


    // public function country()
    // {
    //     return $this->belongsTo(Country::class, 'country_id');
    // }
}
