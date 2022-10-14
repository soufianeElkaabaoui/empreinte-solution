@if ($paginator->hasPages())
    <div class="clearfix">
        <div class="hint-text m-2 mb-4">
            Montrant <b>{{ $paginator->count() }}</b> entrées sur <b>{{ $paginator->total() }}</b>
        </div>
        <ul class="pagination">
            @if (!$paginator->onFirstPage())
                <li class="page-item  m-2 "><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
            @endif
            <li class="page-item active "><a href="{{$paginator->url($paginator->currentPage())}}" class="page-link">{{$paginator->currentPage()}}</a></li>
            {{-- <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li> --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link">Next</a></li>
            @endif
        </ul>
    </div>
@endif
