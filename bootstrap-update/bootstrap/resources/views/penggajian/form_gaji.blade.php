@if (Session::get("role") == 'admin' || Session::get("role") == 'supervisor')
@extends('template')
@section('judul')
    {{ $judul }}
@endsection

@section('content')
    <form method="POST">
        @csrf

        <div class="row">
            <div class="col-6 p-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ isset($gaji) ? $gaji->nama : '' }}"
                    required>
            </div>
            <div class="col-6 p-3">
                <label for="jabatan">Jabatan</label>
                <select name="jabatan" class="form-select">
                    <option value="SPG" {{ isset($gaji) && $gaji->jabatan == 'SPG' ? 'selected' : '' }}>SPG</option>
                    <option value="Supervisor" {{ isset($gaji) && $gaji->jabatan == 'Supervisor' ? 'selected' : '' }}>
                        Supervisor</option>
                    <option value="Beauty Consultant"
                        {{ isset($gaji) && $gaji->jabatan == 'Beauty Consultant' ? 'selected' : '' }}>Beauty Consultant
                    </option>
                </select>
            </div>
            <div class="col-6 p-3">
                <label for="lokasi_kerja">Lokasi Kerja</label>
                <select name="lokasi_kerja" class="form-select">
                    <option value="Surabaya" {{ isset($gaji) && $gaji->lokasi_kerja == 'Surabaya' ? 'selected' : '' }}>
                        Surabaya</option>
                    <option value="Gresik" {{ isset($gaji) && $gaji->lokasi_kerja == 'Gresik' ? 'selected' : '' }}>Gresik
                    </option>
                    <option value="Krian" {{ isset($gaji) && $gaji->lokasi_kerja == 'Krian' ? 'selected' : '' }}>Krian
                    </option>
                    <option value="Malang" {{ isset($gaji) && $gaji->lokasi_kerja == 'Malang' ? 'selected' : '' }}>Malang
                    </option>
                </select>
            </div>

            <div class="col-6 p-3">
                <label for="gaji_bulanan">Gaji Pokok</label>
                <input name="gaji_bulanan" type="number" min="0" class="form-control"
                    value="{{ isset($gaji) ? $gaji->gaji_bulanan : '' }}" required>
            </div>

            <div class="col-6 p-3">
                <label for="tunjangan">Bonus</label>
                <input name="tunjangan" type="number" min="0" class="form-control"
                    value="{{ isset($gaji) ? $gaji->tunjangan : '' }}" required>
            </div>

            <div class="col-6 p-3">
                <label for="keterangan">Keterangan</label>
                <select name="keterangan" class="form-select">
                    <option value="0" {{ isset($gaji) && $gaji->keterangan == '0' ? 'selected' : '' }}>Belum dibayar
                    </option>
                    <option value="1" {{ isset($gaji) && $gaji->keterangan == '1' ? 'selected' : '' }}>Sudah dibayar
                    </option>
                </select>
            </div>

            <div class="col-6 p-3">
                <label for="bulan">Bulan</label>
                <select id="bulan" name="bulan" class="form-select" required onchange="updateDaysInMonth()">
                    <option value="Januari" {{ isset($gaji) && $gaji->bulan == 'Januari' ? 'selected' : '' }}>Januari</option>
                    <option value="Februari" {{ isset($gaji) && $gaji->bulan == 'Februari' ? 'selected' : '' }}>Februari</option>
                    <option value="Maret" {{ isset($gaji) && $gaji->bulan == 'Maret' ? 'selected' : '' }}>Maret</option>
                    <option value="April" {{ isset($gaji) && $gaji->bulan == 'April' ? 'selected' : '' }}>April</option>
                    <option value="Mei" {{ isset($gaji) && $gaji->bulan == 'Mei' ? 'selected' : '' }}>Mei</option>
                    <option value="Juni" {{ isset($gaji) && $gaji->bulan == 'Juni' ? 'selected' : '' }}>Juni</option>
                    <option value="Juli" {{ isset($gaji) && $gaji->bulan == 'Juli' ? 'selected' : '' }}>Juli</option>
                    <option value="Agustus" {{ isset($gaji) && $gaji->bulan == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                    <option value="September" {{ isset($gaji) && $gaji->bulan == 'September' ? 'selected' : '' }}>September</option>
                    <option value="Oktober" {{ isset($gaji) && $gaji->bulan == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                    <option value="November" {{ isset($gaji) && $gaji->bulan == 'November' ? 'selected' : '' }}>November</option>
                    <option value="Desember" {{ isset($gaji) && $gaji->bulan == 'Desember' ? 'selected' : '' }}>Desember</option>
                </select>
            </div>

            <div class="col-6 p-3">
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah_hari_kerja" min="0" class="form-control"
                       value="{{ isset($gaji) ? $gaji->jumlah : '' }}" required readonly>
                <div class="row">
                    <div class="col-4 p-3">
                        <label for="hadir">Hadir</label>
                        <input type="number" name="hadir" min="0" class="form-control"
                               value="{{ isset($gaji) ? $gaji->hadir : '' }}" required onchange="calculateTotal()">
                    </div>
                    <div class="col-4 p-3">
                        <label for="sakit">Sakit</label>
                        <input type="number" name="sakit" min="0" class="form-control"
                               value="{{ isset($gaji) ? $gaji->sakit : '' }}" required onchange="calculateTotal()">
                    </div>
                    <div class="col-4 p-3">
                        <label for="ijin">Ijin</label>
                        <input type="number" name="ijin" min="0" class="form-control"
                               value="{{ isset($gaji) ? $gaji->ijin : '' }}" required onchange="calculateTotal()">
                    </div>
                    <div class="col-4 p-3">
                        <label for="alpha">Alpha</label>
                        <input type="number" name="alpha" min="0" class="form-control"
                               value="{{ isset($gaji) ? $gaji->alpha : '' }}" required onchange="calculateTotal()">
                    </div>
                    <div class="col-4 p-3">
                        <label for="cuti">Cuti</label>
                        <input type="number" name="cuti" min="0" class="form-control"
                               value="{{ isset($gaji) ? $gaji->cuti : '' }}" required onchange="calculateTotal()">
                    </div>
                </div>
                <input type="hidden" id="jumlahHari" value="0">
            </div>

            <script>
                let previousValues = {
                    hadir: 0,
                    sakit: 0,
                    ijin: 0,
                    alpha: 0,
                    cuti: 0
                };

                function updateDaysInMonth() {
                    const month = document.getElementById('bulan').value;
                    let days;

                    const daysInMonth = {
                        'Januari': 31,
                        'Februari': 28, // Simplified; not accounting for leap years
                        'Maret': 31,
                        'April': 30,
                        'Mei': 31,
                        'Juni': 30,
                        'Juli': 31,
                        'Agustus': 31,
                        'September': 30,
                        'Oktober': 31,
                        'November': 30,
                        'Desember': 31
                    };

                    days = daysInMonth[month] || 0;
                    document.getElementById('jumlahHari').value = days;
                    calculateTotal(); // Call to recalculate total after updating days
                }

                function calculateTotal() {
                    const hadir = parseInt(document.querySelector('input[name="hadir"]').value) || 0;
                    const sakit = parseInt(document.querySelector('input[name="sakit"]').value) || 0;
                    const ijin = parseInt(document.querySelector('input[name="ijin"]').value) || 0;
                    const alpha = parseInt(document.querySelector('input[name="alpha"]').value) || 0;
                    const cuti = parseInt(document.querySelector('input[name="cuti"]').value) || 0;

                    const total = hadir + sakit + ijin + alpha + cuti;
                    const jumlahHari = parseInt(document.getElementById('jumlahHari').value) || 0;

                    // Check if the total exceeds the allowed number of days in the month
                    if (total > jumlahHari) {
                        alert(`Total kehadiran (${total}) tidak boleh melebihi jumlah hari kerja (${jumlahHari})`);

                        // Reset inputs to previous values
                        document.querySelector('input[name="hadir"]').value = previousValues.hadir;
                        document.querySelector('input[name="sakit"]').value = previousValues.sakit;
                        document.querySelector('input[name="ijin"]').value = previousValues.ijin;
                        document.querySelector('input[name="alpha"]').value = previousValues.alpha;
                        document.querySelector('input[name="cuti"]').value = previousValues.cuti;
                    } else {
                        // Update total and previous values if within limits
                        document.getElementById('jumlah').value = total;

                        previousValues.hadir = hadir;
                        previousValues.sakit = sakit;
                        previousValues.ijin = ijin;
                        previousValues.alpha = alpha;
                        previousValues.cuti = cuti;
                    }
                }
                // Event listeners for each input to recalculate total on input change
                document.querySelector('input[name="hadir"]').addEventListener('input', calculateTotal);
                document.querySelector('input[name="sakit"]').addEventListener('input', calculateTotal);
                document.querySelector('input[name="ijin"]').addEventListener('input', calculateTotal);
                document.querySelector('input[name="alpha"]').addEventListener('input', calculateTotal);
                document.querySelector('input[name="cuti"]').addEventListener('input', calculateTotal);

                updateDaysInMonth();
            </script>

            <div class="col-6 p-3">
                <a href="{{ url('/' . Session::get('subpage') ) }}" class="btn btn-danger">Cancel</a>
                <input type="submit" value="{{ isset($absensi) ? 'Update' : 'Save' }}" class="btn btn-primary ms-2">
            </div>
        </div>
    </form>
@endsection
@endif