<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function jurusan()
    {
        return $this->belongsto(Jurusan::class, 'jurusan_id', 'id');
    }

}
