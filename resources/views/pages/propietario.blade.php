@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Propietarios'])
<div class="card-body p-3">
    <div class="row gx-4">

        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link{{  str_contains(request()->url(), 'propietario') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'propietario-new']) }}"
                            data-toggle="tooltip" role="tab" aria-selected="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-2">Agregar Propietario</span>
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
                    <h6>Tabla de Propietarios</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Codigo</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        celular</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Buses</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Estado</th>
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
                                                <h6 class="mb-0 text-sm">John Michael</h6>
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        <p class="text-xs text-secondary mb-0">Organization</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        <p class="text-xs text-secondary mb-0">Organization</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Activo</span>
                                    </td>

                                    <td class="align-middle">
                                        <a  class="nav-link {{  str_contains(request()->url(), 'propietario') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'propietario-profile']) }}"
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
