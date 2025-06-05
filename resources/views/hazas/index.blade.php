@extends ('layouts.plantilla')

@section('title', 'Hazas')

@section('content')
    <h1>HAZAS</h1>
    
    <!-- Formulario de búsqueda -->
    <form class="buscador" method="GET" action="{{ route('buscarHaza') }}">
        <input type="text" name="search" placeholder="Buscar Haza..." value="{{ request('search') }}">
        <button type="submit">Buscar</button>
    </form>

    <nav>
        <a href="{{ route('createHazas') }}">Crear nueva</a>
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

    {{ $hazas->links('vendor.pagination.simple-default') }}
@endsection