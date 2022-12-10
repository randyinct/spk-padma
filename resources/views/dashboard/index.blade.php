@extends('dashboard.layouts.main')

@section('title') {{ "Dashboard" }} @endsection

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ Auth()->user()->name }}</h1>
      </div>

<div class="card">
  <div class="card-body">
    <h5>Sistem Pendukung Keputusan</h5>
    <p>Sistem Pendukung Keputusan adalah suatu sistem informasi yang mempunyai tujuan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur. Sistem Pendukung Keputusan memiliki fasilitas untuk menghasilkan alternatif yang secara interaktif dapat digunakan oleh pengguna.</p>
  </div>
</div>
<div class="card mt-3">
  <div class="card-body">
    <h5>Metode Weigthed Product</h5>
    <p>Metode Weighted Product (WP) adalah salah satu metode penyelesaian pada Sistem Pendukung Keputusan. Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan atribut atau kriteria, dimana setiap atribut tidak bergantung satu dengan yang lainnya. (Ferry Susanto, 2020).</p>
    <p>Berikut ini adalah langkah-langkah yang dilakukan dalam penyelesaian masalah menggunakan metode Weighted Product, yaitu: </p>
    <ul>
      <li>Menentukan kriteria.</li>
      <li>Menentukan ranting kecocokan setiap kriteria.</li>
      <li>Normalisasi atau Perbaikan bobot.</li>
      <li>Menentukan nilai vektor S.</li>
      <li>Menentukan nilai vektor V.</li>
    </ul>
  </div>
</div>

@endsection