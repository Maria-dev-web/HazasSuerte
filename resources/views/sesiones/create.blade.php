@extends ('layouts.plantilla')

@section('title', 'Sesiones')

@section('content')

    <h1>AGREGUE UNA NUEVA SESIÓN</h1>

    <form action="" method="POST">

        <div class="formRow">
            <div class="formGroup">
                <label for="idSesion">ID Sesión:</label>
                <input type="text" id="idSesion" name="idSesion" required>
            </div>
            <div class="formGroup">
                <label for="idUsuario">ID Usuario:</label>
                <input type="text" id="idUsuario" name="idUsuario" required>
            </div>
        </div>
        
        <div class="formRow">
            <div class="formGroup">
                <label for="fechaInicio">Fecha de Inicio:</label>
                <input type="datetime-local" id="fechaInicio" name="fechaInicio" required>
            </div>
            <div class="formGroup">
                <label for="fechaFin">Fecha de Fin:</label>
                <input type="datetime-local" id="fechaFin" name="fechaFin" required>
            </div>
        </div>

        <button id="agregar">Agregar</button>
        <a href="{{ route('sesiones') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Volver
        </a>
    </form>
@endsection