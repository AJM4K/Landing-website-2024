<!-- resources/views/vendor/pagination/custom-tailwind.blade.php -->
@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <span class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">
                {!! __('Previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                {!! __('Previous') !!}
            </a>
        @endif

        <!-- Pagination Elements -->
        <div class="flex items-center">
            @php
                $currentPage = $paginator->currentPage();
                $totalPages = $paginator->lastPage();
                $startPage = max(1, $currentPage - 1);
                $endPage = min($totalPages, $currentPage + 2);

                if ($totalPages > 3) {
                    if ($currentPage <= 2) {
                        $endPage = 3;
                    } elseif ($currentPage >= $totalPages - 1) {
                        $startPage = $totalPages - 2;
                    }
                }
            @endphp

            @if ($startPage > 1)
                <a href="{{ $paginator->url(1) }}" class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">1</a>
                @if ($startPage > 2)
                    <span class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 border border-gray-300 rounded-md">...</span>
                @endif
            @endif

            @for ($page = $startPage; $page <= $endPage; $page++)
                @if ($page == $currentPage)
                    <span class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-gray-300 rounded-md">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $paginator->url($page) }}" class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            @if ($endPage < $totalPages)
                @if ($endPage < $totalPages - 1)
                    <span class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 border border-gray-300 rounded-md">...</span>
                @endif
                <a href="{{ $paginator->url($totalPages) }}" class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">{{ $totalPages }}</a>
            @endif
        </div>

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                {!! __('Next') !!}
            </a>
        @else
            <span class="mx-1 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 border border-gray-300 rounded-md cursor-not-allowed">
                {!! __('Next') !!}
            </span>
        @endif
    </nav>
@endif
