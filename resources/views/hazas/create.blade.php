@extends ('layouts.plantilla')

@section('title', 'Hazas')

@section('content')

    <h1> AGREGUE UNA NUEVA HAZA</h1>

    @if(session('error'))
        <div class="alert alertError">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('storeHazas') }}" method="POST">
        @csrf

        <div class="formRow">
            <div class="formGroup">
                <label for="idHaza">ID Haza:</label>
                <input type="text" id="idHaza" name="idHaza" required>
            </div>
            <div class="formGroup">
                <label for="registro">Nº Haza:</label>
                <input type="text" id="registro" name="registro">
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="partido">Partido:</label>
                <select id="partido" name="partido">
                    <option value="" disabled selected>-- Selecciona un tipo --</option>
                    <option value="Manzanete">Manzanete</option>
                    <option value="Bujar">Bujar</option>
                    <option value="Marmosilla">Marmosilla</option>
                    <option value="Algar">Algar</option>
                    <option value="Cantarranas">Cantarranas</option>
                    <option value="Compradizas">Compradizas</option>
                    <option value="El águila">El águila</option>
                    <option value="Las Corderas">Las Corderas</option>
                </select>
            </div>
            <div class="formGroup">
                <label for="hectareas">Hectáreas:</label>
                <input type="number" id="hectareas" name="hectareas" step="0.01">
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="rentaAnual">Renta Anual:</label>
                <input type="number" id="rentaAnual" name="rentaAnual" step="0.01">
            </div>
            <div class="formGroup">
                <label for="uso">Uso:</label>
                <select id="uso" name="uso">
                    <option value="" disabled selected>-- Selecciona un tipo --</option>
                    <option value="Cultivo">Cultivo</option>
                    <option value="Arrendamiento">Arrendamiento</option>
                    <option value="Venta">Venta</option>
                    <option value="Militar">Militar</option>
                </select>
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="localizacion">Localización:</label>
                <input type="text" id="localizacion" name="localizacion">
            </div>
            <div class="formGroup">
                <label for="caballerizas">Caballerizas:</label>
                <input type="text" id="caballerizas" name="caballerizas">
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="fechaInicio">Fecha de Inicio:</label>
                <input type="date" id="fechaInicio" name="fechaInicio">
            </div>
            <div class="formGroup">
                <label for="fechaFin">Fecha de Fin:</label>
                <input type="date" id="fechaFin" name="fechaFin">
            </div>
        </div>

        <button type="submit" id="agregar">Agregar</button>
        <a href="{{ route('hazas') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        Volver
        </a>
    </form>

@endsection