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
            <thead class="">
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Transaksi</th>
                    <th>Jumlah</th>
                    {{-- @if (Session::get('role') == 'Admin')
                        <th>Action</th>
                    @endif --}}
                </tr>
            </thead>
            <tbody>


                @php
                    $totalKasMasuk = 0;
                @endphp
                @foreach ($pesanan as $kas)
                    @if ($kas->lunas)
                        @php
                            $totalKasMasuk += $kas->jumlah;
                        @endphp
                        <tr>
                            <td>{{ $kas->id }}</td>
                            <td>{{ \Carbon\Carbon::parse($kas->tanggal)->format('d/m/Y') }}</td>
                            <td> Penjualan {{ $kas->deskripsi_produk }}</td>
                            <td class="text-end">Rp {{ number_format($kas->jumlah * $kas->harga_per_unit, 2, ',', '.') }}
                            </td>
                        </tr>
                    @endif
                @endforeach
                @foreach ($kasmasuk as $kas)
                    @php
                        $totalKasMasuk += $kas->jumlah;
                    @endphp
                    <tr>
                        <td>{{ $kas->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($kas->tanggal)->format('d/m/Y') }}</td>
                        <td>{{ $kas->transaksi }}</td>
                        <td class="text-end">Rp {{ number_format($kas->jumlah, 2, ',', '.') }}</td>

                    </tr>
                @endforeach

                <tr class="table-info fw-bold">
                    <td colspan="3" class="text-end">Total Kas Masuk:</td>
                    <td class="text-end">Rp {{ number_format($totalKasMasuk, 2, ',', '.') }}</td>
                    {{-- @if (Session::get('role') == 'Admin')
                        <td></td>
                    @endif --}}
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@endif