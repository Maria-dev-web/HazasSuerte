<?php

namespace App\Http\Controllers;

use App\Models\Haza;
use Illuminate\Http\Request;

class HazasController extends Controller {

    public function create () {
        return view('hazas.create');
    }

    public function index () {
        $hazas = Haza::paginate(10);
        return view('hazas.index', compact('hazas'));
    }

    public function buscar(Request $request) {
        $search = $request->input('search');

        $query = Haza::query();

        if ($search) {
            $query->where('idHaza', 'like', '%' . $search . '%')
                ->orWhere('nHaza', 'like', '%' . $search . '%')
                ->orWhere('partido', 'like', '%' . $search . '%')
                ->orWhere('rentaAnual', 'like', '%' . $search . '%')
                ->orWhere('caballerizas', 'like', '%' . $search . '%');
        }

        $hazas = $query->paginate(10)->appends(['search' => $search]);
        return view('hazas.resultados', compact('hazas', 'search'));
    }

    public function store(Request $request) {
        $request->validate([
            'idHaza' => 'required|string|max:20|unique:hazas,idHaza',
            'nHaza' => 'nullable|string|max:10',
            'partido' => 'nullable|in:Manzanete,Bujar,Marmosilla,Algar,Cantarranas,Compradizas,El águila,Las Corderas',
            'hectareas' => 'nullable|numeric',
            'rentaAnual' => 'nullable|numeric',
            'uso' => 'nullable|in:Cultivo,Arrendamiento,Venta,Militar',
            'localizacion' => 'nullable|string|max:50',
            'caballerizas' => 'nullable|string|max:50',
            'fechaInicio' => 'nullable|date',
            'fechaFin' => 'nullable|date|after:fechaInicio',
        ]);

        try {
            Haza::create([
                'idHaza' => $request->idHaza,
                'nHaza' => $request->nHaza,
                'partido' => $request->partido,
                'hectareas' => $request->hectareas,
                'rentaAnual' => $request->rentaAnual,
                'uso' => $request->uso,
                'localizacion' => $request->localizacion,
                'caballerizas' => $request->caballerizas,
                'fechaInicio' => $request->fechaInicio,
                'fechaFin' => $request->fechaFin,
            ]);

            return redirect()->route('hazas')->with('success', 'Haza creada correctamente.');

        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error al guardar: ' . $e->getMessage());
        }
    }

    public function edit($idHaza) {
        $haza = Haza::findOrFail($idHaza); 
        return view('hazas.edit', compact('haza')); 
    }


    public function update(Request $request, $idHaza) {
        $validated = $request->validate([
            'nHaza' => 'nullable|string|max:10',
            'partido' => 'nullable|in:Manzanete,Bujar,Marmosilla,Algar,Cantarranas,Compradizas,El águila,Las Corderas',
            'hectareas' => 'nullable|numeric',
            'rentaAnual' => 'nullable|numeric',
            'uso' => 'nullable|in:Cultivo,Arrendamiento,Venta,Militar',
            'localizacion' => 'nullable|string|max:50',
            'caballerizas' => 'nullable|string|max:50',
            'fechaInicio' => 'nullable|date',
            'fechaFin' => 'nullable|date|after:fechaInicio',
        ]);

        try {
        $haza = Haza::findOrFail($idHaza);
        $haza->update($validated); 
            return redirect()->route('hazas')->with('success', 'Haza actualizada correctamente.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error al actualizar: ' . $e->getMessage());
        }
    }

    public function destroy($idHaza) {
        try {
            $haza = Haza::findOrFail($idHaza);
            $haza->delete();

            return redirect()->route('hazas')->with('success', 'Haza eliminada correctamente.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al eliminar: ' . $e->getMessage());
        }
    }
}