@extends('layouts.layout')

@section('PageName', 'Admin Show')

@section('content')



    <!--  -->
    <div class="col-lg-7 mb-lg-0 mb-4" style="min-width: -webkit-fill-available;">

        <div class="card" style="min-width: fit-content;">
            <div class="card-body p-3">

                <a href="{{ route('admin.profile') }}" class="btn btn-secondary" aria-current="page">Back</a>

                <a href="{{ route('admin.soft.delete.show') }}" class="btn btn-info" aria-current="page">Soft
                    Delete</a>


                <table class="table table-hover container">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">permission</th>

                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>

                                <th scope="row">
                                    <p>{{ ++$count }}</p>
                                </th>
                                <td>
                                    <img src="{{ asset('image/admin/' . $admin->image) }}" class="card-img-top" alt="..."
                                        width="50px" height="50px">
                                </td>
                                <td>
                                    <h5 class="card-title">{{ $admin->F_name . ' ' . $admin->L_name }}</h5>
                                </td>
                                <td>
                                    <p class="card-title">{{ $admin->name }}</p>
                                </td>


                                <td>
                                    <p class="card-title">{{ $admin->email }}</p>
                                </td>
                                <td>
                                    <p class="card-title">{{ $admin->phone }}</p>
                                </td>
                                <td>
                                    <p class="card-title">
                                        @if ($admin->role == 1)
                                            {{ 'Admin' }}
                                        @elseif ($admin->role == 2)
                                            {{ 'Manager' }}
                                        @endif
                                        {{-- {{ $admin->role }} --}}

                                    </p>
                                </td>
                                <td>
                                    {{--  --}}
                                    <div class="btn-group">
                                        @if (Auth::user()->role === 0)
                                        <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-info">Edit</a>
                                        @endif
                                        <form action="{{ route('admin.soft.delete', $admin->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Soft Delete</button>
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
