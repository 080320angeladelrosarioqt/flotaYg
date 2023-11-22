@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Buses'])
<div class="card-body p-3">
    <div class="row gx-4">

        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link{{  str_contains(request()->url(), 'bus') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'bus-new']) }}"
                            data-toggle="tooltip" role="tab" aria-selected="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-2">Agregar Bus</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
 <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabla de Buses</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Placa</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tipo</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Num Pisos</th>
                                            <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Propietario</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Activo</th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">1197EIL</h6>
                                                    <p class="text-xs text-secondary mb-0"></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Cama</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-3 text-center ps-2">2</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">Juan Enrriquez</p>
                                            <p class="text-xs text-secondary mb-0">Propietario</p>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Activo</span>
                                        </td>

                                        <td class="align-middle">
                                            <a  class="nav-link {{  str_contains(request()->url(), 'bus') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'bus-edit']) }}"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                            </div>
                                            </a>
                                            <a href="javascript:;" class="nav-link {{  str_contains(request()->url(), 'propietario') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'propietario-profile']) }}"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-trash text-warning text-sm opacity-10"></i>
                                            </div>
                                            </a>
                                        </td>
                                    </tr>





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
