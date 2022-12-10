{{-- INDEX MENU PERHITUNGAN --}}
@extends('dashboard.layouts.main')

@section('title') {{ "Perhitungan SPK" }} @endsection

@section('container')

{{-- matriks ALTERNATIF DAN KRITERIA --}}

{{-- kondisi jika data alternatifnya tidak kosong --}}
@if ($rowsAlt != 0)
<center>
<h3 class="mt-3">Matriks Alternatif - Kriteria</h3>
 <table id="myTable" class="table table-bordered mt-3">
     <thead>
         <tr>
             <th>Alternatif / Kriteria</th>
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
         </tr>
     </thead>

     <tbody>

         @foreach ($dataAlt as $key => $data) 
            <tr>
              <td><b>{{ "A". $key+1 }}</b></td> 
                 <td>{{ $data->k1 }}</td>
                 <td>{{ $data->k2 }}</td>
                 <td>{{ $data->k3 }}</td>
                 <td>{{ $data->k4 }}</td>
                 <td>{{ $data->k5 }}</td>
                 <td>{{ $data->k6 }}</td>
                 <td>{{ $data->k7 }}</td>
                 <td>{{ $data->k8 }}</td>
                 <td>{{ $data->k9 }}</td>
                 <td>{{ $data->k10 }}</td>
                 <td>{{ $data->k11 }}</td>
                 <td>{{ $data->k12 }}</td>
            </tr>
         @endforeach
     </tbody>
 </table>
 </center>


 {{-- TABEL NORMALISASI KRITERIA --}}
<center>
<h3 class="mt-3">Normalisasi Bobot Kriteria</h3>
 <table id="myTable" class="table table-bordered mt-3">
     <thead>
         <tr>
             <th></th>
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
             <th>Jumlah</th>
         </tr>
     </thead>
     <tbody>
         <tr>
             <td><b>Bobot Awal</b></td>
             @foreach ($dataK as $data)
             <td>{{ $data->bobot }}</td>
             @endforeach
             <td class="bg-light text-center"><b>{{ $jumlahBobot }}</b></td>
         </tr>
         <tr>
             <td><b>Normalisasi</b></td>
            @php
           
                 for($i = 0; $i < $rowsK ; $i++)
                 {
                    echo  "<td>" .round($tkep[$i],6). "</td>";
                 }
            @endphp
             <td class="bg-light text-center"><b>{{ $jumlahTkep }}</b></td>
         </tr>
         
        


     </tbody>
 </table>
 <hr>
 </center>


 {{-- INI TABEL PANGKAT --}}
<center>
<h3 class="mt-3">Perhitungan pangkat</h3>
 <table id="myTable" class="table table-bordered mt-3">
     <thead>
         <tr>
             <th></th>
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
         </tr>
     </thead>
     <tbody>
         <tr>
             <td><b>Cost/Benefit</b></td>
             @foreach ($dataK as $data)
             <td>{{ $data->cost_benefit }}</td>
             @endforeach
         </tr>
         <tr>
             <td><b>Pangkat</b></td>
             @php
                 for($i = 0; $i < $rowsK ; $i++)
                 {
                    echo  "<td>" .round($pangkat[$i],6). "</td>";
                 }       
            @endphp
         </tr>
     </tbody>
 </table>
 <hr>
 </center>


{{-- TABEL VEKTOR S --}}
<center>
    <h3 class="mt-3">Perhitungan nilai vektor S</h3>
  <table id="myTable" class="table table-bordered mt-3">
      <thead>
          <tr>
              <th>Alternatif</th>
              <th>Nilai S</th>
          </tr>
      </thead>

      <tbody>
        @foreach ($vektorS as $key => $data)
        <tr>
                <td><b>{{ "A". $key+1 }}</b></td>
                <td>{{ round($data, 6) }}</td>
        </tr>    
        @endforeach
         <tr class="bg-light">
             <td><b>Jumlah</b></td>
             <td><b>{{ round($jumlahS, 6) }}</b></td>
         </tr>
      </tbody>
  </table>
</center>

{{-- TABEL VEKTOR V --}}

<center>
    <h3 class="mt-3">Perhitungan nilai vektor V</h3>
  <table id="myTable" class="table table-bordered mt-3">
      <thead>
          <tr>
              <th>Alternatif</th>
              <th>Nilai V</th>
          </tr>
      </thead>

      <tbody>
            @php
                for($i = 0; $i < $rowsAlt ; $i++)
                {
                    echo "<tr><td>" .$altName[$i]. "</td>";
                    echo "<td>" .round($vektorV[$i],6). "</td></tr>";
                }
            @endphp
         <tr class="bg-light">
             <td><b>Jumlah</b></td>
             <td><b>{{ $jumlahV }}</b></td>
         </tr>

      </tbody>
  </table>
</center>
@else
{{-- jika data kosong maka ini dimunculkan --}}
<center>
    <h2 class="mt-3">silahkan masukan <a href="{{ route("alternatif.index") }}">data calon pegawai </a> terlebih dahulu</h2>
</center>
    
@endif



@endsection