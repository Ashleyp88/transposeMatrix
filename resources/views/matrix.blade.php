@extends('layouts.app')

@section('main')
    <h1 class="text-center">Transpose matrix</h1>
        <div class="row mb-5">
            <div class="col-lg-8 offset-lg-4">
                <form action="{{ route('transpose') }}" method="get">
                        @csrf
                        @isset($x)
                            @for($b = 0; $b < $y; $b++)
                                @for ($a = 0; $a < $x; $a++)
                                    @include('partials.row',[
                                        'x'=>$b,
                                        'y'=>$a
                                    ])
                                @endfor
                                @include('partials.line')
                            @endfor                            
                        @endisset
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <input type="submit" value="calculate" class="btn btn-primary">
                        </div>
                    </div>                       
                </form>
            </div>
        </div>
@endsection
