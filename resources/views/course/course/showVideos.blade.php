@extends('layouts.layout')

@section('PageName', 'Show Videos Course')

@section('content')


    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Category Course</h6>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('Course.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
                <a href="{{ route('video.create') }}" class="btn btn-primary">Add video to Course</a>
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
                        <th scope="col">Video</th>
                        <th scope="col">video Order</th>
                        <th scope="col">Course</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <h6 class="card-title container">{{ $video->name }}</h6>
                            </td>
                            <td>

                                <iframe width="70" height="70"
                                    src="https://www.youtube-nocookie.com/embed/{{ $video->url }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $video->video_Order }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $video->course->name }}</h6>
                            </td>
                            <td class="text-center">
                                {{--  --}}
                                <div class="btn-group gap-1">

                                    {{-- <a href="{{ route('video.show', $video->id) }}" class="btn btn-primary"
                                        aria-current="page">Show</a> --}}
                                    <a href="{{ route('video.edit', $video->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <i class="fas fa-edit" style="color: #198754 ; font-size: 25px; margin-left: -14px;"></i>
                                    </a>
                                    <form action="{{ route('video.delete', $video->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link"style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
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




    {{-- {{ $videos->links() }} --}}
@endsection
