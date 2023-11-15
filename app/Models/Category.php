<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = 'name';

    public function InformasiLombaCategory()
    {
        return $this->hasMany(InformasiLombaCategory::class);
    }

    public function MahasiswaCategory()
    {
        return $this->hasMany(MahasiswaCategory::class);
    }
}
