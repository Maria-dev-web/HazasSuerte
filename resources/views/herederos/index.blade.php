@extends ('layouts.plantilla')

@section('title', 'Herederos')

@section('content')
    <h1>HEREDEROS</h1>
    <nav>
        <a href="{{ route('createHerederos') }}">Crear nuevo</a>
                <a href="{{ route('home') }}" class="volver">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 12L12 3l9 9" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 21V15h6v6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Página principal
        </a>
      </nav>

    <h3>Estamos trabajando en la página. Disculpen las molestias.</h3>
@endsection