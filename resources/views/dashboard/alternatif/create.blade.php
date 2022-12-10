@extends('dashboard.layouts.main')

@section('title')
    {{ 'Tambah data Calon' }}
@endsection

@section('container')

<div class="card shadow my-5">
    <div class="card-header bg-primary text-white f-15px">
        <h2>
            Tambah data calon pegawai baru
        </h2>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('alternatif.store') }}">
            @csrf
                <div class="mb-3">
                    <label for="alternatif" class="form-label">Nama Calon Pegawai</label>
                    <input
                        type="text"
                        class="form-control @error('alternatif') is-invalid @enderror"
                        id="alternatif"
                        name="alternatif"
                        value="{{ @old('alternatif') }}"
                        placeholder="Nama Pelamar"
                        required autofocus>
                    @error('alternatif')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k1" class="form-label">{{ $kriteriaName[0] }} (K1)</label>
                    <input
                        type="number"
                        class="form-control @error('k1') is-invalid @enderror"
                        id="k1"
                        name="k1"
                        value ="{{ @old('k1') }}"
                        placeholder="K1"
                        required >
                    @error('k1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k2" class="form-label">{{ $kriteriaName[1] }} (K2)</label>
                    <input
                        type="number"
                        class="form-control @error('k2') is-invalid @enderror"
                        id="k2"
                        name="k2"
                        value ="{{ @old('k2') }}"
                         placeholder="K2"
                        required >
                    @error('k2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                        
                </div>

                <div class="mb-3">
                    <label for="k3" class="form-label">{{ $kriteriaName[2] }} (K3)</label>
                    <input
                        type="number"
                        class="form-control @error('k3') is-invalid @enderror"
                        id="k3"
                        name="k3"
                        value ="{{ @old('k3') }}"
                         placeholder="K3"
                        required >
                    @error('k3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k4" class="form-label">{{ $kriteriaName[3] }} (K4)</label>
                    <input
                        type="number"
                        class="form-control @error('k4') is-invalid @enderror"
                        id="k4"
                        name="k4"
                         placeholder="K4"
                        value ="{{ @old('k4') }}"
                        required >
                    @error('k4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k5" class="form-label">{{ $kriteriaName[4] }} (K5)</label>
                    <input
                        type="number"
                        class="form-control @error('k5') is-invalid @enderror"
                        id="k5"
                        name="k5"
                         placeholder="K5"
                        value ="{{ @old('k5') }}"
                        required >
                    @error('k5')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k6" class="form-label">{{ $kriteriaName[5] }} (K6)</label>
                    <input
                        type="number"
                        class="form-control @error('k6') is-invalid @enderror"
                        id="k6"
                        name="k6"
                        value ="{{ @old('k6') }}"
                         placeholder="K6"
                        required >
                    @error('k6')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k7" class="form-label">{{ $kriteriaName[6] }} (K7)</label>
                    <input
                        type="number"
                        class="form-control @error('k7') is-invalid @enderror"
                        id="k7"
                        name="k7"
                        value ="{{ @old('k7') }}"
                         placeholder="K7"
                        required >
                    @error('k7')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k8" class="form-label">{{ $kriteriaName[7] }} (K8)</label>
                    <input
                        type="number"
                        class="form-control @error('k8') is-invalid @enderror"
                        id="k8"
                        name="k8"
                        value ="{{ @old('k8') }}"
                        placeholder="K8"
                        required >
                    @error('k8')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k9" class="form-label">{{ $kriteriaName[8] }} (K9)</label>
                    <input
                        type="number"
                        class="form-control @error('k9') is-invalid @enderror"
                        id="k9"
                        name="k9"
                        value ="{{ @old('k9') }}"
                        placeholder="K9"
                        required >
                    @error('k9')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k10" class="form-label">{{ $kriteriaName[9] }} (K10)</label>
                    <input
                        type="number"
                        class="form-control @error('k10') is-invalid @enderror"
                        id="k10"
                        name="k10"
                        value ="{{ @old('k10') }}"
                        placeholder="K10"
                        required >
                    @error('k10')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k11" class="form-label">{{ $kriteriaName[10] }} (K11)</label>
                    <input
                        type="number"
                        class="form-control @error('k11') is-invalid @enderror"
                        id="k11"
                        name="k11"
                        value ="{{ @old('k11') }}"
                        placeholder="K11"
                        required >
                    @error('k11')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="k12" class="form-label">{{ $kriteriaName[11] }} (K12)</label>
                    <input
                        type="number"
                        class="form-control @error('k12') is-invalid @enderror"
                        id="k12"
                        name="k12"
                        value ="{{ @old('k12') }}"
                        placeholder="K12"
                        required >
                    @error('k12')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                    <button type="submit" class="btn btn-primary mt-4">Tambah Alternatif</button>
                    <a href="{{ route('alternatif.index') }}" class="btn btn-danger mt-4 text-decoration-none text-white">Batal</a>
                </form>
            </div>
        </div>
    
@endsection