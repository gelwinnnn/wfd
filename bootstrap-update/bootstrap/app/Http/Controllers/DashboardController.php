<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\KasKeluar;
use App\Models\KasMasuk;
use App\Models\Pembelian;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class dashboardController extends Controller
{


    public function dashboard()
    {
        $this->cekLogin();
        $page = "dashboard";
        $subpage = 'dashboard';

        $jumlahPegawai = Gaji::count();
        $kasmasuk = KasMasuk::sum('jumlah');
        $kaskeluar = KasKeluar::sum('jumlah');

        $penjualan = Pesanan::selectRaw('DATE_FORMAT(tanggal, "%b %Y") as bulan, sum(jumlah) as total')
            ->groupBy('bulan')
            ->get();

        $pembelian = Pembelian::selectRaw('status, count(*) as total')
            ->groupBy('status')
            ->get();

        // Prepare data for the view
        $penjualanData = $penjualan->pluck('total', 'bulan');
        $pembelianData = $pembelian->pluck('total', 'status');


        // Render the view
        return view("dashboard.dashboard" , [
            'jumlahPegawai' => $jumlahPegawai,
            'kasmasuk' => $kasmasuk,
            'kaskeluar' => $kaskeluar,
            'penjualanData' => $penjualanData,
            'pembelianData' => $pembelianData,
            'page' => $page,
            'subpage' => $subpage
        ]);
    }
}
