@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor'|| Session::get("role") == 'visitor')

@extends('template')


@section('judul')
    Dashboard Sistem Akuntansi Manajemen Perusahaan
@endsection

@section('content')
    <!-- dashboard.blade.php -->
    <div class="container">
        <div class="row mb-3">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Pegawai</h5>
                        <p class="card-text">{{ $jumlahPegawai }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kas Masuk</h5>
                        <p class="card-text">Rp {{ number_format($kasmasuk, 2) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kas Keluar</h5>
                        <p class="card-text">Rp {{ number_format($kaskeluar, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Analisis Penjualan</h5>
                        <canvas id="penjualanChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Analisis Pembelian</h5>
                        <canvas id="pembelianChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Create the line chart for penjualan
        var penjualanChart = new Chart(document.getElementById('penjualanChart'), {
            type: 'line',
            data: {
                labels: Object.keys(@json($penjualanData)),
                datasets: [{
                    label: 'Penjualan',
                    data: Object.values(@json($penjualanData)),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Create the pie chart for pembelian
        var pembelianChart = new Chart(document.getElementById('pembelianChart'), {
            type: 'pie',
            data: {
                labels: Object.keys(@json($pembelianData)),
                datasets: [{
                    label: 'Pembelian',
                    data: Object.values(@json($pembelianData)),
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56'
                    ],
                    hoverBackgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56'
                    ]
                }]
            }
        });
    </script>
@endsection
@endif