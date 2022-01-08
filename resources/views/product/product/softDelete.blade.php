@extends('layouts.layout')


@section('title', 'Soft Delete Product')
@section('PageName', 'Soft Delete Product')

@section('content')


    <!--  -->
    <div>

        <a href="{{ route('product.index') }}" class="btn btn-secondary" aria-current="page">Back</a>

    </div>



    {{-- Alert Messages --}}
    @include('common.alert')




    <div class="card-header pb-0">
        <h6>Authors table



        </h6>
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
                            <th scope="row">
                                <p>{{ ++$count }}</p>
                            </th>
                            <td>
                                <h6 class="card-title container">
                                    {{ $product->user->f_name . ' ' . $product->user->l_name }}</h6>
                            </td>
                            <td>
                                <img src="{{ asset('image/product/' . $product->image) }}" class="border-radius-lg shadow" alt="..."
                                    width="70px" height="70px">
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $product->name }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $product->description }}</h6>
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $product->categoryProduct->name }}</h6>
                            </td>
                            <td>
                                {{--  --}}
                                <div class="btn-group">

                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary"
                                        aria-current="page">Show</a>
                                    <a href="{{ route('product.back.soft.delete', $product->id) }}"
                                        class="btn btn-primary" aria-current="page">Back</a>
                                    <form action="{{ route('product.delete', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
