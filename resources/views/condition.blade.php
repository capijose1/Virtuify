@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido de nuevo te extrañamos') }}</div>

                <div class="card-body">
                <h2  style="text-align: center;">¿Quieres regresar a la familia?</h2>
                <a class="btn btn-success btn-lg" href="{{ route('cconfig.edit', Auth::user()->id) }}" method="POST" style="position: absolute; right: 20px;">Si</a>
                
                <a class="btn btn-danger btn-lg" href="{{route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('No') }}
                                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
