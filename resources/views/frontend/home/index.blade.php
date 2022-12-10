@extends('frontend.layouts.main')

@section('container')

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('/img/rec1.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500">
      </div>
      <div class="col-lg-6">
        <h3 class="display-5 fw-bold lh-1 mb-3">Sistem Pendukung Keputusan Perekrutan Pegawai Baru</h3>
        <p class="lead">Sistem Pendukung Keputusan adalah suatu sistem informasi yang mempunyai tujuan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur. Sistem ini memiliki fasilitas untuk menghasilkan alternatif yang secara interaktif diigunakan oleh pengguna.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 me-md-2">Try it now</a>
          {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4 disabled">Default</button> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
