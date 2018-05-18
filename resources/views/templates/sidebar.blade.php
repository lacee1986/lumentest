@extends('master')

@section('template')
    <div id="main" class="container">
        <div class="row">
            {{--Content--}}
            <div class="col-md-8 col-sm-12">
                @yield('content')
            </div>
            {{--Sidebar--}}
            <div class="col-md-4 col-sm-12">
                @include('includes.sidebar')
            </div>
        </div>
    </div>
@endsection
