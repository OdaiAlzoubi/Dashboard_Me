@extends('layouts.layout')

@section('PageName', 'Notification Report Video')
@section('title', 'Report Video')

@section('content')

    {{-- Alert Messages --}}
    @include('common.alert')

    <div class="btn-group container gap-4 pt-3">

        <a href="{{ route('user.add.notification') }}" class="btn btn-primary" aria-current="page">User Notification</a>
        <a href="{{ route('product.add.notification') }}" class="btn btn-success">Product Notification</a>
        <a href="{{ route('report.notification') }}" class="btn btn-success">Report Video Notification</a>

    </div>

    <div class="card-header pb-0 pt-2">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Report Video Notification</h6>
            </div>
        </div>
    </div>


    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">

            <table class="table align-items-center mb-0r">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Course</th>
                        <th scope="col">Video</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($reportVideo as $reportVideo)
                        <tr>
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <h6 class="card-title">{{ $reportVideo->user->name }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title">{{ $reportVideo->video->course->name }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title">{{ $reportVideo->user->name }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title">{{ $reportVideo->message }}</h6>
                            </td>
                            <td>
                                <div class="btn-group gap-1">

                                    <a href="{{ route('video.show', $reportVideo->video->id) }}" class="btn btn-primary"
                                        aria-current="page">Show Video</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>




        </div>
    </div>




    {{-- {{ $reportVideo->links() }} --}}
@endsection
