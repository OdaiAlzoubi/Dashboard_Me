@extends('layouts.layout')


@section('title', 'Soft Delete Courses')
@section('PageName', 'Soft Delete Courses')

@section('content')




    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Soft Delete Courses</h6>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('Course.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
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
                        <th scope="col">Presenter</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <img src="{{ asset('image/course/' . $course->image) }}" class="border-radius-lg shadow " alt=""
                                    width="70px" height="70px">

                            </td>
                            <td>
                                <p class="card-title">{{ $course->name }}</p>
                            </td>
                            <td>
                                <p class="card-title">{{ $course->presenter }}</p>
                            </td>
                            <td>
                                <p class="card-text">{{ $course->description }}</p>
                            </td>
                            <td>
                                <p class="card-text">{{ $course->categoryCourse->name }}</p>
                            </td>
                            <td class="text-center">
                                {{--  --}}
                                <div class="btn-group gap-1">

                                    {{-- <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary"
                                            aria-current="page">Show</a> --}}
                                    <a href="{{ route('course.back.soft.delete', $course->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Back Soft Delete">
                                        <i class="fas fa-undo" style=" font-size: 25px; margin-left: -14px;"></i>
                                    </a>
                                    <form action="{{ route('course.delete', $course->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link" style="width: 0px; height: 0px;"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <i class="fas fa-trash" style="color: red ; font-size: 30px; margin-left: -14px;" >&#xE872;</i>
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




    {{ $courses->links() }}
@endsection
