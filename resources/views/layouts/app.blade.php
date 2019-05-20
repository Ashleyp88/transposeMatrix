<!DOCTYPE html>
<html>
    <head>
        <title>Transpose matrix</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/app.js') }}">
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                 @if(Session::has('ok'))     
                    <div class="alert alert-success m-1">
                        <em> {!! session('ok') !!}</em>
                    </div>
                @elseif(Session::has('errors'))
                    @include('errors.list', [
                        'errors'=>Session('errors')
                    ])
                @endif 
            </div>
        </div>
        @yield('main') 
    </div>
</body>
</html>