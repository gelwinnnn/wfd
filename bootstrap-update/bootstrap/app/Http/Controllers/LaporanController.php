<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporan_page()
    {

        $this->cekLogin();
        $page = "laporan";
        $subpage = 'pembelian';

        $report = DB::table('kasmasuk as km')
            ->leftJoin('kaskeluar as kk', function ($join) {
                $join->on(DB::raw('YEAR(km.tanggal)'), '=', DB::raw('YEAR(kk.tanggal)'))
                    ->on(DB::raw('MONTH(km.tanggal)'), '=', DB::raw('MONTH(kk.tanggal)'));
            })
            ->leftJoin('pembelian as p', function ($join) {
                $join->on(DB::raw('YEAR(km.tanggal)'), '=', DB::raw('YEAR(p.tanggal)'))
                    ->on(DB::raw('MONTH(km.tanggal)'), '=', DB::raw('MONTH(p.tanggal)'));
            })
            ->leftJoin('pesananmasuk as pm', function ($join) {
                $join->on(DB::raw('YEAR(km.tanggal)'), '=', DB::raw('YEAR(pm.tanggal)'))
                    ->on(DB::raw('MONTH(km.tanggal)'), '=', DB::raw('MONTH(pm.tanggal)'));
            })
            ->select(
                DB::raw('YEAR(km.tanggal) as tahun'),
                DB::raw('(CASE
                    WHEN MONTH(km.tanggal) = 1 THEN "Januari"
                    WHEN MONTH(km.tanggal) = 2 THEN "Februari"
                    WHEN MONTH(km.tanggal) = 3 THEN "Maret"
                    WHEN MONTH(km.tanggal) = 4 THEN "April"
                    WHEN MONTH(km.tanggal) = 5 THEN "Mei"
                    WHEN MONTH(km.tanggal) = 6 THEN "Juni"
                    WHEN MONTH(km.tanggal) = 7 THEN "Juli"
                    WHEN MONTH(km.tanggal) = 8 THEN "Agustus"
                    WHEN MONTH(km.tanggal) = 9 THEN "September"
                    WHEN MONTH(km.tanggal) = 10 THEN "Oktober"
                    WHEN MONTH(km.tanggal) = 11 THEN "November"
                    WHEN MONTH(km.tanggal) = 12 THEN "Desember"
                END) as bulan'),
                DB::raw('ROUND(SUM(km.jumlah), 2) as total_pemasukan'),
                DB::raw('ROUND(SUM(kk.jumlah), 2) as total_pengeluaran'),
                DB::raw('ROUND(SUM(p.harga), 2) as total_pembelian'),
                DB::raw('ROUND(SUM(pm.jumlah * pm.harga_per_unit), 2) as total_penjualan')
            )
            ->groupBy('tahun', 'bulan')
            ->get()
            ->toArray();

        return view("laporan.laporan", compact("report", 'page', 'subpage'));
    }
}
