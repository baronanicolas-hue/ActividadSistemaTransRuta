<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasajero;

class BaronaPasajerosController extends Controller
{ 
    # Código desarrollado por BaronaNicolas.
    # Determina el tipo de dato que se debe pedir y además de eso confirma que el proceso se ha completado en caso de que así sea.
    # Junto a eso, crea el metodo Create y el metodo Store. Uno muestra el formulario, el otro lo valida y lo guarda.

    public function BaronaCreate()
    {
        return view('BaronaBonilla.BaronaPasajero');
    }

    public function BaronaStore(request $request) {
        $datos = $request->validate([
            'nombre' => 'required|string|max:150',
            'identificacion' => 'required|string|max:30|unique:pasajeros,identificacion',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:250'
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'identificacion.required' => 'La identificación es obligatoria.',
            'identificacion.unique' => 'Este pasajero ya está registrado en el sistema.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'Ingrese un correo electrónico válido.'
        ]);

        Pasajero::create($datos);

        return redirect()->back()->with(
            'sucess',
            'Registrado con exito.'
        );
    }
}
