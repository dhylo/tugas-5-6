<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index() {
        $pegawai=Pegawai::with('divisi')->get();
        return view('pegawai.index', compact('pegawai'));
    }

    public function  create() {
        $divisi=Divisi::all();
        return view('pegawai.create', compact('divisi'));
    }

    public function store(Request $r) {
        $r->validate([
            'nama'=>'required',
            'jabatan'=>'required',
            'divisi_id'=>'required|exists:divisis,id'
        ]);

        Pegawai::create($r->all());
        return redirect()->route('pegawai.index');
    }
}
