@extends ('layouts.plantilla')

@section('title', 'Padrón de Colonos')

@section('content')
    <h1>PADRÓN DE COLONOS</h1>

    <!-- Formulario de búsqueda -->
    <form class="buscador" method="GET" action="{{ route('buscarPadronColonos') }}">
        <input type="text" name="search" placeholder="Buscar Colono..." value="{{ request('search') }}">
        <button type="submit">Buscar</button>
    </form>
    <nav>
        <a href="{{ route('createPadronColonos') }}">Crear nuevo</a>
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


    {{ $padronColonos->links('vendor.pagination.simple-default') }}
@endsection