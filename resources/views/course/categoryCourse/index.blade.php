@extends('layouts.layout')

@section('title', 'Category Course')
@section('PageName', 'Category Course')

@section('category')





    {{-- Alert Messages --}}
    @include('common.alert')


    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Category Course</h6>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('categoryCourse.create') }}" class="btn btn-primary">Add Category Course</a>
            </div>
        </div>
    </div>

    <div class="p-1"></div>
    {{-- <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">

            <table class="table align-items-center mb-0r">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <img src="{{ asset('image/category/' . $category->image) }}" class="rounded"
                                    alt="..." width="70px" height="70px">
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $category->name }}</h6>
                            </td>
                            <td class="text-end">

                                <div class="btn-group gap-1">

                                    <a href="{{ route('categoryCourse.edit', $category->id) }}" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('categoryCourse.delete', $category->id) }}" method="post">
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
                                    <a href="{{ route('categoryCourse.get.courses.by.category', $category->id) }}"
                                        class="btn btn-primary"> Show Courses</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>




        </div>
    </div> --}}


    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($categories as $category)
            <div class="col">
                <div class="card shadow-sm">
                    {{-- <div class="card-header mx-4 p-3 text-center">
                <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fas fa-landmark opacity-10"></i>
                </div>
            </div> --}}
                    <img src="{{ asset('image/category/' . $category->image) }}" alt="{{ $category->name }}"
                        class="bd-placeholder-img card-img-top " width="100%" height="250" focusable="false">
                    <div class="card-body pt-0 p-3 text-center">
                        <h4 class="text-center mb-0 card-text">{{ $category->name }}</h4>
                        <span class="text-xs"></span>
                        <hr class="horizontal dark my-3">
                        {{-- Btn-Group --}}
                        <div class="btn-group gap-1">
                            <a href="{{ route('categoryCourse.get.courses.by.category', $category->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Show Courses">
                                <i class="fas fa-eye" style="color: #0dcaf0 ; font-size: 30px; margin-left: -18px;"></i>
                            </a>

                            <a href="{{ route('categoryCourse.edit', $category->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="fas fa-edit" style="color: #198754 ; font-size: 30px; margin-left: -14px;"></i>
                            </a>
                            <form action="{{ route('categoryCourse.delete', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link" style="width: 0px; height: 0px;"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <i class="fas fa-trash" style="color: red ; font-size: 30px; margin-left: -14px;" >&#xE872;</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="col">
        <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
            </svg>

            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="p-1"></div>
    {{ $categories->links() }}
@endsection
