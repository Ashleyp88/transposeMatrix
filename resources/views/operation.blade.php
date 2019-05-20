<!DOCTYPE html>
<html>
    <head>
        <title>Transpose matrix</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/app.js') }}">
    </head>
<body>
    <div class="container">
            <h1 class="text-center">Transpose matrix</h1>
            <div class="row mb-5">
                <div class="col-lg-8 offset-lg-4">
                   <form action="{{ route('matrix') }}" method="POST">
                        @csrf
                        <fieldset>Give the matrix dimension</fieldset>
                      <div class="form-row">
                        <div class="col-lg-3">
                          <input type="text" class="form-control" placeholder="put the x value" name="x">
                        </div>
                        <div class="col-lg-3">
                          <input type="text" class="form-control" placeholder="put the Y value" name="y">
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" value="setup" class="btn btn-primary">
                        </div>
                      </div>
                    </form>                    
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-8 offset-lg-4">
                    <br>
                    <form id="inputField" role="form">

                        @isset($x)
                            @for ($a = 0; $a < $x; $a++)
                                @for ($b = 0; $b < $y; $b++)
                                   @include('partials.row',[
                                        'x'=>$x,
                                        'y'=>$y
                                   ])
                                @endfor
                                @include('partials.line')
                            @endfor                            
                        @endisset                        
                    </form>
                </div>
            </div>
    </div>
</body>
</html>