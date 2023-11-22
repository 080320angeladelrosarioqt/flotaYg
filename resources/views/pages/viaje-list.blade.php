@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Viajes'])
<div class="card-body p-3">
    <div class="row gx-4">

        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'ruta']) }} "
                            data-toggle="tooltip" role="tab" aria-selected="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-2">VOLVER</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row">
        @include('pages.vijae-indexlist', ['fecha' => ''])
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
</div>
@endsection
