@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
    Элементов на старинце:
    <form style="margin-top: 10px;" method="get" action="{{url('fragrances')}}">
        <select name="perpage">
            <option value="2" @if($paginator->perPage() == 2) selected @endif>2</option>
            <option value="3" @if($paginator->perPage() == 3) selected @endif>3</option>
            <option value="4" @if($paginator->perPage() == 4) selected @endif>4</option>
        </select>
        <input class="btn-submit" type="submit" value="Изменить">
    </form>
@endif
<style>
    .pagination {
        gap: 15px;
        margin-top: 10px;

        a {
            color: black;
            text-decoration: none;
            transition: all 0.2s ease;

            &:hover {
                color: #fb98f1;
            }
        }


    }

    .disabled {
        color: black;
        text-decoration: none;
    }

    select {
        background-color: transparent;
        border: solid 2px black;
        border-radius: 5px;
        padding: 7px 15px;
        margin-right: 15px;
    }

    .btn-submit {
        border: solid 2px black;
        border-radius: 5px;
        background-color: transparent;
        padding: 7px 15px;
        transition: all 0.3s ease;

        &:hover {
            background-color: black;
            color: white;

        }
    }
</style>
