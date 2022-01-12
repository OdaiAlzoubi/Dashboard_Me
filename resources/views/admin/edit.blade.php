@extends('layouts.layout')

@section('title', 'Edit profile')
@section('PageName', 'Edit profile')

@section('profile')



    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url({{ asset('./Dashboard/img/curved-images/curved0.jpg') }}); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('image/admin/' . $admin->image) }}" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $admin->F_name . ' ' . $admin->L_name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            @if ($admin->role == 0)
                                {{ 'OWNER' }}
                        @elseif ($admin->role <= 1) {{ 'Admin' }} @else {{ 'Manager' }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">

            </div>
        </div>
    </div>


    {{-- Alert Messages --}}
    @include('common.alert')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Edit Profile</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">

                            <form action="{{ route('admin.update', $admin->id) }}" method="post"
                                enctype="multipart/form-data" class="container mt-5">
                                @csrf
                                @method('PUT')
                                @if ($admin->role == 0)
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control  @error('F_name') is-invalid @enderror"
                                            name="F_name" placeholder="Name" value="{{ $admin->F_name }}">
                                        <label for="floatingInput">First Name</label>
                                        {{-- Error --}}
                                        @include('common.error', [$name='F_name'])
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control  @error('L_name') is-invalid @enderror"
                                            name="L_name" placeholder="Name" value="{{ $admin->L_name }}">
                                        <label for="floatingInput">last Name</label>
                                        {{-- Error --}}
                                        @include('common.error', [$name='L_name'])
                                    </div>
                                @endif
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                        id="floatingInput" name="email" placeholder="example@gmail.com"
                                        value="{{ $admin->email }}">
                                    <label for="floatingInput">Email</label>
                                    {{-- Error --}}
                                    @include('common.error', [$name='email'])
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control  @error('phone') is-invalid @enderror"
                                        id="floatingInput" name="phone" placeholder="07########"
                                        value="{{ $admin->phone }}">
                                    <label for="floatingInput">Phone</label>
                                    {{-- Error --}}
                                    @include('common.error', [$name='phone'])
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control  @error('image') is-invalid @enderror"
                                        id="floatingInput" name="image" placeholder="User image">
                                    <label for="floatingInput">User image</label>
                                    {{-- Error --}}
                                    @include('common.error', [$name='image'])
                                </div>



                                <button type="submit" class="btn btn-primary">Save profile</button>
                                <a href="{{ route('admin.profile') }}" class="btn btn-secondary"
                                    aria-current="page">Back</a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
