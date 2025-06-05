@extends ('layouts.plantilla')

@section('title', 'Padrón de Colonos')

@section('content')

    <h1> AGREGUE UN NUEVO COLONO</h1>

    @if(session('error'))
        <div class="alert alertError">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('storePadronColonos') }}" method="POST">
        @csrf

        <fieldset>

            <legend>Datos Personales</legend>

                <div class="formRow">
                    <div class="formGroup">
                        <label for="idColono">ID Colono:</label>
                        <input type="text" id="idColono" name="idColono" required>
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

                <div class="formRow">
                    <div class="formGroup">
                        <label for="apodo">Apodo:</label>
                        <input type="text" id="apodo" name="apodo">
                    </div>
                    <div class="formGroup">
                        <label for="dni">DNI:</label>
                        <input type="text" id="dni" name="dni">
                    </div>
                </div>
        
                <div class="formRow">
                    <div class="formGroup">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono">
                    </div>
                    <div class="formGroup">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>

                <div class="formRow">
                    <div class="formGroup">
                        <label for="idJuntaHazas">ID Junta de Hazas:</label>
                        <input type="text" id="idJuntaHazas" name="idJuntaHazas">
                    </div>
                    <div class="formGroup">
                        <label for="idHabitante">ID Habitante:</label>
                        <input type="text" id="idHabitante" name="idHabitante">
                    </div>
                </div>

        </fieldset>

        <fieldset>

            <legend>Domicilio</legend>

                <div class="formRow">
                    <div class="formGroup">
                        <label for="tipo">Tipo:</label>
                        <select id="tipo" name="tipo">
                            <option value="" disabled selected>-- Selecciona un tipo --</option>
                            <option value="calle">Calle</option>
                            <option value="plaza">Plaza</option>
                            <option value="avenida">Avenida</option>
                            <option value="paseo">Paseo</option>
                            <option value="callejon">Callejón</option>
                        </select>
                    </div>
                    <div class="formGroup">
                        <label for="nombreDireccion">Nombre:</label>
                        <input type="text" id="nombreDireccion" name="nombreDireccion">
                    </div>
                </div>

                <div class="formRow">
                    <div class="formGroup">
                        <label for="numero">Número:</label>
                        <input type="text" id="numero" name="numero">
                    </div>
                    <div class="formGroup">
                        <label for="bloque">Bloque:</label>
                        <input type="text" id="bloque" name="bloque">
                    </div>
                </div>

                <div class="formRow">
                    <div class="formGroup">
                        <label for="escalera">Escalera:</label>
                        <input type="text" id="escalera" name="escalera">
                    </div>
                    <div class="formGroup">
                        <label for="piso">Piso:</label>
                        <input type="text" id="piso" name="piso">
                    </div>
                </div>

                <div class="formRow">
                    <div class="formGroup">
                        <label for="puerta">Puerta:</label>
                        <input type="text" id="puerta" name="puerta">
                    </div>
                    <div class="formGroup">
                        <label for="cp">CP:</label>
                        <input type="text" id="cp" name="cp">
                    </div>
                </div>

        </fieldset>

        <button type="submit" id="agregar">Agregar</button>
        <a href="{{ route('padronColonos') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Volver
        </a>
    </form>
@endsection