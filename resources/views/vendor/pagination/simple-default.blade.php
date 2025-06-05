@if ($paginator->hasPages())
    <nav class="pagination">
        <ul>
            
            @if (!$paginator->onFirstPage())
                <li><a href="{{ $paginator->previousPageUrl() }}">&laquo; Anterior</a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>{{ $page }}</li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}">Siguiente &raquo;</a></li>
            @endif
        </ul>
    </nav>
@endif