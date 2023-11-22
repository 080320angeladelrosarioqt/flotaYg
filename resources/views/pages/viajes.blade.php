@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Viajes'])
<div class="card-body p-3">
    <div class="row gx-4">

        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link {{  str_contains(request()->url(), 'viaje') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'viaje-new']) }} "
                            data-toggle="tooltip" role="tab" aria-selected="">
                            <i class="ni ni-settings-gear-65"></i>
                            <span class="ms-2">Agregar Viaje</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 pb-lg-5">
    <div class="row mt-7 ">
        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-7 mt-2">
            <div class="card d-flex justify-content-between ">
                <div class="card-body mt-2 p-3">
                    <div class="row">
                        <div class="col-7">

                            <div class="numbers">

                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Viajes</p>
                                <h5 class="font-weight-bolder">
                                    <a class="nav-link {{  str_contains(request()->url(), 'viajes') == false ? 'active' : '' }}" href="{{ route('page', ['page' => 'viaje-list']) }}"
                                        data-toggle="tooltip" data-original-title="Edit user"> Hoy
                                    </a>
                                {{$num= 'HOY';}}

                                </h5>
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">12 de Mayo</p>
                            </div>
                            <div class="border-radius-md text-left me-2 d-flex align-items-left justify-content-left">
                                 <button type="submit" class="btn btn-primary btn-sm">Listar</button>
                             </div>

                        </div>
                        <div class="col-md-5 card-profile d-flex px-1 ">
                            <div class="">
                                <img src="./img/flotayungueña/sc5.jpg" class="card-img-top"
                                    alt="user1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-7 mt-2">
            <div class="card d-flex justify-content-between ">
                <div class="card-body mt-2 p-3">
                    <div class="row">
                        <div class="col-7">

                            <div class="numbers">

                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Viajes</p>
                                <h5 class="font-weight-bolder">
                                    <a class="nav-link {{  str_contains(request()->url(), 'viajes') == false ? 'active' : '' }}" href="{{ route('page', ['page' => 'viaje-list']) }}"
                                        data-toggle="tooltip" data-original-title="Edit user"> Semanal
                                    </a>
                                    {{$num= 'Semanal';}}
                                </h5>
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">2 semana Mayo</p>
                            </div>
                            <div class="border-radius-md text-left me-2 d-flex align-items-left justify-content-left">
                                 <button type="submit" class="btn btn-primary btn-sm">Listar</button>
                             </div>

                        </div>
                        <div class="col-md-5 card-profile d-flex px-1 ">
                            <div class="">
                                <img src="./img/flotayungueña/sc5.jpg" class="card-img-top"
                                    alt="user1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-7 mt-2">
            <div class="card d-flex justify-content-between ">
                <div class="card-body mt-2 p-3">
                    <div class="row">
                        <div class="col-7">

                            <div class="numbers">

                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Viajes</p>
                                <h5 class="font-weight-bolder">
                                    <a class="nav-link {{  str_contains(request()->url(), 'viajes') == false ? 'active' : '' }}" href="{{ route('page', ['page' => 'viaje-list']) }}"
                                        data-toggle="tooltip" data-original-title="Edit user"> Mensual
                                    </a>
                                </h5>
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Mayo</p>
                            </div>
                            <div class="border-radius-md text-left me-2 d-flex align-items-left justify-content-left">
                                 <button type="submit" class="btn btn-primary btn-sm">Listar</button>
                             </div>

                        </div>
                        <div class="col-md-5 card-profile d-flex px-1 ">
                            <div class="">
                                <img src="./img/flotayungueña/sc5.jpg" class="card-img-top"
                                    alt="user1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="align-items-center col-md-12 mt-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Viajes por Sucursal</h6>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                            <i class="far fa-calendar-alt me-2"></i>
                            <small>23 - 30 March 2020</small>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Hoy</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button
                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                        class="fas fa-arrow-down"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Guayara</h6>
                                    <span class="text-xs">27 March 2020, at 12:30 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                - $ 2,500
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button
                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                        class="fas fa-arrow-up"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Rurre</h6>
                                    <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 2,000
                            </div>
                        </li>
                    </ul>
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">En el Mes</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button
                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                        class="fas fa-arrow-up"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Codija</h6>
                                    <span class="text-xs">26 March 2020, at 13:45 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 750
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button
                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                        class="fas fa-arrow-up"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Trinidad</h6>
                                    <span class="text-xs">26 March 2020, at 12:30 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 1,000
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button
                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                        class="fas fa-arrow-up"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Guayara</h6>
                                    <span class="text-xs">26 March 2020, at 08:30 AM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 2,500
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button
                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                        class="fas fa-exclamation"></i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Rure</h6>
                                    <span class="text-xs">26 March 2020, at 05:00 AM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                                Pending
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    @include('layouts.footers.auth.footer')
</div>

@endsection
