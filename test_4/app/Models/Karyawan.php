<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'karyawan';
    protected $fillable = [
        'nik',
        'nama',
        'ttl',
        'alamat',
        'id_jabatan'
    ];
    protected $primaryKey = 'id_karyawan';
    protected $hidden = [];
}
