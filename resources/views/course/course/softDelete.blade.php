@extends('layouts.layout')


@section('title', 'Soft Delete Courses')
@section('PageName', 'Soft Delete Courses')

@section('content')




    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <h6>Authors table

            <div>
                <a href="{{ route('Course.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
            </div>

        </h6>
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
                        <th scope="col">Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <img src="{{ asset('image/course/' . $course->image) }}" class="border-radius-lg shadow " alt="..."
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
                            <td>
                                {{--  --}}
                                <div class="btn-group gap-1">

                                    {{-- <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary"
                                            aria-current="page">Show</a> --}}
                                    <a href="{{ route('course.back.soft.delete', $course->id) }}"
                                        class="btn btn-success">Back</a>
                                    <form action="{{ route('course.delete', $course->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
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
