<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MengikutiPelatihan extends Model
{
    use HasFactory;

    protected $fillable = ['pegawai_id', 'pelatihan_id'];
}
