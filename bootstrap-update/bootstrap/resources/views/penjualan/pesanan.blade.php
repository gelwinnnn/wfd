@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('penjualan.template_penjualan')

@section('content')
    <div class="container">
        <form class="d-flex">
            <input class="form-control me-2" type="search" aria-label="Search" name="search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-light table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Deskripsi Produk</th>
                    <th>Jumlah</th>
                    <th>Harga Per Unit</th>
                    <th>Total</th>
                    <th>Status</th>
                    @if (Session::get('role') == 'Admin')
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($listPesanan as $pesanan)
                    <tr>
                        <td>{{ $pesanan->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($pesanan->tanggal)->format('d/m/Y') }}</td>
                        <td>{{ $pesanan->deskripsi_produk }}</td>
                        <td>{{ number_format($pesanan->jumlah, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($pesanan->harga_per_unit, 2, ',', '.') }}</td>
                        <td>Rp {{ number_format($pesanan->jumlah * $pesanan->harga_per_unit, 2, ',', '.') }}</td>
                        <td>
                            @if ($pesanan->status == 'sudah dibayar')
                                <span class="badge bg-success">Sudah Dibayar</span>
                            @elseif ($pesanan->status == 'belum dibayar')
                                <span class="badge bg-danger">Belum Dibayar</span>
                            @endif
                        </td>
                        
                        @if (Session::get('role') == 'admin')
                            {{-- <td>
                                <a class="btn btn-secondary btn-sm" href="{{ url('/pesanan/' . $pesanan->id) }}">
                                    <i class="fas fa-edit">
                                        @if ($pesanan->status == 'belum dibayar')
                                            x
                                        @else
                                            ✓
                                        @endif
                                    </i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@endif