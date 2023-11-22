@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Rutas'])
<div class="card-body p-3">
    <div class="row gx-4">

        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'ruta-agregar']) }} "
                            data-toggle="tooltip" role="tab" aria-selected="">
                            <i class="ni ni-settings-gear-65"></i>
                            <span class="ms-2">Agregar Ruta</span>
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

                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Rutas</p>
                                        <h5 class="font-weight-bolder">
                                            Guayara
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">Horario:</span>
                                            16:00pm
                                        </p>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">Precio:</span>
                                            Bs.
                                        </p>

                                    </div>
                                    <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                                                <a  class="nav-link {{  str_contains(request()->url(), 'ruta') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'ruta-edit']) }}"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    <div
                                                    class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                                </div>
                                                </a>
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
                <div class="col-xl-4 col-sm-7 mb-xl-0 mb-4 mt-2">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-7">

                                    <div class="numbers">

                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Rutas</p>
                                        <h5 class="font-weight-bolder">
                                            Riberalta
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">Horario:</span>
                                            16:00pm
                                        </p>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">Precio:</span>
                                            Bs.
                                        </p>
                                    </div>
                                    <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                            </div>

                                </div>
                                <div class="col-md-5 card-profile d-flex px-1 ">
                                    <div class="">
                                        <img src="./img/flotayungueña/sc3.jpg" class="card-img-top"
                                            alt="user1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-7 mb-xl-0 mb-4 mt-2">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-7">

                                    <div class="numbers">

                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Rutas</p>
                                        <h5 class="font-weight-bolder">
                                            Rurrenabaque
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">Horario:</span>
                                            16:00pm
                                        </p>

                                    </div>
                                    <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                            </div>

                                </div>
                                <div class="col-md-5 card-profile d-flex px-1 ">
                                    <div class="">
                                        <img src="./img/flotayungueña/sc4.jpg" class="card-img-top"
                                            alt="user1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-7 mb-xl-2 mb-4 mt-2">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-7">

                                    <div class="numbers">

                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Rutas</p>
                                        <h5 class="font-weight-bolder">
                                            Riberalta
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">Horario:</span>
                                            16:00pm
                                        </p>

                                    </div>
                                    <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                            </div>

                                </div>
                                <div class="col-md-5 card-profile d-flex px-1 ">
                                    <div class="">
                                        <img src="./img/flotayungueña/sc3.jpg" class="card-img-top"
                                            alt="user1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-7 mb-xl-2 mb-4 mt-2">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-7">

                                    <div class="numbers">

                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Rutas</p>
                                        <h5 class="font-weight-bolder">
                                            Reyes
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">Horario:</span>
                                            16:00pm
                                        </p>

                                    </div>
                                    <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                            </div>

                                </div>
                                <div class="col-md-5 card-profile d-flex px-1 ">
                                    <div class="">
                                        <img src="./img/flotayungueña/sc6.jpg" class="card-img-top"
                                            alt="user1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row mt-2">
                <div class="col-lg-10 mb-lg-0 mb-10">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">COSTOS DE RUTAS</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center ">
                                <tbody>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="./img/flotayungueña/sc5.jpg" class="avatar avatar-sm rounded-circle me-2" alt="Country flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Ciudad:</p>
                                                    <h6 class="text-sm mb-0">Guayara</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Costo:</p>
                                                <h6 class="text-sm mb-0">2500</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mapa:</p>
                                                <h6 class="text-sm mb-0">$230,900</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Salidas:</p>
                                                <h6 class="text-sm mb-0">29.9%</h6>
                                            </div>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        




        @include('layouts.footers.auth.footer')
</div>
@endsection
