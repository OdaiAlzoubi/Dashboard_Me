@extends('layouts.layout')

@section('PageName', 'User Show')

@section('content')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Video</h6>
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
                        <th scope="col">Description</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <th scope="row">
                            <p>1</p>
                        </th>
                        <td>
                            <h6 class="card-title container">{{ $user->f_name . ' ' . $user->l_name }}</h6>
                        </td>
                        <td>
                            <div class="avatar  me-3">
                                <img src="{{ asset('image/user/' . $user->image) }}" alt="kal" width="70px" height="50px"
                                    class="border-radius-lg shadow ">
                            </div>
                        </td>
                        <td>
                            <p class="card-title container">{{ $user->gender }}</p>
                        </td>
                        <td>
                            <p class="card-title container">{{ $user->description }}</p>
                        </td>
                        <td>
                            <p class="card-title container">{{ $user->phone }}</p>
                        </td>
                        <td>
                            {{--  --}}
                            <div class="btn-group">
                                @if ($user->deleted_at === 0)
                                    <form action="{{ route('user.soft.delete', $user->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Soft Delete</button>
                                    </form>
                                @else
                                    <form action="{{ route('user.back.soft.delete', $user->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Back Soft Delete</button>
                                    </form>
                                @endif

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>




        </div>
    </div>




@endsection
