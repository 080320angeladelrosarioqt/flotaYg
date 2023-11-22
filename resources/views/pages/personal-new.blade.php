@extends('pages.profile')
@section('content1')
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
<div class="col-md-8 py-4">
    <div class="card">
        <form role="form" method="POST" action={{ route('conductor.update') }} enctype="multipart/form-data">
            @csrf
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0"> Perfil de Operario</p>
                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                </div>
            </div>
            <div class="card-body">
                <p class="text-uppercase text-sm">Informacion:</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Cargo</label>
                            <select class="form-control" name="estado" type="sel" id="">
                                <option value="1" selected>Boleteria</option>
                                <option value="0" >Recepcion</option>
                                <option value="0" >Cargador</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Oficiona</label>
                            <select class="form-control" name="estado" type="sel" id="">
                                <option value="1" selected>Guayara</option>
                                <option value="0" >Rurre</option>
                                <option value="0" >La Paz</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Celular</label>
                            <input class="form-control" type="text" name="celular"   >
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Fecha de Registro</label>
                            <input class="form-control" type="date" name="fecha_reg"  >
                        </div>
                    </div>

                </div>
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm"></p>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Estado</label>

                            <select class="form-control" name="estado" type="sel" id="">
                                <option value="1" selected>Activo</option>
                                <option value="0" >Inactivo</option>
                            </select>
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
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
