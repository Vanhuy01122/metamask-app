@extends('layouts.auth-master')

@section('content')
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                            <img src="{{asset('assets/admin/images/logos/dark-logo.svg')}}" width="180" alt="">
                        </a>
                        <p class="text-center">Your Social Campaigns</p>
                        <form method="post" action="{{ route('register.perform') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="mb-3">
                                <label for="floatingEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="floatingName" class="form-label">Email Address</label>
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="floatingPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="floatingConfirmPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Sign In</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
