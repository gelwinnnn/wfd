@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends("penggajian.template_penggajian")

@section('content')
    <div class="container">
        <form class="d-flex">
            <input class="form-control me-2" type="search" aria-label="Search" name="search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-light table-bordered">
            <thead class="">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Lokasi Kerja</th>
                    <th>Gaji Bulan</th>
                    <th>Asuransi</th>
                    <th>Pajak Perusahaan</th>
                    <th>Iuran</th>
                    <th>Bonus</th>
                    <th>Grand Total</th>
                    <th>Keterangan</th>
                    @if (Session::get("role") == 'admin')
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($listGaji as $gaji)
                    <tr>
                        <td>{{ $gaji->id }}</td>
                        <td>{{ $gaji->nama }}</td>
                        <td>{{ $gaji->jabatan }}</td>
                        <td>{{ $gaji->lokasi_kerja }}</td>
                        <td>Rp {{ number_format($gaji->gaji_bulanan, 2, ',', '.') }}</td>
                        <td>Rp {{ number_format($gaji->gaji_bulanan * 3 / 100, 2, ',', '.') }}</td>
                        <td>Rp {{ number_format($gaji->gaji_bulanan * 2 / 100, 2, ',', '.') }}</td>
                        <td>Rp {{ number_format($gaji->gaji_bulanan / 100, 2, ',', '.') }}</td>
                        <td>Rp {{ number_format($gaji->tunjangan, 2, ',', '.') }}</td>
                        <td>Rp {{ number_format($gaji->gaji_bulanan * 94 / 100 + $gaji->tunjangan, 2, ',', '.') }}</td>
                        <td>
                            @if (!$gaji->keterangan) {{-- Jika belum dibayar --}}
                            @if (Session::get("role") == 'supervisor')
                            <form action="{{ route('bayarGaji.page', $gaji->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="px-2 py-1 bg-secondary text-white rounded">
                                    Bayar Gaji
                                </button>
                            </form>
                            @elseif (Session::get("role") == 'admin')
                                <span class="text-danger fw-bold">Belum Dibayar</span>
                            @endif
                            @else {{-- Jika sudah dibayar --}}
                                <span class="text-success fw-bold">Sudah Dibayar</span>
                            @endif
                        </td>

                        @if (Session::get("role") == 'admin')
                            <td class="text-center">
                                <a href="{{ url('/penggajian/edit/' . $gaji->id) }}">
                                    <span class="badge bg-warning mb-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </span>
                                </a>
                                <a href="{{ url('/penggajian/delete/' . $gaji->id) }}">
                                    <span class="badge bg-danger">
                                        <i class="bi bi-trash"></i>
                                    </span>
                                </a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Notifikasi Sukses --}}
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
@endsection
@endif
