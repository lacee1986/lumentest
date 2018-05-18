<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>This is a Lumen Framework Test Application</title>
    <link href="{{ url('/css/styles.css')}}" rel="stylesheet">

    {{--Additional CSS--}}
    @yield('stylesheet')

</head>
<body>

    {{--Header--}}
    <header>
        @include('includes.header')
    </header>

    {{--Content--}}
    <div class="container">
        <div id="main" class="row">
            @yield('content')
        </div>
    </div>

    {{--Footer--}}
    <footer class="row">
        @include('includes.footer')
    </footer>

    {{--Scripts--}}
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

    {{--Additional javascript--}}
    @yield('javascript')

</body>
</html>