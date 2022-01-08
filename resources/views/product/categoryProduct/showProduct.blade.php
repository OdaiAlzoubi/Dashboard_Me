@extends('layouts.layout')

@section('title', 'Product')
@section('PageName', 'Product')

@section('content')





    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <h6>Authors table

            {{-- Soft Delete --}}
            <div>
                <a href="{{ route('categoryProduct.index') }}" class="btn btn-secondary" aria-current="page">Back</a>

                <a href="{{ route('product.soft.delete.show') }}" class="btn btn-primary" aria-current="page">Soft
                    Delete</a>
            </div>

        </h6>
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
                                <img src="{{ asset('image/product/' . $product->image) }}" class="border-radius-lg shadow" alt="..."
                                    width="70px" height="70px">
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $product->name }}</h6>
                            </td>
                            <td>
                                {{--  --}}
                                <div class="btn-group">

                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary"
                                        aria-current="page">Show</a>
                                    <form action="{{ route('product.soft.delete', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
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




    {{ $products->links() }}
@endsection
