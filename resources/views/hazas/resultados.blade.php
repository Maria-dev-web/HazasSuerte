@extends('layouts.plantilla')

@section('title', 'Resultados de Búsqueda')

@section('content')
    <h1>Resultados de búsqueda para: "{{ $search }}"</h1>

    <a href="{{ route('hazas') }}" class="volver">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Volver
    </a>

    @if($hazas->isEmpty())
        <p>No se encontraron resultados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Número Haza</th>
                    <th>Partido</th>
                    <th>Hectáreas</th>
                    <th>Renta Anual</th>
                    <th>Uso</th>
                    <th>Localización</th>
                    <th>Caballerizas</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hazas as $haza)
                    <tr>
                        <td>{{ $haza->idHaza }}</td>
                        <td>{{ $haza->nHaza }}</td>
                        <td>{{ $haza->partido }}</td>
                        <td>{{ $haza->hectareas }}</td>
                        <td>{{ $haza->rentaAnual }}</td>
                        <td>{{ $haza->uso }}</td>
                        <td>{{ $haza->localizacion }}</td>
                        <td>{{ $haza->caballerizas }}</td>
                        <td>{{ $haza->fechaInicio }}</td>
                        <td>{{ $haza->fechaFin }}</td>
                        <td>
                            <a href="{{ route('editHaza', $haza->idHaza) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{ $hazas->links('vendor.pagination.simple-default') }}
@endsection