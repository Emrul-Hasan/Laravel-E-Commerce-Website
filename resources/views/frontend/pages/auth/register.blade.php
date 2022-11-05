@extends('frontend.layouts.master')

@section('frontendtitle') Register Page @endsection

@section('frontend_content')
   @include('frontend.layouts.inc.breadcrumb', ['pagename' => 'Register'])
<div class="account-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="account-form form-style">
                        <p>User Name <span class="text-danger">*</span></p>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p>User Phone <span class="text-danger">*</span></p>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p>User Email Address <span class="text-danger">*</span></p>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p>Password <span class="text-danger">*</span></p>
                        <input type="Password" name="password" class="form-control @error('email') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p>Confirm Password <span class="text-danger">*</span></p>
                        <input type="Password" name="password_confirmation" class="form-control @error('email') is-invalid @enderror">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="submit" class="btn btn-danger">Register</button>
                        <div class="text-center">
                            <a href="{{ route('login.page') }}">Or Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
