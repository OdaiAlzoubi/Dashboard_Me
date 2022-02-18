@extends('layouts.layout')


@section('title', 'Show Video')
@section('PageName', 'Shoe Video')

@section('content')


    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Video</h6>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('report.notification') }}" class="btn btn-secondary" aria-current="page">Back</a>
            </div>
        </div>
    </div>
    {{--  --}}
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
                        <th scope="col">Action</th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <th scope="row">
                        </th>
                        <td>
                            <h6 class="card-title container">{{ $video->name }}</h6>
                        </td>
                        <td>
                            <iframe width="70" height="70" src="https://www.youtube-nocookie.com/embed/{{ $video->url }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </td>
                        <td>
                            <h6 class="card-title container">{{ $video->video_order }}</h6>
                        </td>
                        <td>
                            <h6 class="card-title container">{{ $video->course->name }}</h6>
                        </td>
                        <td>
                            {{--  --}}
                            <div class="btn-group">


                                <a href="{{ route('video.edit', $video->id) }}" class="btn btn-success">Edit</a>
                                {{-- <form action="{{ route('video.delete', $video->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> --}}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>




        </div>
    </div>




@endsection
