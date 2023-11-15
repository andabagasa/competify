<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guest extends Authenticatable
{
    use HasFactory;

    protected $table = 'guests';
    protected $primaryKey = 'guest_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'guest_type'
    ];

    public function Mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function Admin()
    {
        return $this->hasMany(Admin::class);
    }
}
