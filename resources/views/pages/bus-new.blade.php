@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Editar Bus'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form role="form" method="POST" action={{ route('bus.update') }} enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Editar Datos de Bus</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">InformaciON BUS</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Placa</label>
                                        <input class="form-control" type="text" value="1197 EIL">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Numero Asientos</label>
                                        <input class="form-control" type="text" value="53">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Modelo</label>
                                        <input class="form-control" type="text" value="53">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tipo</label>
                                        <select class="form-control" name="tipo" type="sel" id="">
                                            <option value="cama" selected>Cama</option>
                                            <option value="semicama" >Semi Cama</option>
                                            <option value="semicama" >Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Numero de Chasis</label>
                                        <input class="form-control" type="text"
                                            value="8 Bl 1, Sc 1, Ap 09">
                                    </div></div>
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
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informacion</p>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Propietario</label>

                                    <select class="form-control" name="propietario" type="sel" id="">
                                        <option value="1" selected>Juan</option>
                                        <option value="0" >Mario</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Celular</label>

                                    <input class="form-control" type="text" name="reg_inst" >
                                </div>
                            </div>
                            <div class="col-md-20  center">
                                <div class="form-group">
                                 <div class="file-select" id="src-file1" >
                                     <input type="file" name="src-file1" class= "col-md-12" aria-label="Fotografia">
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection

