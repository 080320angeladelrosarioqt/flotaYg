@extends('pages.profile')
@section('content1')
<div class="col-md-8 py-4">
    <div class="card">
        <form role="form" method="POST" action={{ route('propietario.update') }} enctype="multipart/form-data">
            @csrf
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Editar Perfil de Propietario</p>
                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                </div>
            </div>
            <div class="card-body">
                <p class="text-uppercase text-sm">Informacion</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Codigo</label>
                            <input class="form-control" type="text" name="reg_inst" >
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
                            <label for="example-text-input" class="form-control-label">Fecha Registro</label>
                            <input class="form-control" type="date" name="fecha_reg"  >
                        </div>
                    </div>


                </div>
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Tipo de Ingreso</p>
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
