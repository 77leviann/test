<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

@include('layouts.head')

<body class="d-flex flex-column h-100">
    @include('layouts.header')

    <main class="flex-shrink-0">
        @yield('content')
    </main>

    @include('layouts.footer')

    @include('layouts.foot')

</body>

</html>
