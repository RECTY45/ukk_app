@extends('page_admin.dashboard.layouts.main')
@section('content')
    {{-- <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> --}}

    {{-- Table Start --}}
    <div class="text-start px-4 pt-3">
        <div class="row mb-2">
            <div class="col-md-12">
                <span>
                    <p class="font-weight-bold" style="line-height: 10px">Data Manajemen User</p>
                    <p class="h2">Edit Data Manajemen User</p>
                </span>
            </div>
        </div>
    </div>


    <div class="card-body">
        <form action="{{ @route('user.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input value="{{ old('nama_pengguna', $item->nama_pengguna) }}" type="text" name="nama_pengguna" class="form-control @error('nama_pengguna')is-invalid @enderror">

                        @error('nama_pengguna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input value="{{ old('username', $item->username) }}" type="text" name="username" class="form-control @error('username')is-invalid @enderror">

                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select value='{{ $item->role }}' name="role" class="form-control">
                            @if ($item->role)
                                <option selected value="{{ $item->role }}">{{ $item->role }}</option>
                            @endif
                            <option value="">-- Pilih Role --</option>
                            <option value="Admin">Admin</option>
                            <option value="Guru">Guru</option>
                            <option value="Walas">Wali Kelas</option>
                            <option value="Siswa">Siswa</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group px-3">
                <button type="submit" class="btn btn-sm btn-primary">Rekam</button>

                <a href="{{ @route('user.index') }}" type="button" class="btn btn-sm btn-success">Batal</a>
            </div>
    </div>
    </form>
    <div class="rounded-top p-4 position-relative bottom-0 start-0 end-0">
        <div class="row mb-1">
            <div class="col-10">
                &copy; <a href="https://www.instagram.com/recty.exploit/">RECTY.Exploit</a>, All Right Reserved.
            </div>
        </div>
    </div>
    </div>

    <!-- Footer End -->
@endsection

@push('script-js')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endpush
