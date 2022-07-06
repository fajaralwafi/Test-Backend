<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'department';
    protected $fillable = [
        'nama_dept'
    ];
    protected $primaryKey = 'id_dept';
    protected $hidden = [];
}
