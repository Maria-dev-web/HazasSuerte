@extends ('layouts.plantilla')

@section('title', 'Sorteo')

@section('content')

    <h1> AGREGUE UN NUEVO SORTEO</h1>

    <form action="" method="POST">

        <div class="formRow">
            <div class="formGroup">
                <label for="idSorteo">ID Sorteo:</label>
                <input type="text" id="idSorteo" name="idSorteo" required>
            </div>
            <div class="formGroup">
                <label for="idHabitante">ID Habitante:</label>
                <input type="text" id="idHabitante" name="idHabitante" required>
            </div>
        </div>

        <div class="formRow">
            <div class="formGroup">
                <label for="idHaza">ID Haza:</label>
                <input type="text" id="idHaza" name="idHaza" required>
            </div>
            <div class="formGroup">
                <label for="fechaSorteo">Fecha del sorteo:</label>
                <input type="date" id="fechaSorteo" name="fechaSorteo" required>
            </div>
        </div>

        <button id="agregar">Agregar</button>
        <a href="{{ route('sorteo') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17L4 12L9 7" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 4V20" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Volver
        </a>
    </form>
@endsection