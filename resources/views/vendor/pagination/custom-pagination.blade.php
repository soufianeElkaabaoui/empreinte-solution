@if ($members->hasPages())
    <div class="clearfix">
        <div class="hint-text m-2 mb-4">
            Montrant <b>{{ $members->count() }}</b> entrées sur <b>{{ $members->total() }}</b>
        </div>
        <ul class="pagination">
            @if (!$members->onFirstPage())
                <li class="page-item  m-2 "><a href="{{ $members->previousPageUrl() }}">Previous</a></li>
            @endif
            <li class="page-item active "><a href="{{$members->url($members->currentPage())}}" class="page-link">{{$members->currentPage()}}</a></li>
            {{-- <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li> --}}
            @if ($members->hasMorePages())
                <li class="page-item"><a href="{{ $members->nextPageUrl() }}" class="page-link">Next</a></li>
            @endif
        </ul>
    </div>
@endif
