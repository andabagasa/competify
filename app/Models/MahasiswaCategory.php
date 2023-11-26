<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaCategory extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_categories';
    protected $fillable = [
        'mahasiswa_id',
        'category_id'
    ];

    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
