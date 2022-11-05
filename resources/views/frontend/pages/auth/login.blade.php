@extends('frontend.layouts.master')

@section('frontendtitle') Login Page @endsection

@section('frontend_content')
   @include('frontend.layouts.inc.breadcrumb', ['pagename' => 'Login'])
   <div class="account-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <form action="{{ route('login.store') }}" method="post">
                    @csrf
                    <div class="account-form form-style">
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
                        <button type="submit" class="btn btn-danger">SIGN IN</button>
                        <div class="text-center">
                            <a href="{{ route('register.page') }}">Or Creat an Account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
