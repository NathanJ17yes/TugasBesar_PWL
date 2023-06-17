<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'mata_kuliah';

    protected $primaryKey = 'kode_matkul';
    protected $fillable = [
        'kode_matkul',
        'kode_prodi',
        'nama_matkul',
        'sks',
    ];
}
