<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function Guest()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function InformasiLomba()
    {
        return $this->hasMany(InformasiLomba::class);
    }
}
