@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Editar Sucursal'])
<div class="card shadow-lg mx-4 card-profile-bottom">


<div class="container-fluid py-4">
    <div class="row">

    <div class="col-md-8">
        <div class="card">
            <form role="form" method="POST" action={{ route('bus.update') }} enctype="multipart/form-data">
                @csrf
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Editar Datos de Sucursal</p>
                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Municipio</label>
                                <input class="form-control" type="text" value="....">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Ubicacion</label>
                                <input class="form-control" type="text" value="1197 EIL">
                            </div>
                        </div>
                        <p class="text-uppercase text-sm">  Horario de Atencion</p>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Apertura</label>
                                <input class="form-control" type="time" name="" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Cierre</label>
                                <input class="form-control" type="time" name="" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Horas Totales</label><br>
                                <span class="text-xs">5 hrs.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Departamento</label>

                                <select class="form-control" name="estado" type="sel" id="">
                                    <option value="1" selected>La Paz</option>
                                    <option value="0" >Beni</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Estado</label>

                                <select class="form-control" name="estado" type="sel" id="">
                                    <option value="1" selected>Activo</option>
                                    <option value="0" >Inactivo</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informacion</p>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="card-body">
                                        <p class="text-uppercase text-sm">Usuarios de Sucursal</p>
                                    </div>
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nombre</th>

                                                <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Celular</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Cargo</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Estado</th>

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

                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">76785195</p>
                                                <p class="text-xs text-secondary mb-0"></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Boletero</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Activo</span>
                                            </td>


                                        </tr>
                                    </tbody>
                                </table>



                                </div>

                            </div>

                        </div>
                </div>
                <!-- agregar nuevo usuario-->
                <div class="col-4 text-end">
                    <div class="d-flex align-items-center">
                        <a class="nav-link {{  str_contains(request()->url(), 'sucursal') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'sucursal']) }}">
                            <div
                            class="icon icon-shape bg-gradient-warning shadow-primary text-center rounded-circle ms-auto">
                                <i class="fa fa-plus text-lg text-sm opacity-10"></i>

                            </div>

                        </a>
                        <span class="nav-link-text ms-1">Agregar Operarios</span>
                    </div>



                </div>
            </form>

        </div>
    </div>
    <div class="col-md-5 col-5 col-lg-4 order-lg-2">
        <div class="card card-profile">
            <img src="./img/flotayungueña/sc2.jpg" alt="Image placeholder" class="card-img-top">

        </div>
        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between">
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Contacto</a>
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                        class="ni ni-collection"></i></a>
                <a href="javascript:;"
                    class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Mensaje</a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                        class="ni ni-email-83"></i></a>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
                <div class="text-center mt-4">
                    <h5>
                        Guayara<span class="font-weight-light"></span>
                    </h5>
                    <div class="h6 font-weight-300">
                        <i class="ni location_pin mr-2"></i>Municipio: Romania
                    </div>
                    <div class="h6 font-weight-300">
                        <i class="ni location_pin mr-2"></i>Municipio: Romania
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="d-grid text-center">
                            <span class="text-lg font-weight-bolder">08:00</span>
                            <span class="text-sm opacity-8">Inicio</span>
                        </div>
                        <div class="d-grid text-center mx-4">
                            <span class="text-lg font-weight-bolder">17:00</span>
                            <span class="text-sm opacity-8">Cierre</span>
                        </div>

                    </div>
                    <div class="h6 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Departamento
                    </div>
                    <div>
                        <i class="ni education_hat mr-2"></i>Beni
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="">
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Maps</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@include('layouts.footers.auth.footer')
</div>
@endsection
