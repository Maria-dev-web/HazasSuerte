<?php

namespace App\Http\Controllers;

use App\Models\PadronHabitante;
use Illuminate\Http\Request;

class PadronHabitantesController extends Controller {

    public function create () {
        return view('padronHabitantes.create');
    }

    public function index () {
        $padronHabitantes = PadronHabitante::paginate(10);

        return view('padronHabitantes.index', compact('padronHabitantes'));
    }


    public function buscar(Request $request) {
        $search = $request->input('search');

        $query = PadronHabitante::query();

        if ($search) {
            $query->where('idHabitante', 'like', '%' . $search . '%')
                ->orWhere('apellido1', 'like', '%' . $search . '%')
                ->orWhere('apellido2', 'like', '%' . $search . '%')
                ->orWhere('nombre', 'like', '%' . $search . '%');
        }

        $padronHabitantes = $query->paginate(10)->appends(['search' => $search]);
        return view('padronHabitantes.resultados', compact('padronHabitantes', 'search'));
    }


    public function store(Request $request) {
        $request->validate([
            'idHabitante' => 'nullable|string|max:20',
            'apellido1' => 'nullable|string|max:120',
            'apellido2' => 'nullable|string|max:120',
            'nombre' => 'nullable|string|max:120',
            'domicilioOriginal' => 'nullable|string|max:120',
            'tipoDireccion' => 'nullable|in:calle,avenida,plaza,carretera,camino,callejon',
            'nombreDireccion' => 'nullable|string|max:120',
            'numeroDireccion' => 'nullable|string|max:5',
            'bloqueDireccion' => 'nullable|string|max:5',
            'escaleraDireccion' => 'nullable|string|max:5',
            'piso' => 'nullable|string|max:5',
            'puerta' => 'nullable|string|max:5',
            'codigoPostal' => 'nullable|string|max:5',
            'excluido' => 'nullable|integer|max:1',
            'fechaExclusion' => 'nullable|date',
            'observaciones' => 'nullable|string',
        ]);

        try {
            PadronHabitante::create([
            'idHabitante' => $request->idHabitante,
            'apellido1' => $request->apellido1,
            'apellido2' => $request->apellido2,
            'nombre' => $request->nombre,
            'domicilioOriginal' => $request->domicilioOriginal,
            'tipoDireccion' => $request->tipoDireccion,
            'nombreDireccion' => $request->nombreDireccion,
            'numeroDireccion' => $request->numeroDireccion,
            'bloqueDireccion' => $request->bloqueDireccion,
            'escaleraDireccion' => $request->escaleraDireccion,
            'piso' => $request->piso,
            'puerta' => $request->puerta,
            'codigoPostal' => $request->codigoPostal,
            'excluido' => $request->excluido,
            'fechaExclusion' => $request->fechaExclusion,
            'observaciones' => $request->observaciones,
            ]);

            return redirect()->route('padronHabitantes')->with('success', 'Padrón de Habitantes creado correctamente.');

        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error al guardar: ' . $e->getMessage());
        }
    }

    public function edit($idHabitante)
{
    $padronHabitantes = PadronHabitante::findOrFail($idHabitante); 
    return view('padronHabitantes.edit', compact('padronHabitantes')); 
}


    public function update(Request $request, $idHabitante)  {
        $validated = $request->validate([
            'idHabitante' => 'nullable|string|max:20',
            'apellido1' => 'nullable|string|max:120',
            'apellido2' => 'nullable|string|max:120',
            'nombre' => 'nullable|string|max:120',
            'domicilioOriginal' => 'nullable|string|max:120',
            'tipoDireccion' => 'nullable|in:calle,avenida,plaza,carretera,camino,callejon',
            'nombreDireccion' => 'nullable|string|max:120',
            'numeroDireccion' => 'nullable|string|max:5',
            'bloqueDireccion' => 'nullable|string|max:5',
            'escaleraDireccion' => 'nullable|string|max:5',
            'piso' => 'nullable|string|max:5',
            'puerta' => 'nullable|string|max:5',
            'codigoPostal' => 'nullable|string|max:5',
            'excluido' => 'nullable|integer|max:1',
            'fechaExclusion' => 'nullable|date',
            'observaciones' => 'nullable|string',
        ]);

        try {
        $padronHabitantes = PadronHabitante::findOrFail($idHabitante);
        $padronHabitantes->update($validated); 

            return redirect()->route('padronHabitantes')->with('success', 'Padrón de Habitantes actualizado correctamente.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error al actualizar: ' . $e->getMessage());
        }
    }

    public function destroy($idHabitante) {
        try {
            $padronHabitantes = PadronHabitante::findOrFail($idHabitante);
            $padronHabitantes->delete();

            return redirect()->route('padronHabitantes')->with('success', 'Padrón de Habitantes eliminado correctamente.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al eliminar: ' . $e->getMessage());
        }
    }

}