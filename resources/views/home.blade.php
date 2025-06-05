@extends ('layouts.plantilla')

@section('title', 'Hazas de la Suerte')

@section('content')
    <h1 class="titulo">Las Hazas de la Suerte</h1>
    <nav>
        <a href="{{ route('hazas') }}">Hazas</a>
        <a href="{{ route('herederos') }}">Herederos</a>
        <a href="{{ route('juntaHazas') }}">Junta de Hazas</a>
        <a href="{{ route('padronColonos') }}">Padrón de Colonos</a>
        <a href="{{ route('padronHabitantes') }}">Padrón de Habitantes</a>
        <a href="{{ route('sesiones') }}">Sesiones</a>
        <a href="{{ route('sorteo') }}">Sorteo</a>
        <a href="{{ route('usuarios') }}">Usuarios</a>
      </nav>
@endsection