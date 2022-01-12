@extends('layouts.layout')

@section('title', 'Product')
@section('PageName', 'Product')

@section('content')








    <div class="" >
        <div class="row d-flex ">
            <div class="">
                <div class="card">
                    <div class="row">
                        {{-- Images --}}
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4">
                                    <img id="main-image" src="{{ asset('image/product/' . $product->image) }}"
                                        width="250" />
                                </div>
                                <div class="thumbnail text-center">
                                    <img onclick="change_image(this)"
                                        src="{{ asset('image/product/' . $product->image) }}" width="70">
                                    @foreach ($images as $image)
                                        <img onclick="change_image(this)"
                                            src="{{ asset('image/product/' . $image->image) }}" width="70">
                                    @endforeach
                                </div>
                            </div>
                            <div class="p3">
                                <div>
                                    <div class="card-header pb-0 p-3">
                                        <div class="row">
                                            <div class="col-md-8 d-flex align-items-center">
                                                <h5 class="mb-0">Product Information</h5>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        {{-- <hr class="horizontal gray-light my-4"> --}}
                                        <ul class="list-group">
                                            <div class="row g-2">
                                                <div class="col-md" >
                                                    <li class="list-group-item border-0 ps-0 text-sm ">
                                                        <strong class="text-dark">Description:</strong> &nbsp; <p style="max-height: 220px; max-width: 200px;" class="overflow-auto">{{$product->description}}</p>
                                                    </li>
                                                </div>

                                                <div class="col-md">
                                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                                        <strong class="text-dark">Name:</strong> &nbsp; {{$product->name}}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Price:</strong>&nbsp; {{$product->price}}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Size:</strong> &nbsp; {{$product->size}}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Category :</strong>&nbsp; {{$product->categoryProduct->name}}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">User:</strong> &nbsp; {{$product->user->f_name . ' '. $product->user->l_name}}
                                                    </li>
                                                </div>

                                            </div>
                                            {{-- <div class="row g-2">
                                                <div class="col-md">
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Price:</strong>&nbsp; {{$product->price}}
                                                    </li>
                                                </div>
                                                <div class="col-md">
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Size:</strong> &nbsp; {{$product->size}}
                                                    </li>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="row g-2">
                                                <div class="col-md">
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Category :</strong>&nbsp; {{$product->categoryProduct->name}}
                                                    </li>
                                                </div>
                                                <div class="col-md">
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">User:</strong> &nbsp; {{$product->user->f_name . ' '. $product->user->l_name}}
                                                    </li>
                                                </div>
                                            </div> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class=" p-4 ">
                                <div class="d-flex justify-content-between align-items-center" >
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('product.index')}}"><i class="fa fa-long-arrow-left"></i>
                                        <span class="ml-1">Back</span>
                                    </a>
                                    </div>
                                </div>

                                {{-- Commants --}}

                                <div class="overflow-auto" style="max-height: 600px;overflow-y: " data-bs-offset="0" tabindex="0" data-bs-spy="scroll">
                                    <div class="container mt-5 " >
                                        <div class="row d-flex justify-content-center ">
                                            <div class="" >
                                                <div class="height-100  d-flex  align-items-center">
                                                    <div class=" p-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="ratings">
                                                                @php
                                                                    $rating = $rate->avg('rating');
                                                                @endphp
                                                                @foreach (range(1,5) as $num)
                                                                    @if ($rating >= $num)
                                                                    <i class="fa fa-star rating-color text-warning"></i>
                                                                    @else
                                                                    <i class="fa fa-star"></i>
                                                                    @endif
                                                                @endforeach

                                                            </div>
                                                            <h5 class="review-count ps-2">{{$rate->count('rating')}} Reviews</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="headings d-flex justify-content-between align-items-center mb-3">
                                                    <h5>Comments({{$rate->count()}})</h5>
                                                </div>
                                                @foreach ($rate as $commant)

                                                <div class="card p-3 mt-2 overflow-auto " >
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center">
                                                            <img
                                                                src="{{$commant->user->image}}" width="30"
                                                                class="user-img rounded-circle mr-2">
                                                                <span>
                                                                    <small class="font-weight-bold text-primary">{{$commant->user->f_name . ' '. $commant->user->l_name}}</small>
                                                                    <small class="font-weight-bold">{{$commant->comment	}}</small>
                                                                </span>
                                                        </div>
                                                        {{-- <small>2 days ago</small> --}}
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4">
                                                            <small>Remove</small>
                                                            <span class="dots"></span>
                                                                <small>Reply</small> <span class="dots"></span>
                                                                <small>Translate</small>
                                                        </div>
                                                        {{-- <div class="icons align-items-center"> <i
                                                                class="fa fa-star text-warning"></i> <i
                                                                class="fa fa-check-circle-o check-icon"></i>
                                                        </div> --}}
                                                    </div>
                                                </div>

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script>
        function change_image(image) {

            var container = document.getElementById("main-image");

            container.src = image.src;
        }

        document.addEventListener("DOMContentLoaded", function(event) {});
    </script>












@endsection
