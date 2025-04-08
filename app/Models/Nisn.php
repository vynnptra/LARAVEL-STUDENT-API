<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nisn extends Model
{
    protected $fillable = [
        'siswa_id',
        'nisn',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
