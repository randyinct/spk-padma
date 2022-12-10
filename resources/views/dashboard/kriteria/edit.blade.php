@extends('dashboard.layouts.main')

@section('title')
    {{ 'edit data kriteria' }}
@endsection

@section('container')
<div class="card shadow my-5">
    <div class="card-header bg-primary text-white f-15px">
        <h3>
            <b>Edit Kriteria</b>
        </h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('kriterias.update', $data->id ) }}">
            @method('PUT') 
            @csrf

            {{-- <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input
                    type="text"
                    class="form-control @error('kode') is-invalid @enderror"
                    id="kode"
                    name="kode"
                    value="{{ $data->kode }}" >
                    @error('kode')
                        <div class="invalid-feedback">
                            {{ $message }}
        </div>
        @enderror
    </div>
    --}}

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Kriteria</label>
        <input
            type="text"
            class="form-control @error('kriteria') is-invalid @enderror"
            id="kriteria"
            name="kriteria"
            value="{{ $data->kriteria }}"
            required="required">
            @error('kriteria')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot Kriteria</label>
            <input
                type="number"
                class="form-control  @error('bobot') is-invalid @enderror"
                id="bobot"
                name="bobot"
                value="{{ $data->bobot }}"
                required="required">
                @error('bobot')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cost_benefit" class="form-label">Cost / Benefit</label>
                <select class="form-select" name="cost_benefit" id="cost_benefit">

                    @if ($data->cost_benefit == 'benefit')
                    <option selected="selected">{{ $data->cost_benefit }}</option>
                    <option value="cost">cost</option>
                    @else
                    <option selected="selected">{{ $data->cost_benefit }}</option>
                    <option value="benefit">benefit</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Edit Kriteria</button>
            <a href="{{ route('kriterias.index') }}" class="btn btn-danger mt-4">Batal</a>
        </form>
    </div>
</div>
@endsection