<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilais';
    protected $guarded = ['id'];

    public function mengajar(){
        return $this->belongsto(Mengajar::class, 'guru_id', 'id');
}

    public function siswa(){
        return $this->belongsto(Siswa::class, 'siswa_id', 'id');
}
}
