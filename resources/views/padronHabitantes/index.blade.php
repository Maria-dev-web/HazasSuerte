@extends ('layouts.plantilla')

@section('title', 'Padrón de Habitantes')

@section('content')
    <h1>PADRÓN DE HABITANTES</h1>

        <!-- Formulario de búsqueda -->
    <form class="buscador" method="GET" action="{{ route('buscarPadronHabitantes') }}">
        <input type="text" name="search" placeholder="Buscar Habitante..." value="{{ request('search') }}">
        <button type="submit">Buscar</button>
    </form>

    <nav>
        <a href="{{ route('createPadronHabitantes') }}">Crear nuevo</a>
        <a href="{{ route('home') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 12L12 3l9 9" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 21V15h6v6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Página principal
        </a>
    </nav>

    @if(session('success'))
        <div class="alert alertExito">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
    <div class="alert alertError">
        {{ session('error') }}
    </div>
    @endif
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Nombre</th>
                    <th>Domicilio Original</th>
                    <th>Tipo</th>
                    <th>Nombre </th>
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

    {{ $padronHabitantes->links('vendor.pagination.simple-default') }}
@endsection