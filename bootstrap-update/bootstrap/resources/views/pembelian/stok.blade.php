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
                    <th>Bahan Baku</th>
                    <th>Penanggung Jawab</th>
                    <th>Jumlah Stok</th>
                    <th>Status</th>
                    {{-- @if (Session::get('role') == 'Admin')
                        <th class="text-center">Action</th>
                    @endif --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($listStok as $stok)
                    <tr>
                        <td>{{ $stok->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($stok->tanggal)->format('d/m/Y') }}</td>
                        <td>{{ $stok->bahan_baku }}</td>
                        <td>{{ $stok->penanggung_jawab }}</td>
                        <td class="text-end">{{ number_format($stok->jumlah_stok, 0, ',', '.') }}</td>
                        <td>
                            @if ($stok->jumlah_stok > 100)
                                <span class="badge bg-success">Stok Aman</span>
                            @elseif ($stok->jumlah_stok > 50)
                                <span class="badge bg-warning">Stok Menengah</span>
                            @else
                                <span class="badge bg-danger">Stok Menipis</span>
                            @endif
                        </td>
                        {{-- @if (Session::get('role') == 'Admin')
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a class="btn btn-info btn-sm" href="{{ url('/stok-bahan/' . $stok->id) }}"
                                        title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="{{ url('/stok-bahan/edit/' . $stok->id) }}"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $stok->id }}" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $stok->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data stok bahan "{{ $stok->bahan_baku }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <form action="{{ url('/stok-bahan/delete/' . $stok->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        @endif --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ Session::get('role') == 'admin' ? '7' : '6' }}" class="text-center">
                            Tidak ada data stok bahan
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
@endif