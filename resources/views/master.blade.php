<!doctype html>
<html lang="en">
<head>

    {{--Head--}}
    @include('includes.head')

</head>
<body>

    {{--Header--}}
    @include('includes.header')

    {{--Navigation--}}
    @include('includes.navigation');

    {{--Content--}}
    @yield('template')

    {{--Footer--}}
    @include('includes.footer')

</body>
</html>