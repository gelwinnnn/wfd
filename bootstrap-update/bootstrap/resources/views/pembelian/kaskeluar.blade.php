@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('pembelian.template_pembelian')

@section('content')
    <div class="container">
        <form class="d-flex">
            <input class="form-control me-2" type="search" aria-label="Search" name="search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>
    
    <div class="table-responsive">
        <table class="table table-hover table-light table-bordered">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Jumlah (Rp)</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listKaskeluar as $kaskeluar)
                    <tr>
                        <td>{{ $kaskeluar->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($kaskeluar->tanggal)->format('d/m/Y') }}</td>
                        <td>{{ $kaskeluar->deskripsi }}</td>
                        <td class="text-end">{{ number_format($kaskeluar->jumlah, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ Session::get('role') == 'admin' ? '6' : '5' }}" class="text-center">
                            Tidak ada data kas keluar
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
@endif