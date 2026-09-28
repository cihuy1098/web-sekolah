@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-title mb-0">
            <div class="card {{ isset($siswa) ? 'card-warning' : 'card-primary' }} card-outline shadow-sm mb-4">

                <div class="card-header">
                    <h3 class="card-title mb-0">
                        <i class="bi {{ isset($siswa) ? 'bi-pencil-square' : 'bi-plus-lg' }} me-1"></i>
                        {{ isset($siswa) ? 'Form Edit Data Siswa' : 'Form Tambah Data Siswa Baru' }}
                    </h3>
                </div>

                <form action="{{ route('admin.siswa.save', isset($siswa) ? Crypt::encrypt($siswa->id) : null) }}" method="POST">
                    @csrf

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="nisn" class="form-label fw-semibold">NISN (10 Digit Angka) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" name="tahun_masuk" value="{{ old('tahun_masuk', $siswa->tahun_masuk ?? date('Y')) }}" placeholder="contoh: 2024" required>
                            @error('nisn')
                               <div class="invalid-feedback">{{ $message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_siswa" class="form-label fw-semibold">Nama Lengkap Siswa <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa ?? '') }}" placeholder="Contoh: Muhammad farhan" required>
                            @error('nama_siswa')
                               <div class="invalid-feedback">{{ $message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jenis Kelamin <span class="text-danger">*</span></label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="jk_l" value="Laki-Laki" {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? 'Laki-Laki') == 'Laki-Laki' ? 'checked' : ''}} required>
                                    <label class="form-check-label" for="jk_l">
                                        <i class="bi bi-gender-male text-primary"></i> Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="jk_p" value="Perempuan" {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? 'Perempuan') == 'Perempuan' ? 'checked' : ''}} required>
                                    <label class="form-check-label" for="jk_p">
                                        <i class="bi bi-gender-female text-danger"></i> Perempuan
                                    </label>
                                </div>
                            </div>
                             @error('jenis_kelamin')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                             @enderror
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
