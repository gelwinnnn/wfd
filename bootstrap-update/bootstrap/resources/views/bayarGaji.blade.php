@extends('main')

@section('isi')
<div class="container py-12 mt-3">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Pembayaran Gaji Karyawan</h3>

    <div class="table-responsive">
        <table class="table table-hover table-light table-bordered">
        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300">
            <tr>
                <th class="px-4 py-2 text-left">Nama</th>
                <th class="px-4 py-2 text-left">Jabatan</th>
                <th class="px-4 py-2 text-left">Lokasi Kerja</th>
                <th class="px-4 py-2 text-left">Bulan</th>
                <th class="px-4 py-2 text-left">Hadir (Hari)</th>
                <th class="px-4 py-2 text-left">Gaji Bulanan</th>
                <th class="px-4 py-2 text-left">Tunjangan</th>
                <th class="px-4 py-2 text-left">Total Gaji</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-4 py-2">{{ $gaji->nama }}</td>
                <td class="px-4 py-2">{{ $gaji->jabatan }}</td>
                <td class="px-4 py-2">{{ $gaji->lokasi_kerja }}</td>
                <td class="px-4 py-2">{{ $gaji->bulan }}</td>
                <td class="px-4 py-2">{{ $gaji->hadir }}</td>
                <td class="px-4 py-2">Rp {{ number_format($gaji->gaji_bulanan, 0, ',', '.') }}</td>
                <td class="px-4 py-2">Rp {{ number_format($gaji->tunjangan, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($gaji->gaji_bulanan * 94 / 100 + $gaji->tunjangan, 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <!-- Tombol Bayar Gaji -->
    <form action="{{ route('bayarGaji.proses', $gaji->id) }}" method="POST">
        @csrf
        <button type="submit" class="px-2 py-1 bg-secondary text-white rounded">
            Transfer
        </button>
    </form>

</div>
@endsection
