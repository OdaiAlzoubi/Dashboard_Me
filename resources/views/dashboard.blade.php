@extends('layouts.layout')

@section('title', 'Dashboard')
@section('PageName', 'Dashboard')


@section('dashboard')


    {{-- Statistics --}}
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold"> Last 28 days Product </p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $productCountDate }}
                                    {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Last 28 days Users</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $userCountDate }}
                                    {{-- <span class="text-success text-sm font-weight-bolder">+3%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Last 28 Join Courses</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $joinCoursesCountDate }}
                                    {{-- <span class="text-danger text-sm font-weight-bolder">-2%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                                <h5 class="font-weight-bolder mb-0">
                                    $103,430
                                    {{-- <span class="text-success text-sm font-weight-bolder">+5%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Statistics --}}
    {{-- Table --}}
    <div class="row mt-4">
        {{-- Product --}}
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6>Product</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{ route('product.index') }}" class="btn btn-info float-md-end">
                                See All
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $count = 0;
                                @endphp
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">
                                            <p>{{ ++$count }}</p>
                                        </th>
                                        <td >
                                            <h6 class="card-title ">
                                                {{ $product->user->f_name . ' ' . $product->user->l_name }}</h6>
                                        </td>
                                        <td>
                                            <img src="{{ asset('image/product/' . $product->image) }}"
                                                class="border-radius-lg shadow" alt="" width="70px" height="70px">
                                        </td>
                                        <td class="text-center">
                                            <h6 class="card-title container">{{ $product->name }}</h6>
                                        </td>
                                        <td style="max-width: 1px " dir="rtl" lang="ar">
                                            <div class="overflow-auto ">

                                                <h6 class="card-title ">{{ $product->description }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="card-title ">{{ $product->categoryProduct->name }}</h6>
                                        </td>
                                        <td class="text-center">
                                            {{--  --}}
                                            <div class="btn-group gap-1">

                                                {{-- <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary"
                                                    aria-current="page">Show</a> --}}
                                                <form action="{{ route('product.soft.delete', $product->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-link" style="width: 0px; height: 0px;"
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
            </div>
        </div>

        {{-- Users --}}
        <div class="col-lg-4 col-md-6">
            <div class="card " style="height: 95.5%">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6>User</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{ route('user.index') }}" class="btn btn-info float-md-end">
                                See All
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        @foreach ($userRandom as $user)
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="avatar  me-3">
                                    <img src="{{ asset('image/user/' . $user->image) }}" alt="kal"
                                        class="border-radius-lg shadow ">
                                </div>
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="card-title">{{ $user->f_name . ' ' . $user->l_name }}</h6>
                                    <p class="mb-0 text-xs">Hi! I need more information..</p>
                                </div>
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-link pe-3 ps-0 mb-0 ms-auto">
                                    <i class="fas fa-eye" style="color: #0dcaf0 ; font-size: 25px; margin-left: -18px;"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>








    {{-- graphical --}}
    <div class="row mt-4">
        {{-- User --}}
        <div class="col-lg-6">
            <div class="card z-index-2">
                {{-- <div class="card-header pb-0">
                    <h6>Highcharts in Laravel 8 Example</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">4% more</span> in 2021
                    </p>
                </div> --}}
                <div class="card-body p-3">
                    <div class="chart">
                        <div id="container" class="chart-canvas" height="300"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Product --}}
        <div class="col-lg-6">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="chart">
                        <div id="container1" class="chart-canvas" height="300"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    {{-- User --}}
    <script type="text/javascript">
        var userData =
            @php
            echo json_encode($userData);
            @endphp;

        Highcharts.chart('container', {
            title: {
                text: 'New User Growth, 2022'
            },
            subtitle: {
                text: 'Source: positronx.io'
            },
            xAxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ]
            },
            yAxis: {
                title: {
                    text: 'Number of New Users'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New Users',
                data: userData
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
    {{-- Product --}}
    <script type="text/javascript">
        var userData =
            @php
            echo json_encode($productData);
            @endphp;

        Highcharts.chart('container1', {
            title: {
                text: 'New Product Growth, 2022'
            },
            subtitle: {
                // text: 'Source: positronx.io'
            },
            xAxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ]
            },
            yAxis: {
                title: {
                    text: 'Number of New Products'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New Products',
                data: userData
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>


@endsection
