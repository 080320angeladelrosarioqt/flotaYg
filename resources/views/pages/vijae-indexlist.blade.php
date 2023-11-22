<div class="col-md-8">
    <div class="card">
        <form role="form" method="POST" action={{ route('profile.update') }} enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>VIAJES {{ $fecha }}</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-



                                        secondary text-xxs font-weight-bolder opacity-7">
                                            Ruta</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sucursal Salida</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sucursal Llegada</th>
                                            <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Fecha de Salida</th>
                                            <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Hora de Salida</th>
                                            <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Bus</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Editar</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Guayara</h6>
                                                    <p class="text-xs text-secondary mb-0">Beni</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">La Paz</p>
                                            <p class="text-xs text-secondary mb-0">La Paz</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Guayara</p>
                                            <p class="text-xs text-secondary mb-0">Beni</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">08-06-23</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">16:00pm</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">1197 EIL</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Activo</span>
                                        </td>
                                        <td class="align-middle">
                                            <a  class="nav-link {{  str_contains(request()->url(), 'viajes') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'viaje-edit']) }}"
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

                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Rurrenabaque</h6>
                                                    <p class="text-xs text-secondary mb-0">Beni</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">La Paz</p>
                                            <p class="text-xs text-secondary mb-0">La Paz</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Rurrenabaque</p>
                                            <p class="text-xs text-secondary mb-0">Beni</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">08-06-23</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">14:00pm</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">1197 EIL</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Activo</span>
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
        </form>
</div>
