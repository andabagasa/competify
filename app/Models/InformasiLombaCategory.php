<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLombaCategory extends Model
{
    use HasFactory;

    protected $table = 'informasi_lomba_categories';
    protected $fillable = [
        'id_lomba',
        'category_id'
    ];

    public function InformasiLomba()
    {
        return $this->belongsTo(InformasiLomba::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
