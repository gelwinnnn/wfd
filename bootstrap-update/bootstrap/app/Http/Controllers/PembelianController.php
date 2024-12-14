<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\StokBahan;
use Illuminate\Http\Request;
use App\Models\Kaskeluar;


class PembelianController extends Controller
{
    public function stok_page(Request $request)
    {
        $this->cekLogin();
        $page = "pembelian";
        $subpage = 'stok';
        $listStok = StokBahan::where('bahan_baku','like','%'.$request->search.'%')->orWhere('penanggung_jawab','like','%'.$request->search.'%')->get();

        return view("pembelian.stok" , compact("listStok", "page", "subpage"));
    }

    public function pembelian_page(Request $request)
    {
        $this->cekLogin();
        $page = "pembelian";
        $subpage = 'pembelian';
        $listPembelian = Pembelian::where('deskripsi','like','%'.$request->search.'%')->orWhere('pemasok','like','%'.$request->search.'%')->get();

        return view("pembelian.pembelian" , compact("listPembelian", "page", "subpage"));
    }


    public function kaskeluar_page(Request $request)
    {
        $this->cekLogin();
        $page = "pembelian";
        $subpage = 'kas-keluar';
        $listKaskeluar = Kaskeluar::where('deskripsi','like','%'.$request->search.'%')->get();

        return view("pembelian.kaskeluar" , compact("listKaskeluar", "page", "subpage"));
    }
}
