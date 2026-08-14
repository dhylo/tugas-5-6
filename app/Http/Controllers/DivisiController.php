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

    function create() {
        return view('divisi.create');
    }

    function store(Request $r) {
        $r->validate([
            'kode'=>'required|unique:divisi',
            'nama'=>'required'
        ]);
        
        Divisi::create($r->all());
        return redirect()
            ->route('divisi.index')
            ->with('success','Tersimpan');
    }
}
