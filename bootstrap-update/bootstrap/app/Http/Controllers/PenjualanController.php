<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\KasMasuk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function pesanan_page(Request $request)
    {
        $page = "penjualan";
        $subpage = "pesanan";
        $listPesanan = Pesanan::where(function ($query) use ($request) {
            $query->where('deskripsi_produk', 'like', '%' . $request->search . '%');
        })->orderBy('tanggal', 'desc')->get();;
        return view("penjualan.pesanan", compact("page", "subpage", "listPesanan"));
    }

    public function pesanan_edit($id){
        $pesanan = Pesanan::where("id", $id)->first();
        $pesanan->lunas? $pesanan->lunas = 0 :  $pesanan->lunas = 1;
        $pesanan->save();
        return redirect(url("/pesanan"));
    }

    public function kasmasuk_page(Request $request)
    {
        $page = "penjualan";
        $subpage = "kas-masuk";
        $kasmasuk = KasMasuk::where(function ($query) use ($request) {
            $query->where('transaksi', 'like', '%' . $request->search . '%');
        })->orderBy('tanggal', 'desc')->get();
        $pesanan = Pesanan::all();

        return view("penjualan.kasmasuk", compact("page", "subpage", "kasmasuk", "pesanan"));
    }
}
