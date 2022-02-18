@extends('layouts.layout')

@section('title', 'Notification')
@section('PageName', 'Notification')

@section('content')






    <div class="btn-group container gap-4">

        <a href="{{ route('user.add.notification') }}" class="btn btn-success" aria-current="page">User</a>
        <a href="{{ route('product.add.notification') }}" class="btn btn-success">Product</a>
        <a href="{{ route('report.notification') }}" class="btn btn-success">Report Video</a>

    </div>

    <div>

    </div>




@endsection
