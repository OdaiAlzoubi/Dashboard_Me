@extends('layouts.layout')

@section('title', 'User Soft Delete')
@section('PageName', 'User Soft Delete')

@section('content')


    {{-- Alert Messages --}}
    @include('common.alert')

    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>User Soft Delete</h6>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('user.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
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
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <h6 class="card-title container">{{ $user->f_name . ' ' . $user->l_name }}</h6>
                            </td>
                            <td>
                                <img src="{{ asset('image/user/' . $user->image) }}" class="border-radius-lg shadow" alt=""
                                    width="70px" height="70px">
                            </td>
                            <td>
                                <p class="card-title container">{{ $user->gender }}</p>
                            </td>
                            <td class="text-center">
                                {{--  --}}
                                <div class="btn-group">
                                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                        <i class="fas fa-eye" style="color: #0dcaf0 ; font-size: 25px; margin-left: -18px;"></i>
                                    </a>
                                    <form action="{{ route('user.back.soft.delete', $user->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-link" style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Back Soft Delete">
                                            <i class="fas fa-undo" style=" font-size: 25px; margin-left: -14px;"></i>
                                        </button>
                                    </form>

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
