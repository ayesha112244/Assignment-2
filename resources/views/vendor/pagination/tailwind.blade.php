@if ($paginator->hasPages())
    <nav class="flex items-center justify-center mt-6">
        <ul class="inline-flex items-center space-x-1">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="px-3 py-2 text-sm text-gray-400 bg-white border rounded-lg cursor-not-allowed">
                        ‹
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                       class="px-3 py-2 text-sm text-gray-700 bg-white border rounded-lg hover:bg-green-100">
                        ‹
                    </a>
                </li>
            @endif

            {{-- Pages --}}
            @foreach ($elements as $element)

                @if (is_string($element))
                    <li>
                        <span class="px-3 py-2 text-sm text-gray-400">…</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span
                                    class="px-3 py-2 text-sm font-bold text-white bg-green-600 border rounded-lg">
                                    {{ $page }}
                                </span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                   class="px-3 py-2 text-sm text-gray-700 bg-white border rounded-lg hover:bg-green-100">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif

            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"
                       class="px-3 py-2 text-sm text-gray-700 bg-white border rounded-lg hover:bg-green-100">
                        ›
                    </a>
                </li>
            @else
                <li>
                    <span class="px-3 py-2 text-sm text-gray-400 bg-white border rounded-lg cursor-not-allowed">
                        ›
                    </span>
                </li>
            @endif

        </ul>
    </nav>
@endif
