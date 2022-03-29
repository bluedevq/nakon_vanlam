<!DOCTYPE html>
<html lang="ja">
@include('layouts.backend.structures.head')
<body class="{{ getBodyClass() }}">
@include('layouts.backend.structures.navigation')
<div class="main flex flex-column flex-root">
    <div class="page flex flex-row flex-column-fluid">
        <div class="wrapper flex flex-column flex-row-fluid">
            <div class="content">
                <div class="container">
                    @include('layouts.backend.elements.messages')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.backend.structures.footer')
@include('layouts.backend.elements.modal')
@stack('scripts')
</body>
</html>
