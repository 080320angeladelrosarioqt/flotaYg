<?php

namespace App\Http\Controllers;
use App\Models\T_Propietario;
use App\Models\User;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function create()
    {
        return view('pages.propietario-new');
    }

    public function store()
    {

        return redirect('pages.propietario-profile');
    }

    public function show()
    {
        return view('pages.propietario-profile');
    }

    public function update(Request $request)
    {
        $propietario=T_Propietario::all();

        $attributes = $request->validate([
            'reg_inst' => ['required','max:255', 'min:2'],
            'celular' => ['max:100'],
            'codigo_lic' => ['max:100']

        ]);

        $propietario()->update([
            'cod_soc' => $request->get('cod_soc'),
            'fecha_reg' => $request->get('fecha_reg'),
            'celular' => $request->get('celular'),
            'id_ingreso' => $request->get('id_ingreso') ,
            'fotografia' => $request->get('fotografia'),
            'estado' => $request->get('estado')
        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }


}
