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
        'prodi',
        'angkatan',
        'description',
        'no_tlp',
        'acc_linkedin',
        'acc_instagram',
        'photo'
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    public function MahasiswaCategory()
    {
        return $this->hasMany(MahasiswaCategory::class, 'mahasiswa_id');
    }

    public function addCategories($categoryIds)
    {
        foreach ($categoryIds as $categoryId) {
            $this->MahasiswaCategory()->create([
                'category_id' => $categoryId,
            ]);
        }
    }
}
