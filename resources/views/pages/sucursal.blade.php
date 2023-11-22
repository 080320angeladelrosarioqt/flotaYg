@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Sucursales'])
<div class="card-body p-3">
    <div class="row gx-4">

        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link {{  str_contains(request()->url(), 'conductor') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'sucursal-new']) }} "
                            data-toggle="tooltip" role="tab" aria-selected="">
                            <i class="fa fa-plus"></i>
                            <span class="ms-2">Agregar Sucursal</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7 mt-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Lista de Sucursales</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Guayara</h6>
                            <span class="mb-2 text-xs">Ubicacion: <span
                                    class="text-dark font-weight-bold ms-sm-2">Calle 4 </span></span>
                            <span class="mb-2 text-xs">Horario de Atencion: <span
                                        class="text-dark ms-sm-2 font-weight-bold">08:00 am a 17:00pm </span></span>
                            <span class="mb-2 text-xs">Municipio: <span
                                    class="text-dark ms-sm-2 font-weight-bold">Run</span></span>
                            <span class="mb-2 text-xs">Depatamento: <span
                                        class="text-dark ms-sm-2 font-weight-bold">Beni</span></span>
                            <span class="text-xs">Telefono: <span
                                    class="text-dark ms-sm-2 font-weight-bold">22832145</span></span>
                        </div>
                        <div class="ms-auto text-end">
                            <div class="col-auto">
                                <div class="avatar avatar-xl position-relative">
                                    <img src="./img/flotayungueña/sc5.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                                </div>
                            </div>
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                    class="far fa-trash-alt me-2"></i>Delete</a>
                            <a class="nav-link {{  str_contains(request()->url(), 'bus') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'sucursal-edit']) }} "><i
                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-5 mt-4">
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
@endsection
