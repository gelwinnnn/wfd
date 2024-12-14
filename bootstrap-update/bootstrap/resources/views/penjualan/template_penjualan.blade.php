@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('template')
@section('judul')
    Transaksi Penjualan
@endsection

@section('navbar')
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link {{ $subpage == 'pesanan' ? 'active' : 'text-muted' }}"
                href="{{ url('/pesanan') }}">Pesanan Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $subpage == 'kas-masuk' ? 'active' : 'text-muted' }}"
                href="{{ url('/kas-masuk') }}">Kas Masuk</a>
        </li>
    </ul>
@endsection
@endif