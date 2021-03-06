@extends('layouts.layout')

@section('title', 'Product')
@section('PageName', 'Product')

@section('content')





    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Authors table</h6>
            </div>
            {{-- Soft Delete --}}
            <div class="col-6 text-end">
                <a href="{{ route('categoryProduct.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
                <a href="{{ route('product.soft.delete.show') }}" class="btn btn-primary" aria-current="page">Soft Delete</a>
            </div>
        </div>
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
                        <th scope="col" class="text-center">Action</th>
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
                            <td class="text-center">
                                {{--  --}}
                                <div class="btn-group gap-1">

                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                        <i class="fas fa-eye" style="color: #0dcaf0 ; font-size: 25px; margin-left: -18px;"></i>
                                    </a>
                                    <form action="{{ route('product.soft.delete', $product->id) }}" method="post">
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




    {{ $products->links() }}
@endsection
