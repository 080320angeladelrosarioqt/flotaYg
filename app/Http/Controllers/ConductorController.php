<?php

namespace App\Http\Controllers;

use App\Models\T_Conductor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ConductorController extends Controller
{
    public function show()
    {
        return view('pages.conductor-profile');
    }

    public function update(Request $request)
    {
        $conductor=T_Conductor::all();

        $attributes = $request->validate([
            'reg_inst' => ['required','max:255', 'min:2'],
            'celular' => ['max:100'],
            'codigo_lic' => ['max:100']

        ]);

        $conductor()->update([
            'reg_inst' => $request->get('reg_inst'),
            'fecha_reg' => $request->get('fecha_reg'),
            'celular' => $request->get('celular'),
            'codigo_lic' => $request->get('codigo_lic') ,
            'fotografia' => $request->get('fotografia'),
            'estado' => $request->get('estado')
        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }

}
