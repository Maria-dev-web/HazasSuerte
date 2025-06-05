@extends ('layouts.plantilla')

@section('title', 'Padrón de Habitantes')

@section('content')

    <h1> AGREGUE UN NUEVO HABITANTE</h1>

    @if(session('error'))
        <div class="alert alertError">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('storePadronHabitantes') }}" method="POST">
        @csrf

        <fieldset>
            <legend>Datos Personales</legend>
            <div class="formRow">
                <div class="formGroup">
                    <label for="idHabitante">ID Habitante:</label>
                    <input type="text" id="idHabitante" name="idHabitante" required>
                </div>
                <div class="formGroup">
                    <label for="apellido1">Apellido 1:</label>
                    <input type="text" id="apellido1" name="apellido1">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="apellido2">Apellido 2:</label>
                    <input type="text" id="apellido2" name="apellido2">
                </div>
                <div class="formGroup">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Domicilio</legend>
            <div class="formRow">
                <div class="formGroup">
                    <label for="domicilioOriginal">Dirección completa (original):</label>
                    <input type="text" id="domicilioOriginal" name="domicilioOriginal">
                </div>
                <div class="formGroup">
                    <label for="tipoDireccion">Tipo:</label>
                    <select id="tipoDireccion" name="tipoDireccion">
                        <option value="" disabled selected>-- Selecciona un tipo --</option>
                        <option value="calle">Calle</option>
                        <option value="plaza">Plaza</option>
                        <option value="avenida">Avenida</option>
                        <option value="paseo">Paseo</option>
                        <option value="callejon">Callejón</option>
                    </select>
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="nombreDireccion">Nombre Dirección:</label>
                    <input type="text" id="nombreDireccion" name="nombreDireccion">
                </div>
                <div class="formGroup">
                    <label for="numeroDireccion">Número:</label>
                    <input type="text" id="numeroDireccion" name="numeroDireccion">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="bloqueDireccion">Bloque:</label>
                    <input type="text" id="bloqueDireccion" name="bloqueDireccion">
                </div>
                <div class="formGroup">
                    <label for="escaleraDireccion">Escalera:</label>
                    <input type="text" id="escaleraDireccion" name="escaleraDireccion">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="piso">Piso:</label>
                    <input type="text" id="piso" name="piso">
                </div>
                <div class="formGroup">
                    <label for="puerta">Puerta:</label>
                    <input type="text" id="puerta" name="puerta">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="codigoPostal">CP:</label>
                    <input type="text" id="codigoPostal" name="codigoPostal">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Información Adicional</legend>
            <div class="formRow">
                <div class="formGroup">
                    <label for="excluido">Excluido:</label>
                    <input type="checkbox" id="excluido" name="excluido" value="1">
                </div>
                <div class="formGroup">
                    <label for="fechaExclusion">Fecha de Exclusión:</label>
                    <input type="date" id="fechaExclusion" name="fechaExclusion">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup" style="width:100%">
                    <label for="observaciones">Observaciones:</label>
                    <textarea id="observaciones" name="observaciones"></textarea>
                </div>
            </div>
        </fieldset>

        <div class="formRow">
            <div class="formGroup">
                <button type="submit" id="agregar">Agregar</button>
            </div>
            <a href="{{ route('padronHabitantes') }}" class="volver">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Volver
            </a>
        </div>
    </form>
@endsection