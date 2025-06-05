@extends('layouts.plantilla')

@section('title', 'Editar Haza')

@section('content')
    <h1>Editar Haza</h1>

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

    <form action="{{ route('updateHaza', $haza->idHaza) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="formRow">
            <div class="formGroup">
                <label for="idHaza">ID Haza</label>
                <input type="text" name="idHaza" id="idHaza" value="{{ old('idHaza', $haza->idHaza) }}" readonly>
            </div>
            <div class="formGroup">
                <label for="nHaza">Número de Haza</label>
                <input type="text" name="nHaza" id="nHaza" value="{{ old('nHaza', $haza->nHaza) }}">
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="partido">Partido</label>
                <select name="partido" id="partido">
                    <option value="" disabled {{ old('partido', $haza->partido) ? '' : 'selected' }}>-- Selecciona un tipo --</option>
                    <option value="Manzanete" {{ old('partido', $haza->partido) == 'Manzanete' ? 'selected' : '' }}>Manzanete</option>
                    <option value="Bujar" {{ old('partido', $haza->partido) == 'Bujar' ? 'selected' : '' }}>Bujar</option>
                    <option value="Marmosilla" {{ old('partido', $haza->partido) == 'Marmosilla' ? 'selected' : '' }}>Marmosilla</option>
                    <option value="Algar" {{ old('partido', $haza->partido) == 'Algar' ? 'selected' : '' }}>Algar</option>
                    <option value="Cantarranas" {{ old('partido', $haza->partido) == 'Cantarranas' ? 'selected' : '' }}>Cantarranas</option>
                    <option value="Compradizas" {{ old('partido', $haza->partido) == 'Compradizas' ? 'selected' : '' }}>Compradizas</option>
                    <option value="El águila" {{ old('partido', $haza->partido) == 'El águila' ? 'selected' : '' }}>El águila</option>
                    <option value="Las Corderas" {{ old('partido', $haza->partido) == 'Las Corderas' ? 'selected' : '' }}>Las Corderas</option>
                </select>
            </div>
            <div class="formGroup">
                <label for="hectareas">Hectáreas</label>
                <input type="number" name="hectareas" id="hectareas" value="{{ old('hectareas', $haza->hectareas) }}">
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="rentaAnual">Renta Anual</label>
                <input type="number" name="rentaAnual" id="rentaAnual" value="{{ old('rentaAnual', $haza->rentaAnual) }}">
            </div>
            <div class="formGroup">
                <label for="uso">Uso</label>
                <select name="uso" id="uso">
                    <option value="" disabled {{ old('uso', $haza->uso) ? '' : 'selected' }}>-- Selecciona un tipo --</option>
                    <option value="Cultivo" {{ old('uso', $haza->uso) == 'Cultivo' ? 'selected' : '' }}>Cultivo</option>
                    <option value="Arrendamiento" {{ old('uso', $haza->uso) == 'Arrendamiento' ? 'selected' : '' }}>Arrendamiento</option>
                    <option value="Venta" {{ old('uso', $haza->uso) == 'Venta' ? 'selected' : '' }}>Venta</option>
                    <option value="Militar" {{ old('uso', $haza->uso) == 'Militar' ? 'selected' : '' }}>Militar</option>
                </select>
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="localizacion">Localización</label>
                <input type="text" name="localizacion" id="localizacion" value="{{ old('localizacion', $haza->localizacion) }}">
            </div>
            <div class="formGroup">
                <label for="caballerizas">Caballerizas</label>
                <input type="text" name="caballerizas" id="caballerizas" value="{{ old('caballerizas', $haza->caballerizas) }}">
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="fechaInicio">Fecha Inicio</label>
                <input type="date" name="fechaInicio" id="fechaInicio" value="{{ old('fechaInicio', $haza->fechaInicio) }}">
            </div>
            <div class="formGroup">
                <label for="fechaFin">Fecha Fin</label>
                <input type="date" name="fechaFin" id="fechaFin" value="{{ old('fechaFin', $haza->fechaFin) }}">
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <button type="submit">Actualizar</button>
            </div>

            <div class="formGroup">
            <button type="button" onclick="abrirModalEliminar()" class="botonEliminar">Eliminar</button>
            </div>
            <a href="{{ route('hazas') }}" class="volver">
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
                <form action="{{ route('destroyHaza', $haza->idHaza) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="botonConfirmar">Eliminar</button>
                </form>
                <button onclick="cerrarModalEliminar()" class="botonCancelar">Cancelar</button>
            </div>
        </div>
    </div>
@endsection