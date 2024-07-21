@if ($offers->lastPage() > 1)
<div class="flex justify-center mt-[2rem]">
    <ul class="flex gap-[0.5rem]">
        <!-- Previous Page Link -->
        @if ($offers->onFirstPage())
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span aria-hidden="true">&lsaquo;</span>
        </li>
        @else
        <li>
            <a href="{{ $offers->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
        @endif

        <!-- Pagination Elements -->
        @foreach ($offers as $offer)
        <!-- "Three Dots" Separator -->
        @if (is_string($offer))
        <li class="disabled" aria-disabled="true"><span>{{ $offer }}</span></li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($offer))
        @foreach ($offer as $page => $url)
        <li class="{{ $page == $offers->currentPage() ? 'active' : '' }}">
            <a href="{{ $url }}">{{ $page }}</a>
        </li>
        @endforeach
        @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($offers->hasMorePages())
        <li>
            <a href="{{ $offers->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
        @else
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span aria-hidden="true">&rsaquo;</span>
        </li>
        @endif
    </ul>
</div>
@endif