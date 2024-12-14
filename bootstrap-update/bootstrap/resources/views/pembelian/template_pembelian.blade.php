@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('template')
@section('judul')
    Transaksi Pembelian
@endsection

@section('navbar')
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link {{ $subpage == 'stok' ? 'active' : 'text-muted' }}"
                href="{{ url('/stok') }}">Ketersediaan Stok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $subpage == 'pembelian' ? 'active' : 'text-muted' }}"
                href="{{ url('/pembelian') }}">Pembelian</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ $subpage == 'kas-keluar' ? 'active' : 'text-muted' }}"
                href="{{ url('/kas-keluar') }}">Kas Keluar</a>
        </li>
    </ul>
@endsection
@endif