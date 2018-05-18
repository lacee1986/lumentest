@extends('master')

@section('template')
    <div id="main" class="container">
        <div class="row">
            {{--Content--}}
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
