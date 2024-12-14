@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('template')
@section('judul')
    Laporan Akuntansi
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table table-hover table-light table-bordered">
            <thead class="table-secondary">
                <tr>
                    <th>Tahun</th>
                    <th>Bulan</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Pembelian </th>
                    <th>Grand total</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($report as $rep)
                    <tr>
                        <td >{{ $rep->tahun }}</td>
                        <td>{{ $rep->bulan }}</td>

                        <td class="text-end">Rp {{ number_format($rep->total_pemasukan, 2, ',', '.') }}</td>
                        <td class="text-end">Rp {{ number_format($rep->total_pengeluaran, 2, ',', '.') }}</td>
                        <td class="text-end">Rp {{ number_format($rep->total_pembelian, 2, ',', '.') }}</td>
                        <td class="text-end">Rp {{ number_format($rep->total_penjualan, 2, ',', '.') }}</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ Session::get('role') == 'admin' ? '7' : '6' }}" class="text-center">
                            Tidak ada data
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
@endif