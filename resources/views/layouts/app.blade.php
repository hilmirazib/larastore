<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>LaraStore | @yield('title')</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    {{-- Navbar --}}
    @include('includes.navbar')

    <!-- Page Content -->
    @yield('content')   

        {{-- footer --}}
    @include('includes.footer')

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

        <!-- Bootstrap core JavaScript -->
        
</body>

</html>