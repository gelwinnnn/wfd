@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('penggajian.template_penggajian')

@section('content')
    <div class="container">
        <form class="d-flex">
            <input class="form-control me-2" type="search" aria-label="Search" name="search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-light table-bordered">
            <thead class="text-center">
                <tr>
                    <th rowspan="2">ID</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">Jabatan</th>
                    <th rowspan="2">Lokasi Kerja</th>
                    <th rowspan="2">Bulan</th>
                    <th colspan="5" class="text-center">Presensi</th>
                    <th rowspan="2">Jumlah</th>
                    {{-- @if (Session::get("role") == 'admin')
                    <th rowspan="2">Action</th>
                    @endif --}}
                </tr>
                <tr>
                    <th>H</th>
                    <th>S</th>
                    <th>I</th>
                    <th>A</th>
                    <th>C</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listGaji as $gaji)
                    <tr>
                        <td>{{ $gaji->id }}</td>
                        <td>{{ $gaji->nama }}</td>
                        <td>{{ $gaji->jabatan }}</td>
                        <td>{{ $gaji->lokasi_kerja }}</td>
                        <td>{{ $gaji->bulan }}</td>
                        <td class="text-center">{{ $gaji->hadir }}</td>
                        <td class="text-center">{{ $gaji->sakit }}</td>
                        <td class="text-center">{{ $gaji->ijin }}</td>
                        <td class="text-center">{{ $gaji->alpha }}</td>
                        <td class="text-center">{{ $gaji->cuti }}</td>
                        <td class="text-center">{{ $gaji->jumlah_hari_kerja }}</td>

                        {{-- @if (Session::get('role') == 'admin')
                            <td class="text-center">
                                <a href="{{ url('/penggajian/edit/' . $gaji->id) }}">
                                    <span class="badge bg-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </span>
                                </a>
                                <a href="{{ url('/penggajian/delete/' . $gaji->id) }}">
                                    <span class="badge bg-danger">
                                        <i class="bi bi-trash"></i>
                                    </span>
                                </a>
                            </td>
                        @endif --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@endif