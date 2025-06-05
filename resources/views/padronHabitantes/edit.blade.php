@extends('layouts.plantilla')

@section('title', 'Editar Padrón Habitantes')

@section('content')
    <h1>Editar Habitante</h1>

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

    <form action="{{ route('updatePadronHabitantes', $padronHabitantes->idHabitante) }}" method="POST">
        @csrf
        @method('PUT')

        <fieldset>
            <legend>Datos Personales</legend>
            <div class="formRow">
                <div class="formGroup">
                    <label for="idHabitante">ID Habitante:</label>
                    <input type="text" id="idHabitante" name="idHabitante" value="{{ old('idHabitante', $padronHabitantes->idHabitante) }}" readonly>
                </div>
                <div class="formGroup">
                    <label for="apellido1">Apellido 1:</label>
                    <input type="text" id="apellido1" name="apellido1" value="{{ old('apellido1', $padronHabitantes->apellido1) }}">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="apellido2">Apellido 2:</label>
                    <input type="text" id="apellido2" name="apellido2" value="{{ old('apellido2', $padronHabitantes->apellido2) }}">
                </div>
                <div class="formGroup">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $padronHabitantes->nombre) }}">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Domicilio</legend>
            <div class="formRow">
                <div class="formGroup">
                    <label for="domicilioOriginal">Dirección completa (original):</label>
                    <input type="text" id="domicilioOriginal" name="domicilioOriginal" value="{{ old('domicilioOriginal', $padronHabitantes->domicilioOriginal) }}">
                </div>
                <div class="formGroup">
                    <label for="tipoDireccion">Tipo:</label>
                    <select id="tipoDireccion" name="tipoDireccion">
                        <option value="" disabled {{ old('tipoDireccion', $padronHabitantes->tipoDireccion) ? '' : 'selected' }}>-- Selecciona un tipo --</option>
                        <option value="calle" {{ old('tipoDireccion', strtolower($padronHabitantes->tipoDireccion)) == 'calle' ? 'selected' : '' }}>Calle</option>
                        <option value="plaza" {{ old('tipoDireccion', strtolower($padronHabitantes->tipoDireccion)) == 'plaza' ? 'selected' : '' }}>Plaza</option>
                        <option value="avenida" {{ old('tipoDireccion', strtolower($padronHabitantes->tipoDireccion)) == 'avenida' ? 'selected' : '' }}>Avenida</option>
                        <option value="paseo" {{ old('tipoDireccion', strtolower($padronHabitantes->tipoDireccion)) == 'paseo' ? 'selected' : '' }}>Paseo</option>
                        <option value="callejon" {{ old('tipoDireccion', strtolower($padronHabitantes->tipoDireccion)) == 'callejon' ? 'selected' : '' }}>Callejón</option>
                    </select>
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="nombreDireccion">Nombre Dirección:</label>
                    <input type="text" id="nombreDireccion" name="nombreDireccion" value="{{ old('nombreDireccion', $padronHabitantes->nombreDireccion) }}">
                </div>
                <div class="formGroup">
                    <label for="numeroDireccion">Número:</label>
                    <input type="text" id="numeroDireccion" name="numeroDireccion" value="{{ old('numeroDireccion', $padronHabitantes->numeroDireccion) }}">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="bloqueDireccion">Bloque:</label>
                    <input type="text" id="bloqueDireccion" name="bloqueDireccion" value="{{ old('bloqueDireccion', $padronHabitantes->bloqueDireccion) }}">
                </div>
                <div class="formGroup">
                    <label for="escaleraDireccion">Escalera:</label>
                    <input type="text" id="escaleraDireccion" name="escaleraDireccion" value="{{ old('escaleraDireccion', $padronHabitantes->escaleraDireccion) }}">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="piso">Piso:</label>
                    <input type="text" id="piso" name="piso" value="{{ old('piso', $padronHabitantes->piso) }}">
                </div>
                <div class="formGroup">
                    <label for="puerta">Puerta:</label>
                    <input type="text" id="puerta" name="puerta" value="{{ old('puerta', $padronHabitantes->puerta) }}">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup">
                    <label for="codigoPostal">CP:</label>
                    <input type="text" id="codigoPostal" name="codigoPostal" value="{{ old('codigoPostal', $padronHabitantes->codigoPostal) }}">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Información Adicional</legend>
            <div class="formRow">
                <div class="formGroup">
                    <label for="excluido">Excluido:</label>
                    <input type="checkbox" id="excluido" name="excluido" value="1" {{ old('excluido', $padronHabitantes->excluido) ? 'checked' : '' }}>
                </div>
                <div class="formGroup">
                    <label for="fechaExclusion">Fecha de Exclusión:</label>
                    <input type="date" id="fechaExclusion" name="fechaExclusion" value="{{ old('fechaExclusion', $padronHabitantes->fechaExclusion) }}">
                </div>
            </div>
            <div class="formRow">
                <div class="formGroup" style="width:100%">
                    <label for="observaciones">Observaciones:</label>
                    <textarea id="observaciones" name="observaciones">{{ old('observaciones', $padronHabitantes->observaciones) }}</textarea>
                </div>
            </div>
        </fieldset>

        <div class="formRow">
            <div class="formGroup">
                <button type="submit">Actualizar</button>
            </div>

            <div class="formGroup">
                <button type="button" onclick="abrirModalEliminar()" class="botonEliminar">Eliminar</button>
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

    <!-- Modal Confirmación -->
    <div id="modalEliminar" class="modal">
        <div class="modalContenido">
            <h2>Confirmar Eliminación</h2>
            <p>¿Está seguro de que desea eliminar esta haza? Esta acción no se puede deshacer.</p>
            <div class="modalBotones">
                <form action="{{ route('destroyPadronHabitantes', $padronHabitantes->idHabitante) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="botonConfirmar">Eliminar</button>
                </form>
                <button onclick="cerrarModalEliminar()" class="botonCancelar">Cancelar</button>
            </div>
        </div>
    </div>
@endsection