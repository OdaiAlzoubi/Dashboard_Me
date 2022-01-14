@extends('layouts.layout')

@section('PageName', 'Notification User')
@section('title', 'User')

@section('content')


    {{-- Alert Messages --}}
    @include('common.alert')

    <div class="btn-group container gap-4 pt-3">

        <a href="{{ route('user.add.notification') }}" class="btn btn-primary" aria-current="page">User Notification</a>
        <a href="{{ route('product.add.notification') }}" class="btn btn-success">Product Notification</a>
        <a href="{{ route('report.notification') }}" class="btn btn-success">Report Video Notification</a>

    </div>

    <div class="card-header pb-0 pt-2">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>User Notification</h6>
            </div>
            {{-- Soft Delete --}}
            <div class="col-6 text-end">
                {{-- <a href="{{ route('course.soft.delete.show') }}" class="btn btn-info" aria-current="page">Soft
                Delete</a> --}}
            </div>
        </div>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">

            <table class="table align-items-center mb-0r">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <h6 class="card-title">{{ $user->f_name . ' ' . $user->l_name }}</h6>
                            </td>
                            <td>
                                <img src="{{ asset('image/user/' . $user->image) }}" class="border-radius-lg shadow"
                                    alt="" width="70px" height="70px">
                            </td>
                            <td>
                                <h6 class="card-title">{{ $user->gender }}</h6>
                            </td>
                            <td>
                                {{--  --}}
                                <div class="btn-group gap-1">
                                    <a href="{{ route('user.acceptance.notification', $user->id) }}"
                                        class="btn btn-primary" aria-current="page">Acceptance</a>
                                    <a href="{{ route('user.refused.notification', $user->id) }}"
                                        class="btn btn-danger">Refused</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>




        </div>
    </div>




    {{ $users->links() }}
@endsection
