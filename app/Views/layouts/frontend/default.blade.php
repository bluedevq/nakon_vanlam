<!DOCTYPE html>
<html lang="ja">
@include('layouts.frontend.structures.head')
<body class="{{ getBodyClass() }}">
@include('layouts.frontend.structures.navigation')
<main class="container">
    @yield('content')
</main>
@include('layouts.frontend.structures.footer')
@include('layouts.frontend.elements.modal')
@stack('scripts')
</body>
</html>
