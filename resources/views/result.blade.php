@extends('layouts.app')

@section('main')
	<h4 class="text-center mt-5 mb-3">Result of the transpose table</h4>
		<div class="row mb-5">
			<div class="col-md-4 offset-md-4 text-center">
				@foreach(Session::get('original') as $var)
					@foreach($var as $sub)
						 @include('partials.row',[
                  'x'=>'0',
                  'y'=>'0',
                  'v'=>$sub
              ])
					@endforeach
					@include('partials.line')
				@endforeach
		</div>
	</div>

	<div class="row mt-1">
		<div class="col-md-4 offset-md-4 text-center">
			@foreach(Session::get('transpose') as $var)
				@foreach($var as $sub)
				  @include('partials.row',[
              'x'=>'0',
              'y'=>'0',
              'v'=>$sub
          ])
				@endforeach
				@include('partials.line')
			@endforeach			
		</div>
	</div>

@endsection
