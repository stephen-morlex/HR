@if ($this->sortField !== $field)
    <svg viewBox="0 0 20 20" class="h-6 w-5 fill-current text-gray-400 ml-2">
        <path fill="none" d="M0 0h20v20H0Z" />
        <path d="M16 11H4c-.55 0-1-.45-1-1v0c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v0c0 .55-.45 1-1 1Z" />
    </svg>
@elseif ($this->sortAsc)
    <svg viewBox="0 0 24 24" class="h-6 w-6 ml-2">
        <path fill="none" d="M0 0h24v24H0V0Z" />
        <path d="M7 14l5-5 5 5H7Z" />
    </svg>
@else
    <svg viewBox="0 0 24 24" class="h-6 w-6 ml-2">
        <path fill="none" d="M0 0h24v24H0V0Z" />
        <path d="M7 10l5 5 5-5H7Z" />
    </svg>
@endif
