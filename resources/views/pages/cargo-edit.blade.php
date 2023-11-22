@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Cargo'])
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="container-fluid py-4">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <form role="form" method="POST" action={{ route('bus.update') }} enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Editar Cargo</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Cargo:</label>
                                    <input class="form-control" type="text" value="Guayara">

                                </div>
                            </div>
                            <p class="text-uppercase text-sm">  Horario de</p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Ingreso</label>
                                    <input class="form-control" type="time" name="" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Salida</label>
                                    <input class="form-control" type="time" name="" id="">
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


