<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'sort' => 'in:asc,desc', // Validasi pilihan urutan (asc atau desc)
        ]);
    
        $sort = $request->input('sort', 'asc');
    
        $stok = Stok::orderBy('tanggal', $sort)->get();
        // $stok_tanggal = Stok::orderBy('tanggal', $sort)->get();
    
        return view('sistem_donasi.stok.index', compact('stok',  'sort'));
    }
    
       

    public function create()
    {
        return view('sistem_donasi.stok.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'dana_masuk' => 'nullable',
            'dana_keluar' => 'nullable',
        ]);

        Stok::create($request->all());

        return redirect()->route('stok.index')
            ->with('success', 'Data stok berhasil ditambahkan.');
    }

    public function edit(Stok $stok)
    {
        return view('sistem_donasi.stok.edit', compact('stok'));
    }

    public function update(Request $request, Stok $stok)
    {
        $request->validate([
            'tanggal' => 'required',
            'dana_masuk' => 'nullable',
            'dana_keluar' => 'nullable',
        ]);

        $stok->update($request->all());

        return redirect()->route('stok.index')
            ->with('success', 'Data stok berhasil diperbarui.');
    }

    public function destroy(Stok $stok)
    {
        $stok->delete();

        return redirect()->route('stok.index')
            ->with('success', 'Data stok berhasil dihapus.');
    }
}
