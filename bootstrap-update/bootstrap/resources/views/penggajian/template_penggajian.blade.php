@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('template')
@section('judul')
    Transaksi Penggajian
@endsection

@section('navbar')
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link {{ Session::get("subpage") == 'kehadiran' ? 'active' : 'text-muted' }}" href="{{ url('/kehadiran') }}">Data
                Kehadiran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Session::get("subpage") == 'penggajian' ? 'active' : 'text-muted' }}"
                href="{{ url('/penggajian') }}">Penggajian</a>
        </li>
        @if (Session::get('role') == 'Admin')
            <li class="nav-item ms-auto btn btn-warning p-0">
                <a class="nav-link ms-auto" href="{{ url('/penggajian/tambah') }}">Tambah</a>
            </li>
        @endif

    </ul>
@endsection
@endif