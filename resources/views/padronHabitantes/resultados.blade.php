@extends('layouts.plantilla')

@section('title', 'Resultados de Búsqueda')

@section('content')
    <h1>Resultados de búsqueda para: "{{ $search }}"</h1>

    <a href="{{ route('padronHabitantes') }}" class="volver">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Volver
    </a>

    @if($padronHabitantes->isEmpty())
        <p>No se encontraron resultados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Nombre</th>
                    <th>Domicilio Original</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Número</th>
                    <th>Bloque</th>
                    <th>Escalera</th>
                    <th>Piso</th>
                    <th>Puerta</th>
                    <th>Código Postal</th>
                    <th>Excluido</th>
                    <th>Fecha de Exclusión</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($padronHabitantes as $habitante)
                    <tr>
                        <td>{{ $habitante->idHabitante }}</td>
                        <td>{{ $habitante->apellido1 }}</td>
                        <td>{{ $habitante->apellido2 }}</td>
                        <td>{{ $habitante->nombre }}</td>
                        <td>{{ $habitante->domicilioOriginal }}</td>
                        <td>{{ $habitante->tipoDireccion }}</td>
                        <td>{{ $habitante->nombreDireccion }}</td>
                        <td>{{ $habitante->numeroDireccion }}</td>
                        <td>{{ $habitante->bloqueDireccion }}</td>
                        <td>{{ $habitante->escaleraDireccion }}</td>
                        <td>{{ $habitante->piso }}</td>
                        <td>{{ $habitante->puerta }}</td>
                        <td>{{ $habitante->codigoPostal }}</td>
                        <td>{{ $habitante->excluido ? 'Sí' : 'No' }}</td>
                        <td>{{ $habitante->fechaExclusion }}</td>
                        <td>{{ $habitante->observaciones }}</td>
                        <td>
                            <a href="{{ route('editPadronHabitantes', $habitante->idHabitante) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{ $padronHabitantes->links('vendor.pagination.simple-default') }}
@endsection