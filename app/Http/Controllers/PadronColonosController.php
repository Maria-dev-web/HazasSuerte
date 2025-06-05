<?php

namespace App\Http\Controllers;

use App\Models\PadronColono;
use Illuminate\Http\Request;

class PadronColonosController extends Controller {

    public function create () {
        return view('padronColonos.create');
    }

    public function index () {
        $padronColonos = PadronColono::paginate(10);

        return view('padronColonos.index', compact('padronColonos'));
    }

    public function buscar(Request $request) {
        $search = $request->input('search');

        $query = PadronColono::query();

        if ($search) {
            $query->where('idColono', 'like', '%' . $search . '%')
                ->orWhere('apellido1', 'like', '%' . $search . '%')
                ->orWhere('apellido2', 'like', '%' . $search . '%')
                ->orWhere('nombre', 'like', '%' . $search . '%');
        }

        $padronColonos = $query->paginate(10)->appends(['search' => $search]);
        return view('padronColonos.resultados', compact('padronColonos', 'search'));
    }


    public function store(Request $request) {

        $request->validate([
            'idColono' => 'nullable|string|max:50',
            'apellido1' => 'nullable|string|max:20',
            'apellido2' => 'nullable|string|max:20',
            'nombre' => 'nullable|string|max:20',
            'apodo' => 'nullable|string|max:10',
            'dni' => 'nullable|string|max:10',
            'telefono' => 'nullable|string|max:10',
            'email' => 'nullable|string|max:40|email',
            'idJuntaHazas' => 'nullable|integer|min:0',
            'idHabitante' => 'nullable|string|max:20',
            'tipoDireccion' => 'nullable|in:calle,avenida,plaza,carretera,camino,callejon',
            'nombreDireccion' => 'nullable|string|max:10',
            'numeroDireccion' => 'nullable|string|max:10',
            'bloqueDireccion' => 'nullable|string|max:10',
            'escaleraDireccion' => 'nullable|string|max:10',
            'piso' => 'nullable|string|max:10',
            'puerta' => 'nullable|string|max:10',
            'codigoPostal' => 'nullable|string|max:10',
        ]);

        try {
            PadronColono::create([
            'idColono' => $request->idColono,
            'apellido1' => $request->apellido1,
            'apellido2' => $request->apellido2,
            'nombre' => $request->nombre,
            'apodo' => $request->apodo,
            'dni' => $request->dni,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'idJuntaHazas' => $request->idJuntaHazas,
            'idHabitante' => $request->idHabitante,
            'tipoDireccion' => $request->tipoDireccion,
            'nombreDireccion' => $request->nombreDireccion,
            'numeroDireccion' => $request->numeroDireccion,
            'bloqueDireccion' => $request->bloqueDireccion,
            'escaleraDireccion' => $request->escaleraDireccion,
            'piso' => $request->piso,
            'puerta' => $request->puerta,
            'codigoPostal' => $request->codigoPostal,
            ]);

            return redirect()->route('padronColonos')->with('success', 'Padrón de Colonos creado correctamente.');

        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error al guardar: ' . $e->getMessage());
        }
    }

    public function edit($idColono) {

        $padronColonos = PadronColono::findOrFail($idColono); 
        return view('padronColonos.edit', compact('padronColonos')); 
    }


    public function update(Request $request, $idColono) {
        $validated = $request->validate([
            'idColono' => 'nullable|string|max:50',
            'apellido1' => 'nullable|string|max:20',
            'apellido2' => 'nullable|string|max:20',
            'nombre' => 'nullable|string|max:20',
            'apodo' => 'nullable|string|max:10',
            'dni' => 'nullable|string|max:10',
            'telefono' => 'nullable|string|max:10',
            'email' => 'nullable|string|max:40|email',
            'idJuntaHazas' => 'nullable|integer|min:0',
            'idHabitante' => 'nullable|string|max:20',
            'tipoDireccion' => 'nullable|in:calle,avenida,plaza,carretera,camino,callejon',
            'nombreDireccion' => 'nullable|string|max:10',
            'numeroDireccion' => 'nullable|string|max:10',
            'bloqueDireccion' => 'nullable|string|max:10',
            'escaleraDireccion' => 'nullable|string|max:10',
            'piso' => 'nullable|string|max:10',
            'puerta' => 'nullable|string|max:10',
            'codigoPostal' => 'nullable|string|max:10',
        ]);

        try {
        $padronColonos = PadronColono::findOrFail($idColono);
        $padronColonos->update($validated); 

            return redirect()->route('padronColonos')->with('success', 'Padrón de Colonos actualizado correctamente.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error al actualizar: ' . $e->getMessage());
        }
    }

    public function destroy($idColono) {
        try {
            $padronColonos = PadronColono::findOrFail($idColono);
            $padronColonos->delete();

            return redirect()->route('padronColonos')->with('success', 'Padrón de Colonos eliminado correctamente.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al eliminar: ' . $e->getMessage());
        }
    }
}