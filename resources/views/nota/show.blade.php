@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? "{{ __('Show') Nota" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Userid:</strong>
                            {{ $nota->userId }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $nota->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $nota->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Clientepersona:</strong>
                            {{ $nota->clientePersona }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $nota->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonocontacto:</strong>
                            {{ $nota->telefonoContacto }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $nota->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $nota->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Fechacrea:</strong>
                            {{ $nota->fechaCrea }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaguarda:</strong>
                            {{ $nota->fechaGuarda }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaelimina:</strong>
                            {{ $nota->fechaElimina }}
                        </div>
                        <div class="form-group">
                            <strong>Fechareactiva:</strong>
                            {{ $nota->fechaReactiva }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
