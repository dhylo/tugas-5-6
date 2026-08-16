<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuPegawai extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kartu', 'tgl_daftar', 'pegawai_id'];

    public function pegawai() {
        return $this->belongsTo(Pegawai::class);
    }
}
