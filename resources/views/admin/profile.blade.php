@extends('layouts.layout')

@section('title', 'Profile')
@section('PageName', 'Profile')

@section('profile')


    {{-- <div class="col-lg-7 mb-lg-0 mb-4" style="min-width: -webkit-fill-available;">

        Alert Messages
        @include('common.alert')

        <div class="card" style="min-width: fit-content;">
            <div class="card-body p-3">

                Soft Delete

                <table class="table table-hover container">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Permission</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <th scope="row">
                                <p>1</p>
                            </th>
                            <td>
                                <img src="{{ asset('image/admin/' . $admin->image) }}" class="card-img-top" alt="..."
                                    width="50px" height="50px">
                            </td>
                            <td>
                                <h6 class="card-title">{{ $admin->F_name . ' ' . $admin->L_name }}</h6>
                            </td>

                            <td>
                                <h6 class="card-title">{{ $admin->email }}</h6>
                            </td>
                            <td>
                                <p class="card-title">{{ $admin->phone }}</p>
                            </td>
                            <td>
                                <p class="card-title">
                                    @if ($admin->role == 0)
                                    {{ 'OWNER' }}
                                    @elseif ($admin->role <= 1)
                                    {{ 'Admin' }}
                                @else
                                    {{ 'Manager' }}
                                @endif
                                </p>
                            </td>
                            <td>

                                <div class="btn-group">

                                    <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-success">Edit</a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <div class="btn-group">
                            @if (Auth::user()->role <= 1)
                            <a href="{{route('admin.show')}}" class="btn btn-primary"
                                aria-current="page">Show Other Admin</a>
                        @endif
                    </div>
                        </tr>


                    </tbody>
                </table>




            </div>
        </div>
    </div> --}}

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
                        @elseif ($admin->role <= 1) {{ 'Admin' }} @else {{ 'Manager' }} @endif
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">

            </div>
        </div>
    </div>




    <div class="container-fluid py-4">
        <div class="row">
            {{-- Profile Information --}}
            <div class="col-12 col-xl-8">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="{{ route('admin.edit', $admin->id) }}">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">

                        </p>
                        <hr class="horizontal gray-light my-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                    Name:</strong> &nbsp; {{ $admin->F_name . ' ' . $admin->L_name }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Mobile:</strong> &nbsp; (962) {{ $admin->phone }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Email:</strong>
                                &nbsp; {{ $admin->email }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Gender:</strong> &nbsp; {{$admin->gender}}</li>
                                    {{-- Social
                            <li class="list-group-item border-0 ps-0 pb-0">
                                <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-facebook fa-lg"></i>
                                </a>
                                <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Other Admins --}}
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="{{ route('admin.show') }}" class="btn" style="background-color: #356346; color: white">
                                    Show
                                </a>
                            </div>
                        </div>                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            @foreach ($admins as $admin)
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="{{ asset('image/admin/' . $admin->image) }}" alt="kal" width="70px" height="50px"
                                            class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $admin->F_name . ' ' . $admin->L_name }}</h6>
                                        <p class="mb-0 text-xs">
                                            @if ($admin->role == 0)
                                                {{ 'OWNER' }}
                                        @elseif ($admin->role <= 1) {{ 'Admin' }} @else
                                                {{ 'Manager' }} @endif
                                    </p>
                                </div>
                                {{-- <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a> --}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
