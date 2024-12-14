@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor'|| Session::get("role") == 'visitor')
@extends('main')

<div class="w-100">

    <div class="d-flex">
        <div class="sidebar bg-white shadow-sm d-flex flex-column" style="width: 250px; height: 100vh; position: fixed;">

            <div class="text-center p-3 pt-5">
                <div class="d-inline-flex justify-content-center align-items-center">
                    <img src={{ asset('images/gambar.png') }} class="px-5 img-fluid">
                </div>
            </div>

            <!-- Menu Items -->
            <nav class="nav flex-column mt-3 ">
                <a class="nav-link text-dark {{ $page == 'dashboard' ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                    <i class="bi bi-grid me-2 fs-4"></i> Dashboard
                </a>
                @if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
                <a class="nav-link text-dark {{ $page == 'penggajian' ? 'active' : '' }}"
                    href="{{ url('/kehadiran') }}">
                    <i class="bi bi-wallet2 me-2 fs-4"></i>
                    Penggajian</a>
                <a class="nav-link text-dark {{ $page == 'penjualan' ? 'active' : '' }}" href="{{ url('/pesanan') }}">
                    <i class="bi bi-box-arrow-in-down me-2 fs-4"></i>
                    Kas Masuk</a>
                <a class="nav-link text-dark {{ $page == 'pembelian' ? 'active' : '' }}" href="{{ url('/stok') }}"><i
                        class="bi bi-box-arrow-up me-2 fs-4"></i> Kas Keluar</a>
                <a class="nav-link text-dark {{ $page == 'laporan' ? 'active' : '' }}" href="{{ url('/laporan') }}"><i
                        class="bi bi-file-earmark-text me-2 fs-4"></i> Laporan
                    Akuntansi</a>
                @endif
                {{-- <a class="nav-link text-dark {{ $page == 'pengaturan' ? 'active' : '' }}"
                    href="{{ url('/pengaturan') }}"><i class="bi bi-gear me-2 fs-4"></i> Pengaturan</a> --}}
            </nav>

            <!-- User Profile -->
            <div class="mt-auto p-3 d-flex align-items-center">
                <i class="bi bi-person-circle fs-2 me-2"></i>
                <div>
                    <h6 class="mb-0">{{ Session::get('name') }}</h6>
                    <small class="text-muted">{{ Session::get('role') }}</small>
                </div>
                <a href="/logout" class="btn btn-danger ms-auto"> Logout
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content"
            style="margin-left: 250px; width: calc(100% - 250px); min-height: 100vh; display: flex; flex-direction: column;">
            <div class="container mt-5 d-flex flex-column" style="flex-grow: 1;">
                <h2 class="mb-4 fw-bold">@yield('judul')</h2>
                @yield('navbar')
                <div class="h-auto">
                    @yield('content')
                </div>
            </div>
            <footer class="mt-auto p-4 text-end">Sistem Informasi Akuntansi @2024</footer>
        </div>
    </div>
</div> 
</div>
@endif