@extends('dashboard.layouts.main')

@section('title') {{ "Edit Profile" }} @endsection

@section('container')

<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
    <h1 class="h2">Change Your Profile Information</h1>
</div>

<div class="row g-3">
    <div class="col-md-5">

        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('editProfile') }}" method="POST">
            @csrf @method('put')

            <div class="">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control  @error('name') is-invalid @enderror"
                    id="name"
                    name="name"
                    placeholder="Full name"
                    value="{{ auth()->user()->name }}"
                    required="required">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input
                            type="text"
                            class="form-control @error('username') is-invalid @enderror"
                            id="username"
                            name="username"
                            placeholder="Username"
                            value="{{ auth()->user()->username }}"
                            required="required">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                value="{{ auth()->user()->email }}"
                                placeholder="you@example.com">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Update Profile</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger mt-4">Cancel</a>
                    </form>
@endsection