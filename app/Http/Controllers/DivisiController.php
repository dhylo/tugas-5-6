<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    // READ
    public function index() {
        $divisi=Divisi::all();

        return view('divisi.index',compact('divisi'));
    }

    // CREATE
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

    // UPDATE
    public function edit(Divisi $divisi) {
        return view('divisi.edit', compact('divisi'));
    }

    public function update(Request $r, Divisi $divisi) {
        $r->validate(['...']);
        $divisi->update($r->all());
        return redirect()->route('divisi.index');
    }

    // DELETE
    public function destroy(Divisi $divisi) {
        $divisi->delete();
        return redirect()
            ->route('divisi.index')
            ->with('success', 'Terhapus');
    }
}
