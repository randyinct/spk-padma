@extends('dashboard.layouts.main')

@section('title') {{ "Data Kriteria" }} @endsection

@section('container')
 

<div class="col-md-5 my-5"></div>
<div class="card shadow">
    <div class="card-header bg-primary text-white text-center">
        <h3><b>Data Kriteria</b></h3>
    </div>
    <div class="card-body">

        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <span class="text-small">
            <ul class="mb-3">
                <h6>Info Penilaian bobot kriteria</h6>
               <p><b>1 = Tidak Penting | 2 = Kurang Penting | 3 = Cukup Penting | 4 = Penting | 5 = Sangat Penting </b></p>
            </ul>
        </span>
        <table id="myTable" class="table table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                    <th>Jenis Kriteria</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($kriterias as $key => $kriteria)

                <tr>
                    <td>{{ $kriterias->firstItem() + $key}}</td>
                    <td>{{ $kriteria->kode }}</td>
                    <td>{{ $kriteria->kriteria }}</td>
                    <td>{{ $kriteria->bobot }}</td>
                    <td>{{ $kriteria->cost_benefit }}</td>
                    <td class="text-center">
                        <a href="{{ route('kriterias.edit', $kriteria->id) }}" class="btn btn-warning "><i class="bi bi-pencil-square text-white"></i></a>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $kriterias->links() }}
        </div>
    </div>
</div>

@endsection

