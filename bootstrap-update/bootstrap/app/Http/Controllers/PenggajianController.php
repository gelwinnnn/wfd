<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Gaji;
use Illuminate\Support\Facades\Session;

class PenggajianController extends Controller
{
    public function penggajian_page(Request $request)
    {
        $this->cekLogin();
        $page = "penggajian";
        Session::put("subpage", "penggajian");

        $listGaji = Gaji::where(function ($query) use ($request) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        })->orderBy('id')->get();

        return view("penggajian.penggajian", compact("listGaji", "page"));
    }

    public function penggajian_tambah_page()
    {
        $this->cekLogin();
        $judul = "Masukkan Data Gaji";
        $page = "penggajian";
        return view("penggajian.form_gaji", compact("judul", "page"));
    }

    public function bayarGaji(Request $request)
{
    // Validasi data
    $request->validate([
        'gaji_id' => 'required|exists:gaji,id',
    ]);

    // Cari data gaji berdasarkan ID
    $gaji = Gaji::findOrFail($request->gaji_id);

    // Update status pembayaran
    $gaji->keterangan = 1; // Set status menjadi "sudah dibayar"
    $gaji->save();

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Gaji berhasil dibayarkan!');
}


    public function penggajian_tambah(Request $request)
    {
        $this->cekLogin();

        $latestGaji = Gaji::orderBy('id', 'desc')->first();
        $lastIdNumber = $latestGaji ? intval(substr($latestGaji->id, 1)) : 0;
        $newIdNumber = $lastIdNumber + 1;
        $newId = 'G' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);

        $gaji = new Gaji();
        $gaji->id = $newId;
        $gaji->nama = $request->nama;
        $gaji->jabatan = $request->jabatan;
        $gaji->lokasi_kerja = $request->lokasi_kerja;
        $gaji->gaji_bulanan = $request->gaji_bulanan;
        $gaji->tunjangan = $request->tunjangan;
        $gaji->keterangan = $request->keterangan;
        $gaji->bulan = $request->input('bulan');
        $gaji->hadir = $request->input('hadir');
        $gaji->sakit = $request->input('sakit');
        $gaji->ijin = $request->input('ijin');
        $gaji->alpha = $request->input('alpha');
        $gaji->cuti = $request->input('cuti');
        $gaji->jumlah_hari_kerja = $request->input('jumlah_hari_kerja');
        $gaji->save();

        return redirect(url('/penggajian'));
    }

    public function penggajian_edit_page(Request $request)
    {
        $this->cekLogin();

        $gaji = Gaji::find($request->id);
        $judul = "Edit Data Gaji " .  $gaji->id;
        $page = "penggajian";

        return view("penggajian.form_gaji", compact("gaji", "judul", "page"));
    }

    public function penggajian_edit(Request $request, $id)
    {
        $this->cekLogin();

        $gaji = Gaji::find($id);

        // Mengupdate data gaji
        $gaji->nama = $request->nama;
        $gaji->jabatan = $request->jabatan;
        $gaji->lokasi_kerja = $request->lokasi_kerja;
        $gaji->gaji_bulanan = $request->gaji_bulanan;
        $gaji->tunjangan = $request->tunjangan;
        $gaji->keterangan = $request->keterangan;
        $gaji->bulan = $request->input('bulan');
        $gaji->hadir = $request->input('hadir');
        $gaji->sakit = $request->input('sakit');
        $gaji->ijin = $request->input('ijin');
        $gaji->alpha = $request->input('alpha');
        $gaji->cuti = $request->input('cuti');
        $gaji->jumlah_hari_kerja = $request->input('jumlah_hari_kerja');

        // Menyimpan perubahan ke database
        $gaji->save();
        return redirect(url('/' . Session::get("subpage")));
    }

    public function penggajian_delete($id)
    {
        // Find the Gaji record by its ID
        $gaji = Gaji::find($id);

        if (!$gaji) {
            return redirect()->back()->with('error', 'Data gaji tidak ditemukan.');
        }

        // Delete the record
        $gaji->delete(); // Alternatively, you could use Gaji::destroy($id);

        return redirect(url('/' . Session::get("subpage")));
    }

    public function kehadiran_page(Request $request)
    {
        $this->cekLogin();
        $page = "penggajian";
        Session::put("subpage", "kehadiran");
        $listGaji = Gaji::where(function ($query) use ($request) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        })->orderBy('id')->get();

        return view("penggajian.kehadiran", compact("listGaji", "page"));
    }
}
