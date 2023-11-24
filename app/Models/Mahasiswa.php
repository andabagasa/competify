<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'mahasiswa_id';
    protected $fillable = [
        'guest_id',
        'nim',
        'description',
        'no_tlp',
        'acc_linkedin',
        'acc_instagram',
        'photo'
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function MahasiswaCategory()
    {
        return $this->hasMany(MahasiswaCategory::class);
    }
}
