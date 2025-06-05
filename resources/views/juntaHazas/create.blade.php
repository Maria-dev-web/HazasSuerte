@extends ('layouts.plantilla')

@section('title', 'Junta de Hazas')

@section('content')

<h1> AGREGUE UN NUEVO INTEGRANTE</h1>

    <form action="" method="POST">

        <div class="formRow">
            <div class="formGroup">
                <label for="idJuntaHazas">ID Junta de Hazas:</label>
                <input type="text" id="idJuntaHazas" name="idJuntaHazas" required>
            </div>
            <div class="formGroup">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
        </div>
        <div class="formRow">
            <div class="formGroup">
                <label for="apellido1">Apellido 1:</label>
                <input type="text" id="apellido1" name="apellido1" required>
            </div>
            <div class="formGroup">
                <label for="apellido2">Apellido 2:</label>
                <input type="text" id="apellido2" name="apellido2" required>
            </div>
        </div>
        <div class="formRow">
            <div class="formGroup">
                <label for="tipoParticipante">Tipo de participante:</label>
                <select id="tipoParticipante" name="tipoParticipante" required>
                    <option value="" disabled selected>-- Selecciona un tipo --</option>
                    <option value="alcalde">Alcalde</option>
                    <option value="asociado">Asociado</option>
                    <option value="concejal">Concejal</option>
                </select>
            </div>
        </div>
        <button id="agregar">Agregar</button>
        <a href="{{ route('juntaHazas') }}"class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Volver
        </a>
    </form>
@endsection