@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'RUTA'])
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
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="container-fluid py-4">
        <div class="row">

        <div class="col-md-10">
            <div class="card">
                <form role="form" method="POST" action={{ route('bus.update') }} enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Datos de Ruta</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Ruta Nombre:</label>
                                    <input class="form-control" type="text" value="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Departamento</label>

                                    <select class="form-control" name="estado" type="sel" id="">
                                        <option value="1" >La Paz</option>
                                        <option value="0" selected>Beni</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <p class="text-uppercase text-sm"> Sucursal de Salida</p>
                                <select class="form-control" name="estado" type="sel" id="">
                                    <option value="1" >La Paz</option>
                                    <option value="0" selected>Guayara</option>
                                </select>
                            </div>
                            <p class="text-uppercase text-sm">  Horario de Salida</p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Salida</label>
                                    <input class="form-control" type="time" name="" id="">
                                </div>
                            </div>
                            <p class="mb-0">Lugar Destino</p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Ruta Nombre:</label>
                                    <input class="form-control" type="text" value="Guayara">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Departamento</label>

                                    <select class="form-control" name="estado" type="sel" id="">
                                        <option value="1" >La Paz</option>
                                        <option value="0" selected>Beni</option>
                                    </select>
                                </div>
                            </div>
                            <p class="text-uppercase text-sm">  Horario de Llegada</p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Salida</label>
                                    <input class="form-control" type="time" name="" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Precio:</label>
                                    <input class="form-control" type="text" value="250Bs.">

                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="text-uppercase text-sm"> Sucursales</p>
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-left text-uppercase text-xxs font-weight-bolder opacity-7">
                                                check</th>
                                            <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                Sucursal</th>

                                                <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Precio</th>

                                                <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Horario</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Celular</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Estado</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle py-1">
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-left">
                                                        <h6 class="mb-0 text-sm"></h6>
                                                        <p class="text-xs text-secondary mb-0"></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0"></p>
                                                <p class="text-xs text-secondary mb-0"></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"></span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Activo</span>
                                            </td>


                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex align-items-center">

                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Agregar Oficina</button>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Estado</label>

                                <select class="form-control" name="estado" type="sel" id="">
                                    <option value="1" selected>Activo</option>
                                    <option value="0" >Inactivo</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Fotografia</label>
                                    <div class="file-select form-control" id="src-file1" >
                                        <input type="file" name="src-file1" class= "col-md-12" aria-label="Fotografia">
                                      </div>
                                   </div>
                            </div>


                        </div>


                    </div>
                    <!-- agregar nuevo usuario-->

                </form>

            </div>
        </div>


    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
