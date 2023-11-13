<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'description',
        'no_telp',
        'acc_linkedin',
        'acc_instagram',
        'photo'
    ];

    public function Guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function MahasiswaCategory()
    {
        return $this->hasMany(MahasiswaCategory::class);
    }
}
