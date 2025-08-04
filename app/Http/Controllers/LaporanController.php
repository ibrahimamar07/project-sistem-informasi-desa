<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\PerihalSurat;


class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

   public function cetak(Request $request)
{
    $request->validate([
        'jenis_surat' => 'required|in:masuk,keluar',
        'nomor' => 'required',
        'tanggal' => 'required|date',
    ]);

    if ($request->jenis_surat === 'masuk') {
        $data = SuratMasuk::with('perihalsurat') 
            ->where('no_surat', $request->nomor)
            ->whereDate('tanggal', $request->tanggal)
            ->first();
    } else {
        $data = SuratKeluar::with('perihalsurat')
            ->where('no_surat', $request->nomor)
            ->whereDate('tanggal', $request->tanggal)
            ->first();
    }

    return view('laporan.show', [
        'data' => $data,
        'jenis' => $request->jenis_surat,
    ]);
}

}
