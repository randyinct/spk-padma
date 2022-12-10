{{-- ini halaman alternatif --}}
@extends('dashboard.layouts.main')
@section('title') {{ "Data Alternatif" }} @endsection
@section('container')
 
<div class="card shadow mt-5">
    <div class="card-header bg-primary text-white text-center">
        <h3><b>Data Alternatif Calon Pegawai</b></h3>
    </div>
    
    <div class="card-body overflow-auto">  

            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            @if(session()->has('delete'))
            <div class="alert alert-danger" role="alert">
                {{ session('delete') }}
            </div>
            @endif

        <a href="{{ route('alternatif.create') }}" class="btn btn-success mb-2"> <i class="bi bi-clipboard-plus-fill"></i> Tambah data Alternatif</a><br>

                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            {{-- kriteria --}}
                            {{-- <th>First Impression</th>
                            <th>Service Attitude</th>
                            <th>Work Experience</th>
                            <th>Salary Requirement</th>
                            <th>Supervision Experiences</th>
                            <th>Formal School</th>
                            <th>Training Program</th>
                            <th>Achievement Orientation</th>
                            <th>Concern for order</th>
                            <th>Relevant Knowledge</th>
                            <th>Relevant Skills</th>
                            <th>English Skills</th> --}}
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>
                            <th>K8</th>
                            <th>K9</th>
                            <th>K10</th>
                            <th>K11</th>
                            <th>K12</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
        
                        @foreach ($alternatifs as $key => $alternatif)
        
                        <tr>
                            <td>{{ "A". $alternatifs->firstItem() + $key}}</td>
                            <td>{{ $alternatif->alternatif }}</td>
                            <td>{{ $alternatif->k1 }}</td>
                            <td>{{ $alternatif->k2 }}</td>
                            <td>{{ $alternatif->k3 }}</td>
                            <td>{{ $alternatif->k4 }}</td>
                            <td>{{ $alternatif->k5 }}</td>
                            <td>{{ $alternatif->k6 }}</td>
                            <td>{{ $alternatif->k7 }}</td>
                            <td>{{ $alternatif->k8 }}</td>
                            <td>{{ $alternatif->k9 }}</td>
                            <td>{{ $alternatif->k10 }}</td>
                            <td>{{ $alternatif->k11 }}</td>
                            <td>{{ $alternatif->k12 }}</td>
                            <td class="text-center">
                                {{-- BUTTON AKSI --}}
                                <a href="{{ route('alternatif.edit', $alternatif->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square text-white"></i></a> || 
                                <form action="{{ route('alternatif.destroy', $alternatif->id) }}" class="d-inline" method="POST">
                                @method('delete')
                                @csrf
                                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
        
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>

        <div class="d-flex justify-content-end">
            {{ $alternatifs->links() }}
        </div>
    </div>
</div>

@endsection

