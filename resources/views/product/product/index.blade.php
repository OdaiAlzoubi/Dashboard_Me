@extends('layouts.layout')

@section('title', 'Product')
@section('PageName', 'Product')

@section('content')


    <!--  -->


    {{-- Alert Messages --}}
    @include('common.alert')



    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Authors table</h6>
            </div>
            {{-- Soft Delete --}}
            <div class="col-6 text-end">

                <select class="form-select pt-3" name="filter_product" id="filter_product" style="width: 28%; display: inline;">
                    <option value="{{ route('product.index') }}">All</option>
                    @foreach ($categories as $value)
                        @if ($value->id == request()->id)
                            <option selected value="{{ route('product.index', ['id' => $value->id]) }}">
                                {{ $value->name }}
                            </option>
                        @else
                            <option value="{{ route('product.index', ['id' => $value->id]) }}">{{ $value->name }}
                            </option>
                        @endif
                    @endforeach
                </select>


                <a href="{{ route('product.soft.delete.show') }}" class="btn btn-info" aria-current="page">Soft
                    Delete</a>
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
                        {{-- <th scope="col">Description</th> --}}
                        <th scope="col">Category</th>
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
                                <h6 class="card-title container">
                                    {{ $product->user->f_name . ' ' . $product->user->l_name }}</h6>
                            </td>
                            <td>
                                <img src="{{ asset('image/product/' . $product->image) }}" class="border-radius-lg shadow" alt=""
                                    width="70px" height="70px">
                            </td>
                            <td>
                                <h6 class="card-title container">{{ $product->name }}</h6>
                            </td>
                            {{-- <td>
                                <h6 class="card-title container">{{ $product->description }}</h6>
                            </td> --}}
                            <td>
                                <h6 class="card-title container">{{ $product->categoryProduct->name }}</h6>
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
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Soft Delete">
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


    <script>
        $(document).ready(function() {
            $('#filter_product').change(function() {
                window.location.href = this.value;

            });

        });
    </script>

    {{ $products->links() }}
@endsection
