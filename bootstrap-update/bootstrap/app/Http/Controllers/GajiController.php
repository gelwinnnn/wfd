<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;

class GajiController extends Controller
{
    public function bayarGajiPage($id)
    {
        // Ambil data gaji untuk karyawan dengan ID yang dikirim
        $gaji = Gaji::findOrFail($id);
        return view('bayarGaji', compact('gaji'));  // Mengirim data gaji karyawan ke halaman bayarGaji
    }
    
    public function prosesBayar($id)
    {
        $gaji = Gaji::findOrFail($id);  // Temukan data gaji berdasarkan ID
        $gaji->keterangan = true;  // Tandai sudah dibayar
        $gaji->save();  // Simpan perubahan ke database
    
        return redirect()->route('penggajian')->with('success', 'Gaji berhasil dibayar!');  // Kembali ke halaman penggajian
    }
    



}
