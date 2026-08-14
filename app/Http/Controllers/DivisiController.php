<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index() {
        $divisi=Divisi::all();

        return view('divisi.index',compact('divisi'));
    }

    public function create() {
        return view('divisi.create');
    }

    public function store(Request $r) {
        $r->validate([
            'kode'=>'required|unique:divisis',
            'nama'=>'required'
        ]);
        
        divisi::create($r->all());
        return redirect()
            ->route('divisi.index')
            ->with('success','Tersimpan');
    }
}
