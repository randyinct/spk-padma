@extends('dashboard.layouts.main')

@section('title') {{ "Ranking" }} @endsection


@section('container')

@if ($rowsAlt != 0)
    <div class="card shadow my-4">
      <div class="card-header bg-primary text-white">
        <h5><b>Chart Perankingan</b></h5>
    </div>
    <div class="card-body">
      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
</div>


<div class="card shadow my-5">
    <div class="card-header bg-primary text-white">
        <h5><b>Tabel Perangkingan</b></h5>
    </div>

    <div class="card-body">
      <table class="table table-bordered mt-3 table-hover table1" id="table">
        <thead>
          <tr class="bg-light">
            <th>Nama Pelamar</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($baru as $data)
          <tr>
            <td>{{ $data['nama'] }}</td>
            <td>{{ round($data['nilai'], 6) }}</td>
          </tr>
              
          @endforeach

                  {{-- @php
                      for($i = 0; $i < $rowsAlt ; $i++)
                      {  
                        echo "<tr><td>" .$altName[$i]. "</td>";
                        echo "<td>" .round($vektorV[$i],6). "</td></tr>";
                      }
                  @endphp --}}
      </table>
    </div>
</div>

    

<script>
  const labels = [
        @foreach ($baru as $data)
        '{{ $data['nama'] }}',
        @endforeach
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: ['Nilai'],
      backgroundColor: 'rgb(0, 29, 110)',
      borderColor: 'rgb(255, 99, 132)',
      data: [
        @foreach ($baru as $data)
        {{ $data['nilai'] }},
        @endforeach
      ],
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };
</script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

<script>
    $(document).ready( function () {
    $('#table').DataTable({
        "order" : [[1, 'desc']],
    });
} );
  </script>
@else
<center>
    <h2 class="mt-3">silahkan masukan <a href="{{ route("alternatif.index") }}">data calon pegawai </a> terlebih dahulu</h2>
</center>
@endif

@endsection


