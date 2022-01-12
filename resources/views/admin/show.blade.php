@extends('layouts.layout')

@section('PageName', 'Admin Show')

@section('content')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Authors Admins</h6>
            </div>
            <div class="col-6 text-end ">

                <a href="{{ route('admin.profile') }}" class="btn btn-secondary" aria-current="page">Back</a>

                <a href="{{ route('admin.soft.delete.show') }}" class="btn btn-info" aria-current="page">Soft
                    Delete</a>
            </div>
        </div>
    </div>

    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">

            <table class="table align-items-center mb-0r">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        {{-- <th scope="col">User Name</th> --}}
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">permission</th>
                        <th scope="col" class="text-center">Action</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach ($admins as $admin)
                        <tr>

                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <img src="{{ asset('image/admin/' . $admin->image) }}" class="border-radius-lg shadow "
                                alt="" width="70px" height="70px">
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $admin->F_name . ' ' . $admin->L_name }}</h6>
                            </td>


                            <td>
                                <p class="card-title ">{{ $admin->email }}</p>
                            </td>
                            <td>
                                <p class="card-title">{{ $admin->phone }}</p>
                            </td>
                            <td>
                                <p class="card-title container">
                                    @if ($admin->role == 1)
                                        {{ 'Admin' }}
                                    @elseif ($admin->role == 2)
                                        {{ 'Manager' }}
                                    @endif
                                    {{-- {{ $admin->role }} --}}

                                </p>
                            </td>
                            <td class="text-center">
                                {{--  --}}
                                <div class="btn-group">
                                    @if (Auth::user()->role === 0)
                                        <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-link"
                                            style="width: 0px; height: 0px;" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit">
                                            <i class="fas fa-edit"
                                                style="color: #198754 ; font-size: 25px; margin-left: -14px;"></i>
                                        </a>

                                    @endif
                                    <form action="{{ route('admin.soft.delete', $admin->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-link" style="width: 0px; height: 0px;"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Soft Delete">
                                            <i class="fas fa-trash"
                                                style="color: red ; font-size: 25px; margin-left: -14px;">&#xE872;</i>
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
    </div>


@endsection
