@extends('adminlte::page')
@section('title', 'Crud Laravel v7')
@section('content')
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <a href="{route(tema.mostrarTema)}">Entrar</a>
@stop
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
