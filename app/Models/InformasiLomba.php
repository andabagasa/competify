<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLomba extends Model
{
    use HasFactory;

    protected $table = 'informasi_lombas';
    protected $fillable = [
        'title',
        'description',
        'organizer_name',
        'reward',
        'timeline',
        'term_and_condition',
        'poster',
        'contact'
    ];
}
