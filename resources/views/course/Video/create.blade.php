@extends('layouts.layout')

@section('title', 'Create Video')
@section('PageName', 'Create Video')

@section('content')



    {{-- Alert Messages --}}
    @include('common.alert')


    <div class="">
        <div class="">
            <div class="">

                <form action="{{ route('video.store', ['check' => $check]) }}" method="post" enctype="multipart/form-data"
                    class="container mt-5">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus
                            value="{{ old('name') }}">
                        <label for="floatingInput">Video Name</label>
                        {{-- Error --}}
                        @include('common.error', [$name='name'])
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                            value="{{ old('url') }}">
                        <label for="floatingInput">Video URL</label>
                        {{-- Error --}}
                        @include('common.error', [$name='url'])
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('video_Order') is-invalid @enderror" name="video_Order"
                            value="{{ old('video_Order') }}">
                        <label for="floatingInput">Video Order</label>
                        {{-- Error --}}
                        @include('common.error', [$name='video_Order'])
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select @error('id_course') is-invalid @enderror"
                            aria-label="Disabled select example" name="id_course">
                            @if ($check)
                                <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                            @else
                                <option value="">Choose Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        {{-- Error --}}
                        @include('common.error', [$name='id_course'])
                    </div>

                    <button type="submit" class="btn btn-primary">Save Video</button>
                    @if ($check)
                    <a href="{{ route('course.get.video.by.course' , $courses->id) }}" class="btn btn-secondary" aria-current="page">Back</a>
                    @else
                    <a href="{{ route('video.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
