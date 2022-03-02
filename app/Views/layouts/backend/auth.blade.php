<!DOCTYPE html>
<html lang="ja">
@include('layouts.backend.structures.head')
<body class="{{ getBodyClass() }}">
<main class="container custom-label">
    @yield('content')
</main>
@include('layouts.backend.structures.footer_js')
@include('layouts.backend.elements.trans')
@stack('scripts')
</body>
</html>
