@extends ('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')

    <h1>AGREGUE UN NUEVO USUARIO</h1>
    <form action="" method="POST">

        <div class="formRow">
            <div class="formGroup">
                <label for="idUsuario">ID Usuario:</label>
                <input type="text" id="idUsuario" name="idUsuario" required>
            </div>
            <div class="formGroup">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="pass">Contraseña:</label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <div class="formGroup">
                <label for="rol">Rol:</label>
                <select id="rol" name="rol" required>
                    <option value="" disabled selected>-- Selecciona un tipo --</option>
                    <option value="root">Root</option>
                    <option value="lectura">Lectura</option>
                    <option value="modificacion">Modificacion</option>
                </select>
            </div>
        </div>

        <button id="agregar">Agregar</button>
        <a href="{{ route('usuarios') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Volver
        </a>
    </form>
@endsection