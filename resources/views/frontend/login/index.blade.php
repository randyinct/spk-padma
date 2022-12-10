@extends('frontend.layouts.main')

@section('container')



<div class="row justify-content-center">
    <div class="col-md-5 mb-5">
        <div class="card-body shadow">
            <form method="POST" action="{{ route('authenticate') }}">
                @csrf
              <img class="mb-4 img-fluid" src="/img/logopadma.png" alt="" width="500">
                    @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
              <h4 class="h4 mb-3 fw-bold lh-1 text-small">Please login</h4>
                    <hr>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus required>
                <label for="username" value="{{ @old('username') }}">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Login</button>
            </form>
            
        </div>
    </div>
</div>

    
@endsection