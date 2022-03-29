<div class="mt-4 flex align-items-center">
    <nav class="flex align-items-center ml-auto page-controls">
        {{ $entities->appends(request()->all())->links('layouts.backend.elements._paging') }}
    </nav>
</div>
