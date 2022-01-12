@extends('layouts.layout')

@section('PageName', 'Notification Product')
@section('title', 'Product')

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
                <h6>Product Notification</h6>
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
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <p>{{ ++$count }}</p>
                            </td>
                            <td>
                                <h6 class="card-title">{{ $product->user->f_name . ' ' . $product->user->l_name }}
                                </h6>
                            </td>
                            <td>
                                <img src="{{ asset('image/product/' . $product->image) }}" class="border-radius-lg shadow"
                                    alt="..." width="70px" height="70px">
                            </td>
                            <td>
                                <h6 class="card-title">{{ $product->name }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title">{{ $product->description }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title">{{ $product->categoryProduct->name }}</h6>
                            </td>
                            <td>
                                {{--  --}}
                                <div class="btn-group gap-1">
                                    <a href="{{ route('product.acceptance.notification', $product->id) }}"
                                        class="btn btn-primary" aria-current="page">Acceptance</a>
                                    <a href="{{ route('product.refused.notification', $product->id) }}"
                                        class="btn btn-success">Refused</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>




        </div>
    </div>




    {{ $products->links() }}
@endsection
