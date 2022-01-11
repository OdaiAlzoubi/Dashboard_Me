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
                        </div>
                        <div class="col-md-6" >
                            <div class=" p-4 ">
                                <div class="d-flex justify-content-between align-items-center" >
                                    <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span
                                            class="ml-1">Back</span> </div>
                                </div>

                                {{-- Test --}}

                                <div class="" >
                                    <div class="container mt-5 " >
                                        <div class="row d-flex justify-content-center ">
                                            <div class="" >
                                                <div class="headings d-flex justify-content-between align-items-center mb-3">
                                                    <h5>Unread comments(6)</h5>
                                                </div>

                                                <div class="card p-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center">
                                                            <img
                                                                src="https://i.imgur.com/hczKIze.jpg" width="30"
                                                                class="user-img rounded-circle mr-2">
                                                                <span><small
                                                                    class="font-weight-bold text-primary">james_olesenn</small>
                                                                <small class="font-weight-bold">Hmm, This poster looks
                                                                    cool</small></span> </div> <small>2 days ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-star text-warning"></i> <i
                                                                class="fa fa-check-circle-o check-icon"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/C4egmYM.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">olan_sams</small>
                                                                <small class="font-weight-bold">Loving your work and
                                                                    profile! </small></span> </div> <small>3 days
                                                            ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/0LKZQYM.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">rashida_jones</small>
                                                                <small class="font-weight-bold">Really cool Which filter are
                                                                    you using? </small></span> </div> <small>3 days
                                                            ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-user-plus text-muted"></i> <i
                                                                class="fa fa-star-o text-muted"></i> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">simona_rnasi</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@macky_lones</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@rashida_jones</small>
                                                                <small class="font-weight-bold">Thanks </small></span>
                                                        </div> <small>3 days ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">simona_rnasi</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@macky_lones</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@rashida_jones</small>
                                                                <small class="font-weight-bold">Thanks </small></span>
                                                        </div> <small>3 days ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">simona_rnasi</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@macky_lones</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@rashida_jones</small>
                                                                <small class="font-weight-bold">Thanks </small></span>
                                                        </div> <small>3 days ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">simona_rnasi</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@macky_lones</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@rashida_jones</small>
                                                                <small class="font-weight-bold">Thanks </small></span>
                                                        </div> <small>3 days ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">simona_rnasi</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@macky_lones</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@rashida_jones</small>
                                                                <small class="font-weight-bold">Thanks </small></span>
                                                        </div> <small>3 days ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="user d-flex flex-row align-items-center"> <img
                                                                src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                                                class="user-img rounded-circle mr-2"> <span><small
                                                                    class="font-weight-bold text-primary">simona_rnasi</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@macky_lones</small>
                                                                <small
                                                                    class="font-weight-bold text-primary">@rashida_jones</small>
                                                                <small class="font-weight-bold">Thanks </small></span>
                                                        </div> <small>3 days ago</small>
                                                    </div>
                                                    <div
                                                        class="action d-flex justify-content-between mt-2 align-items-center">
                                                        <div class="reply px-4"> <small>Remove</small> <span
                                                                class="dots"></span> <small>Reply</small> <span
                                                                class="dots"></span> <small>Translate</small>
                                                        </div>
                                                        <div class="icons align-items-center"> <i
                                                                class="fa fa-check-circle-o check-icon text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>






                                {{-- Coomants --}}
                                {{-- <div class="">
                                    <div class=" " >

                                        <div class="card-body p-3">
                                            <ul class="list-group">
                                                @foreach ($userRandom as $user)
                                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                                        <div class="avatar  me-3">
                                                            <img src="{{ asset('image/product/' . $product->image) }}" alt="kal"
                                                                class="border-radius-lg shadow ">
                                                        </div>
                                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                                            <h6 class="card-title">{{ asset('image/product/' . $product->image) }}</h6>
                                                            <p class="mb-0 text-xs">Hi! I need more information..</p>
                                                        </div>
                                                        <a href="{{ asset('image/product/' . $product->image) }}" class="btn btn-link pe-3 ps-0 mb-0 ms-auto">
                                                            <i class="fas fa-eye" style="color: #0dcaf0 ; font-size: 25px; margin-left: -18px;"></i>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}






                                {{-- <div class="mt-4 mb-3">
                                    <span class="text-uppercase text-muted brand">Orianz</span>
                                    <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                    <div class="price d-flex flex-row align-items-center">
                                        <span class="act-price">$20</span>
                                        <div class="ml-2">
                                            <small class="dis-price">$59</small>
                                            <span>40% OFF</span> </div>
                                    </div>
                                </div>
                                <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your
                                    everyday use, you could pair it with a stylish pair of jeans or trousers complete the
                                    look.</p>
                                <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio"
                                            name="size" value="S" checked> <span>S</span> </label> <label
                                        class="radio"> <input type="radio" name="size" value="M"> <span>M</span>
                                    </label> <label class="radio"> <input type="radio" name="size" value="L">
                                        <span>L</span> </label> <label class="radio"> <input type="radio"
                                            name="size" value="XL"> <span>XL</span> </label> <label class="radio">
                                        <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                                </div>
                                <div class="cart mt-4 align-items-center"> <button
                                        class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i
                                        class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>
                                </div> --}}
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



















    {{-- <div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{ asset('image/product/' . $product->image) }}" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product03.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product06.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product08.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="./img/product01.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product03.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product06.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product08.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">product name goes here</h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="review-link" href="#">10 Review(s) | Add your review</a>
                    </div>
                    <div>
                        <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
                        <span class="product-available">In Stock</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <div class="product-options">
                        <label>
                            Size
                            <select class="input-select">
                                <option value="0">X</option>
                            </select>
                        </label>
                        <label>
                            Color
                            <select class="input-select">
                                <option value="0">Red</option>
                            </select>
                        </label>
                    </div>

                    <div class="add-to-cart">
                        <div class="qty-label">
                            Qty
                            <div class="input-number">
                                <input type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>

                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Category:</li>
                        <li><a href="#">Headphones</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab2">Details</a></li>
                        <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">
                                <!-- Rating -->
                                <div class="col-md-3">
                                    <div id="rating">
                                        <div class="rating-avg">
                                            <span>4.5</span>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div style="width: 80%;"></div>
                                                </div>
                                                <span class="sum">3</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div style="width: 60%;"></div>
                                                </div>
                                                <span class="sum">2</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Rating -->

                                <!-- Reviews -->
                                <div class="col-md-6">
                                    <div id="reviews">
                                        <ul class="reviews">
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="reviews-pagination">
                                            <li class="active">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Reviews -->

                                <!-- Review Form -->
                                <div class="col-md-3">
                                    <div id="review-form">
                                        <form class="review-form">
                                            <input class="input" type="text" placeholder="Your Name">
                                            <input class="input" type="email" placeholder="Your Email">
                                            <textarea class="input" placeholder="Your Review"></textarea>
                                            <div class="input-rating">
                                                <span>Your Rating: </span>
                                                <div class="stars">
                                                    <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                                    <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                                    <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                                    <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                                    <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                                </div>
                                            </div>
                                            <button class="primary-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Review Form -->
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div> --}}




























    {{-- <div class="col-lg-7 mb-lg-0 mb-4" style="min-width: fit-content;">



        @include('common.alert')

        <div class="card">
            <div class="card-body p-3">

                <a href="{{ route('product.index') }}" class="btn btn-secondary" aria-current="page">Back</a>



                <table class="table table-hover container">
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
                        <tr>
                            <th scope="row">
                                <p>{{ $product->id }}</p>
                            </th>
                            <td>
                                <h6 class="card-title container">{{ $product->user->f_name . ' ' . $product->user->l_name }}</h6>
                            </td>
                            <td>
                                <img src="{{ asset('image/product/' . $product->image) }}" class="card-img-top" alt="..."
                                    width="50px" height="50px">
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

                                <div class="btn-group">

                                    @if ($product->deleted_at === 0)

                                        <form action="{{ route('product.soft.delete', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Soft Delete</button>
                                        </form>

                                    @else
                                        <a href="{{ route('product.back.soft.delete', $product->id) }}"
                                            class="btn btn-primary" aria-current="page">Back</a>
                                    @endif

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>




            </div>
        </div>
    </div> --}}


@endsection
