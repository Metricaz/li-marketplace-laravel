@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden pagination_bc">
            @if ($paginator->onFirstPage())
                <span class="no_pagination_bc">
                    <
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="">
                    <
                </a>
            @endif
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between pagination_bc numbers_bc">
                <div class="arrows-pagination">
                    <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span class="">{{ $element }}</span>
                                </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <span aria-current="page">
                                            <span class="active_pagination_bc">{{ $page }}</span>
                                        </span>
                                    @else
                                        <a href="{{ $url }}" class="" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                            {{ $page }}
                                        </a>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </span>
                </div>
            </div>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="">
                    >
                </a>
            @else
                <span class="no_pagination_bc">
                    >
                </span>
            @endif
        </div>
    </nav>
@endif
