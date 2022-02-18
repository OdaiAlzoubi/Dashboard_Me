@extends('layouts.layout')

@section('title', 'Show Courses, Category Course')
@section('PageName', 'Show Courses, Category Course')

@section('content')







    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Show Courses , {{$category->name}}</h6>
            </div>


            {{-- Soft Delete --}}
            <div class="col-6 text-end">
                <a href="{{ route('categoryCourse.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
                <a href="{{ route('course.create', ['id'=> $id]) }}" class="btn btn-primary">Add Course</a>
                {{-- <a href="{{ route('course.soft.delete.show') }}" class="btn btn-info"
                    aria-current="page">Soft Delete</a> --}}
            </div>
        </div>
    </div>

    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">


            {{--  --}}

            <table class="table align-items-center mb-0r">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Presenter</th>
                        <th scope="col" class="text-center">Description</th>
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
                                <p class="card-title container">{{ $course->name }}</p>
                            </td>
                            <td>
                                <p class="card-title container">{{ $course->presenter }}</p>
                            </td>
                            <td  style=" " dir="rtl" lang="ar">
                                <textarea class="card-text container" style="border-style:none;  height: auto; overflow: hidden;">{{ $course->description }}</textarea>
                            </td>
                            <td>
                                <p class="card-text container">{{ $course->categoryCourse->name }}</p>
                            </td>
                            <td class="text-center">
                                <div class="btn-group gap-1">
                                    <a href="{{ route('course.get.video.by.course', $course->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Show Videos">
                                        <i class="fas fa-eye" style="color: #0dcaf0 ; font-size: 25px; margin-left: -18px;"></i>
                                    </a>
                                    @php
                                        $check = true;
                                    @endphp
                                    <a href="{{ route('course.edit',[ $course->id , 'check'=>$check]) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <i class="fas fa-edit" style="color: #198754 ; font-size: 25px; margin-left: -14px;"></i>
                                    </a>

                                    <form action="{{ route('course.soft.delete', $course->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link"style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Soft Delete">
                                        <i class="fas fa-trash" style="color: red ; font-size: 25px; margin-left: -14px;" >&#xE872;</i>
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



    {{-- {{ $courses->links() }} --}}
@endsection
