@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Personal'])
    <div class="card-body p-3">
        <div class="row gx-4">

            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'personal-new']) }} "
                                data-toggle="tooltip" role="tab" aria-selected="">
                                <i class="fa fa-plus"></i>
                                <span class="ms-2">Agregar Personal</span>
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
                        <h6>PERSONAL EN PLANTA</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-



                                        secondary text-xxs font-weight-bolder opacity-7">
                                            Nombre</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Funcion</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sucursal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Employed</th>
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
                                                     <p class="text-xs text-secondary mb-0">76785195</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Boleteria</p>
                                            <p class="text-xs text-secondary mb-0"></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Guayara</p>
                                            <p class="text-xs text-secondary mb-0">Beni</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Activo</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <a  class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'personal-edit']) }}"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                            </div>
                                            </a>
                                            <a href="javascript:;" class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'tables']) }}"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-trash text-warning text-sm opacity-10"></i>
                                            </div>
                                            </a>
                                        </td>

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
        <div class="row">
            <div class="col-12">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Cargos</p>
                        <div class="nav-wrapper  position-relative end-0">

                                    <a class="nav-link {{  str_contains(request()->url(), 'cargo') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'cargo-new']) }} "
                                        data-toggle="tooltip" role="tab" aria-selected="">
                                        <i class="fa fa-plus"></i>
                                        <span class="ms-2">Agregar Cargo</span>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Cargos</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cargo</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Horario</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sueldo</th>
                                            <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Estado</th>
                                            <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src=""
                                                        class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Boletero</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xss font-weight-bold mb-0">12:00 pm</p>
                                            <p class="text-xss font-weight-bold mb-0">21:00 pm</p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">$300</span>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">Activo</span>
                                        </td>

                                        <td class="align-middle">
                                            <a  class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'cargo-edit']) }}"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <div
                                                class="icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fa fa-pencil-square-o text-success text-sm opacity-10"></i>
                                            </div>
                                            </a>
                                            <a href="javascript:;" class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'tables']) }}"
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
        @include('layouts.footers.auth.footer')
    </div>
@endsection
