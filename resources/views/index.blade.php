@extends('layouts.app')

@section('main')
    <h1 class="text-center">Transpose matrix</h1>
    <div class="row mb-5">
        <div class="col-lg-8 offset-lg-4">
           <form action="{{ route('matrix') }}" method="get">
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
@endsection
