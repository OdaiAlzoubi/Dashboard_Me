@extends('layouts.layout')

@section('title', 'Category Product')
@section('PageName', 'Soft Deleted Category Product')

@section('category')


    {{-- Alert Messages --}}
    @include('common.alert')


    <div class="card-header pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6>Authors table</h6>
            </div>

            <div class="col-6 text-end">
                <a href="{{ route('categoryProduct.index') }}" class="btn btn-secondary" aria-current="page">Back</a>
            </div>
        </div>
    </div>

    <div class="p-1"></div>




    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($categories as $category)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('image/category/' . $category->image) }}" alt="{{ $category->name }}"
                        class="bd-placeholder-img card-img-top" width="100%" height="250" focusable="false">
                    <div class="card-body pt-0 p-3 text-center">
                        <h4 class="text-center mb-0 card-text">{{ $category->name }}</h4>
                        <span class="text-xs"></span>
                        <hr class="horizontal dark my-3">
                        {{-- Btn Group --}}
                        <div class="btn-group gap-1">
                            <a href="{{ route('categoryProduct.edit', $category->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <i class="fas fa-edit" style="color: #198754 ; font-size: 30px; margin-left: -14px;"></i>
                            </a>
                            <a href="{{ route('categoryProduct.get.product.by.category', $category->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Show Products">
                                <i class="fas fa-eye" style="color: #0dcaf0 ; font-size: 30px; margin-left: -18px;"></i>
                            </a>

                            <a href="{{ route('categoryProduct.back.soft.delete', $category->id) }}" class="btn btn-link" style="width: 0px; height: 0px;"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Back Soft Delete">
                                <i class="fas fa-undo" style=" font-size: 25px; margin-left: -14px;"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <div class="p-1"></div>
    {{ $categories->links() }}
@endsection
