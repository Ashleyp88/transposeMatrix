@extends('layouts.app')

@section('main')

		<div class="row mb-5">
			<div class="col-md-1 offset-md-4">
				@foreach(Session::get('original') as $var)
					@foreach($var as $sub)
						<input type="" name="" readonly="" value="{{$sub}}">
					@endforeach
				@endforeach
		</div>
	</div>

	<div class="row mt-1">
		<div class="col-md-1 offset-md-4">
			@foreach(Session::get('transpose') as $var)
				@foreach($var as $sub)
					<input type="" name="" readonly="" value="{{$sub}}">
				@endforeach
			@endforeach			
		</div>
	</div>

@endsection
