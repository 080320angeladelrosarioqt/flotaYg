@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'VIAJE EDITAR'])
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="container-fluid py-4">
        <div class="row">

        <div class="col-md-8">
            <div class="card">
                <form role="form" method="POST" action={{ route('bus.update') }} enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Editar Datos de VIAJE</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Viaje:</label>
                                    <input class="form-control" type="text" value="Guayara">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Ruta</label>

                                    <select class="form-control" name="estado" type="sel" id="">
                                        <option value="id_1" >La Paz</option>
                                        <option value="id_2" selected>Guayara</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <p class="text-uppercase text-sm"> Sucursal de Salida</p>
                                <select class="form-control" name="estado" type="sel" id="">
                                    <option value="id_1" >La Paz</option>
                                    <option value="id_2" selected>Guayara</option>
                                </select>
                            </div>
                            <p class="text-uppercase text-sm">  Fecha de Salida</p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Salida</label>
                                    <input class="form-control" type="date" name="" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Salida</label>
                                    <input class="form-control" type="time" name="" id="">
                                </div>
                            </div>
                            <p class="mb-0 ">Datos de Salida:</p>
                            <hr class="horizontal dark">
                            <div class="col-md-6">
                                <p class="text-xss mb-0">Seleccionar:</p>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Bus</label>

                                    <select class="form-control" name="estado" type="sel" id="">
                                        <option value="1" >1197 EIL</option>
                                        <option value="0" selected>4021 MGF</option>
                                    </select>
                                </div>
                            </div>

                            <p class="mb-0 ">Seleccionar Conductores:</p>
                            <hr class="horizontal dark">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Titular</label>
                                    <select class="form-control" name="estado" type="sel" id="">
                                        <option value="1" >Enrriquez </option>
                                        <option value="0" selected>Mauricio Villca</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Relevo</label>
                                    <select class="form-control" name="estado" type="sel" id="">
                                        <option value="1" >Enrriquez </option>
                                        <option value="0" selected>Mauricio Villca</option>
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


                    </div>
                    <!-- agregar nuevo usuario-->

                </form>

            </div>
        </div>
       
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection


