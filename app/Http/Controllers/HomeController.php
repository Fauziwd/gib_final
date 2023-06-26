<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Pondok;
use App\Models\DaftarOta;
use App\Models\Stok;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $bulan = $request->input('bulan');
        $totalAnggota = Anggota::count();
        $totalpondok = Pondok::count();
        $totaldaftarOta = DaftarOta::count();
        // $totalDanaMasuk = Stok::whereMonth('tanggal', $bulan)->sum('dana_masuk');
        $totalDanaMasuk = Stok::sum('dana_masuk');
        $totalDanaKeluar = Stok::sum('dana_keluar');

        return view('home', compact('totalAnggota', 'totaldaftarOta', 'totalpondok', 'totalDanaMasuk','totalDanaKeluar'));
    }
    
    
    

}
