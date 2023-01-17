<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    use HasFactory;

    protected $table = 'mengajars';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function guru(){
        return $this->belongsto(Guru::class, 'guru_id', 'id');
    }

    public function mapel(){
        return $this->belongsto(Mapel::class, 'mapel_id', 'id');
    }

    public function kelas(){
        return $this->belongsto(Kelas::class, 'kelas_id', 'id');
    }

}
