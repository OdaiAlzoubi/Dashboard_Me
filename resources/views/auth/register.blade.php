@extends('layouts.layout')

@section('title', 'Register')
@section('PageName', 'Register')

@section('profile')



    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url({{ asset('./Dashboard/img/curved-images/curved14.jpg') }});">
            <span class="mask bg-gradient-dark opacity-6"></span>

        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Register</h5>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('admin.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-3 col-form-label text-md-right">{{ __('First Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('F_name') is-invalid @enderror" name="F_name"
                                            value="{{ old('F_name') }}" autocomplete="name" autofocus>

                                        @error('F_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('L_name') is-invalid @enderror" name="L_name"
                                            value="{{ old('L_name') }}" autocomplete="name" autofocus>

                                        @error('L_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" autocomplete="phone">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Gender') }}</label>
                                    <div class="col-md-6">
                                        <select id="gender" name="gender"
                                            class="form-select @error('gender') is-invalid @enderror"
                                            aria-label="Disabled select example">
                                            <option value="">Choose Gender</option>
                                            <option value="male" @if (old('gender') == 'male') {{ 'selected' }} @endif>Male</option>
                                            <option value="female" @if (old('gender') == 'female') {{ 'selected' }} @endif>Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="role"
                                        class="col-md-3 col-form-label text-md-right">{{ __('permissions') }}</label>
                                    <div class="col-md-6">
                                        <select id="role" name="role"
                                            class="form-select @error('role') is-invalid @enderror"
                                            aria-label="Disabled select example">
                                            <option value="">Choose Permissions</option>
                                            <option value="1" @if (old('role') == 1) {{ 'selected' }} @endif>Admin</option>
                                            <option value="2" @if (old('role') == 2) {{ 'selected' }} @endif>Manager</option>
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
