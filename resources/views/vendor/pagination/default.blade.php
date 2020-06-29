@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li>
                <a class="pagination__link" disabled> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
        @else
            <li>
                <a class="pagination__link" href="{{ $paginator->previousPageUrl() }}" rel="prev"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
        @endif

        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li> <a class="pagination__link">{{ $element }}</a> </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())                            
                        <li> <a class="pagination__link pagination__link--active">{{ $page }}</a> </li>
                    @else
                        <li> <a class="pagination__link" href="{{ $url }}">{{ $page }}</a> </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li>
                <a class="pagination__link" href="{{ $paginator->nextPageUrl() }}" rel="next"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
        @else                
            <li>
                <a class="pagination__link"disabled> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        @endif
    </ul>
@endif