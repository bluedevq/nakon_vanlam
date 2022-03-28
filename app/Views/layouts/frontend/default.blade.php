<!DOCTYPE html>
<html>
@include('layouts.frontend.structures.head')
<body class="{{ getBodyClass() }}">
@include('layouts.frontend.structures.navigation')
@yield('content')
@include('layouts.frontend.structures.footer')
@include('layouts.frontend.elements.modal')
@stack('scripts')
</body>
</html>
