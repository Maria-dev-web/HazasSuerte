@extends ('layouts.plantilla')

@section('title', 'Herederos')

@section('content')

    <h1>AGREGUE UN NUEVO HEREDERO</h1>

    <form action="" method="POST">

        <fieldset>

            <legend>Datos Personales</legend>

            <div class="formRow">
                <div class="formGroup">
                    <label for="idHeredero">ID Heredero:</label>
                    <input type="text" id="idHeredero" name="idHeredero" required>
                </div>
                <div class="formGroup">
                    <label for="idHabitante">ID Habitante:</label>
                    <input type="text" id="idHabitante" name="idHabitante" required>
                </div>
            </div>

            <div class="formRow">
                <div class="formGroup">
                    <label for="orden">Orden:</label>
                    <input type="number" id="orden" name="orden" required>
                </div>
                <div class="formGroup">
                    <label for="apellido1">Apellido 1:</label>
                    <input type="text" id="apellido1" name="apellido1" required>
                </div>
            </div>

            <div class="formRow">
                <div class="formGroup">
                    <label for="apellido2">Apellido 2:</label>
                    <input type="text" id="apellido2" name="apellido2" required>
                </div>
                <div class="formGroup">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
            </div>

            <div class="formRow">
                <div class="formGroup">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div class="formGroup">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

        </fieldset>

        <fieldset>

            <legend>Domicilio</legend>

            <div class="formRow">
                <div class="formGroup">
                    <label for="tipo">Tipo:</label>
                    <select id="tipo" name="tipo" required>
                        <option value="" disabled selected>-- Selecciona un tipo --</option>
                        <option value="calle">Calle</option>
                        <option value="plaza">Plaza</option>
                        <option value="avenida">Avenida</option>
                        <option value="paseo">Paseo</option>
                        <option value="callejon">Callejón</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="nombreDireccion">Nombre Dirección:</label>
                    <input type="text" id="nombreDireccion" name="nombreDireccion" required>
                </div>
            </div>

            <div class="formRow">
                <div class="formGroup">
                    <label for="numero">Número:</label>
                    <input type="text" id="numero" name="numero" required>
                </div>
                <div class="formGroup">
                    <label for="bloque">Bloque:</label>
                    <input type="text" id="bloque" name="bloque" required>
                </div>
            </div>

            <div class="formRow">
                <div class="formGroup">
                    <label for="escalera">Escalera:</label>
                    <input type="text" id="escalera" name="escalera" required>
                </div>
                <div class="formGroup">
                    <label for="piso">Piso:</label>
                    <input type="text" id="piso" name="piso" required>
                </div>
            </div>

            <div class="formRow">
                <div class="formGroup">
                    <label for="puerta">Puerta:</label>
                    <input type="text" id="puerta" name="puerta" required>
                </div>
                <div class="formGroup">
                    <label for="cp">CP:</label>
                    <input type="text" id="cp" name="cp" required>
                </div>
            </div>

        </fieldset>

        <button id="agregar">Agregar</button>

        <a href="{{ route('herederos') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Volver
        </a>
    </form>
@endsection