@extends('layouts.plantilla')

@section('title', 'Resultados de Búsqueda')

@section('content')
    <h1>Resultados de búsqueda para: "{{ $search }}"</h1>

    <a href="{{ route('padronColonos') }}" class="volver">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Volver
    </a>

    @if($padronColonos->isEmpty())
        <p>No se encontraron resultados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Nombre</th>
                    <th>Apodo</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>ID Junta Hazas</th>
                    <th>ID Habitante</th>
                    <th>Dirección</th>
                    <th>Nombre</th>
                    <th>Número</th>
                    <th>Bloque</th>
                    <th>Escalera</th>
                    <th>Piso</th>
                    <th>Puerta</th>
                    <th>Código Postal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($padronColonos as $colono)
                    <tr>
                        <td>{{ $colono->idColono }}</td>
                        <td>{{ $colono->apellido1 }}</td>
                        <td>{{ $colono->apellido2 }}</td>
                        <td>{{ $colono->nombre }}</td>
                        <td>{{ $colono->apodo }}</td>
                        <td>{{ $colono->dni }}</td>
                        <td>{{ $colono->telefono }}</td>
                        <td>{{ $colono->email }}</td>
                        <td>{{ $colono->idJuntaHazas }}</td>
                        <td>{{ $colono->idHabitante }}</td>
                        <td>{{ $colono->tipoDireccion }}</td>
                        <td>{{ $colono->nombreDireccion }}</td>
                        <td>{{ $colono->numeroDireccion }}</td>
                        <td>{{ $colono->bloqueDireccion }}</td>
                        <td>{{ $colono->escaleraDireccion }}</td>
                        <td>{{ $colono->piso }}</td>
                        <td>{{ $colono->puerta }}</td>
                        <td>{{ $colono->codigoPostal }}</td>
                        <td>
                            <a href="{{ route('editPadronColonos', $colono->idColono) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{ $padronColonos->links('vendor.pagination.simple-default') }}
@endsection