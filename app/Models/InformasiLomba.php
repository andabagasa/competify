<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLomba extends Model
{
    use HasFactory;

    protected $table = 'informasi_lombas';
    protected $primaryKey = 'id_lomba';
    protected $fillable = [
        'admin_id',
        'title',
        'description',
        'organizer_name',
        'reward',
        'open_reg',
        'close_reg',
        'term_and_condition',
        'poster',
        'contact'
    ];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function InformasiLombaCategory()
    {
        return $this->hasMany(InformasiLombaCategory::class, 'id_lomba');
    }

    public function addCategories($categoryIds)
    {
        foreach ($categoryIds as $categoryId) {
            $this->InformasiLombaCategory()->create([
                'category_id' => $categoryId,
            ]);
        }
    }
}
