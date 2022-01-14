{{-- Message --}}
@if (Session::has('success'))
    <div class="alert  alert-dismissible" role="alert" style="background-color: #6fd674; color: black">
        <button type="button" class="btn-close" style="font-size: 20px;" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
@endif
