@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Editar Bus'])
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Propietario
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        Public Relations
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-6">
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
        <div class="col-md-5">
            <div class="card card-profile">
                <img src="./img/flotayungueña/fl1.jpg" alt="Image placeholder" class="card-img-top">
            </div>


            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-5">
                <div class="d-flex justify-content-between ">

                    <div class="card card-profile col-md-5 " >
                        <img src="./img/flotayungueña/as.jpg" alt="Image placeholder" class="card-img-top">

                    </div>
                    <div class="card card-profile col-md-5" >
                        <img src="./img/flotayungueña/as.jpg" alt="Image placeholder" class="card-img-top">

                    </div>


                </div>
                <br>
                <div class="d-flex justify-content-between ">

                    <div class="card card-profile col-md-5 " >
                        <img src="./img/flotayungueña/as.jpg" alt="Image placeholder" class="card-img-top">

                    </div>
                    <div class="card card-profile col-md-5" >
                        <img src="./img/flotayungueña/as.jpg" alt="Image placeholder" class="card-img-top">

                    </div>


                </div>
                <div class="text-center mt-4">
                    <h5>
                        Placa<span class="font-weight-light"> 1197 EIL</span>
                    </h5>
                    <div class="h6 font-weight-300">
                        <i class="ni location_pin mr-2"></i>Bus Cama
                    </div>
                    <div class="h6 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Num Chasis-868hhg
                    </div>
                    <div>
                        <i class="ni education_hat mr-2"></i>ACTIVO
                    </div>
                </div>
            </div>

        </div>
            <div class="card card-profile col-md-3 " >

            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
</div>
@endsection
