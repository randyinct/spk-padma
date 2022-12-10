@extends('dashboard.layouts.main')

@section('title') {{ "Edit Password" }} @endsection

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
    <h1 class="h2">Change Your Password</h1>
</div>
@if(session()->has('success'))
 <div class="alert alert-success" role="alert">
       {{ session('success') }}
   </div>
@endif
<form method="POST" action="{{ route('passwordUpdate') }}">
    @method('PUT')
    @csrf
    <div class="col-md-5">    
        <div class="mb-3">
            <label for="nama" class="form-label">Current Password</label>
            <input
                type="password"
                class="form-control @error('current_password') is-invalid @enderror"
                id="current_password"
                name="current_password"
                required="required">
                @error('current_password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">New Password</label>
            <input
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password"
                name="password"
                required="required">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="">
            <label for="nama" class="form-label">Confirm New Password</label>
            <input
                type="password"
                class="form-control @error('password_confirmation') is-invalid @enderror"
                id="password_confirmation"
                name="password_confirmation"
                required="required">
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
    </div>
    
            <button type="submit" class="btn btn-primary mt-4">Update Password</button>
            <a href="{{ route('dashboard') }}" class="btn btn-danger mt-4">Cancel</a>
        </form>
@endsection
 