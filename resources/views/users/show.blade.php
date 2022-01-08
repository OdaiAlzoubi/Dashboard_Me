@extends('layouts.layout')

@section('PageName', 'User Show')

@section('content')



    <!--  -->
    <div class="col-lg-7 mb-lg-0 mb-4" style="min-width: -webkit-fill-available;">

        <div class="card" style="min-width: fit-content;">
            <div class="card-body p-3">

                <a href="{{ route('user.index') }}" class="btn btn-secondary" aria-current="page">Back</a>


                <table class="table table-hover container">
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
                                    <img src="{{ asset('image/user/' . $user->image) }}" alt="kal" class="border-radius-lg shadow ">
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
    </div>



@endsection
