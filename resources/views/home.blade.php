@extends('layouts.app')

@section('content')
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

                    {{ __('Bienvenido!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center align-items-center" style="margin-top: 5rem;">
            <h1 class="alig-text-center">XNET</h1>
            </div>
</div>
@endsection
