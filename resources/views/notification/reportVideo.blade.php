@extends('layouts.layout')

@section('PageName', 'Notification Rep')

@section('content')



    <!--  -->
    <div class="col-lg-7 mb-lg-0 mb-4" style="min-width: -webkit-fill-available;">

        {{-- Alert Messages --}}
        @include('common.alert')

        <div class="card" style="min-width: fit-content;">
            <div class="card-body p-3">


                {{--  --}}

                <table class="table table-hover container">
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

                                        <a href="{{ route('video.show', $reportVideo->video->id) }}"
                                            class="btn btn-primary" aria-current="page">Show Video</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>




            </div>
        </div>
    </div>



    {{-- {{ $reportVideo->links() }} --}}
@endsection
