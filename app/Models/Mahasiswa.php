<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        // 'nim'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
