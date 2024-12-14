@extends('main')

@section('isi')
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow" style="max-width: 75vw; width: 100%;">
            <div class="card-body p-4">
                <h2 class="card-title text-center mb-4">Sistem Informasi Akuntansi</h2>
                <form method="POST" action="/signup">
                    @csrf
                    <h4 class="text-center mb-4">SIGN UP</h4>

                    <!-- Pilih Role -->
                    <<div class="mb-3">
                        <select class="form-select" aria-label="Select Role" name="roles" required>
                            <option value="">Select Role</option>
                            <option value="Admin" {{ old('roles') == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Supervisor" {{ old('roles') == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
                            <option value="Visitor" {{ old('roles') == 'Visitor' ? 'selected' : '' }}>Visitor</option>
                        </select>
                        @error('role')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Menampilkan pesan error jika login gagal -->
                    @if (session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Tombol Create -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection