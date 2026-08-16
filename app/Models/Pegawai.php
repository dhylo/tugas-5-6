<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jabatan', 'divisi_id'];

    public function divisi() {
        return $this->belongsTo(Divisi::class); // pegawai ke divisi = belongsto
    }

    public function kartuPegawai () {
        return $this->hasOne(KartuPegawai::class); // pegawai ke kartupegawai = hasone
    }

    public function pelatihans () {
        return $this->belongsToMany(Pelatihan::class, 'mengikuti_pelatihans'); // pegawai ke pelatihan sekaligus mengikuti pelatihan = belongstomany
    }
}
