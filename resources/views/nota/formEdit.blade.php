@php
use Carbon\Carbon;
@endphp
<style>
    .form-control {
        background-color: white !important;
        color: gray !important
    }
    .card-body {
        background-color: white !important;
        padding: 50px !important;
        font-weight: bold;
    }
    .form-group{
        margin-top: 1rem !important;
    }
    .myReadOnly {
        background-color: LightGray !important;
        color: black !important;
        font-weight: bold !important;
    }
</style>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group col-md-2 col-12 ">
            <!-- . ' - ' . auth()->user()->name -->
            Usuario Sesion : 
            {{ Form::label('Usuario Sesion : ', auth()->id()) }}  
            {{ Form::label('',auth()->user()->name) }}  
        </div>   
        <hr>    
        <div class="form-group col-md-2 col-12 ">
            <!-- . ' - ' . auth()->user()->name -->
            {{ Form::label('Usuario Carga : ') }}  
            {{ Form::label('',auth()->user()->name) }}  
            {{ Form::text('userId', auth()->id() , ['class' => 'form-control myReadOnly' . ($errors->has('userId') ? ' is-invalid' : ''), 'placeholder' => 'Userid', 'readonly' => true]) }}
            {!! $errors->first('userId', '<div class="invalid-feedback">:message</div>') !!}
           
        </div>
        
        <div class="form-group col-md-4 col-12">
            {{ Form::label('departamento') }}
            <!-- {{ Form::text('departamento', $nota->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }} -->
            <br>
            {{ Form::select('departamento',
                [
                    'Atencion al Cliente'   => 'Atencion al Cliente',
                    'Recursos Humanos'      => 'Recursos Humanos',
                    'Comercial'             => 'Comercial',
                    'Limpieza'              => 'Limpieza',
                    'Planta e reciclaje'    => 'Planta e reciclaje'
                ],
                $nota->departamento,
                ['class' => 'form-control myReadOnly', 'placeholder' => 'Selecciona un departamento...', 'readonly' => true, 'disabled' => true]
                ) }}

                {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}

        </div>
        
        <div class="form-group col-md-12 col-12">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $nota->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4 col-12">
            {{ Form::label('clientePersona') }}
            {{ Form::text('clientePersona', $nota->clientePersona, ['class' => 'form-control myReadOnly' . ($errors->has('clientePersona') ? ' is-invalid' : ''), 'placeholder' => 'Clientepersona', 'readonly' => true]) }}
            {!! $errors->first('clientePersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4 col-12">
            {{ Form::label('empresa') }}
            {{ Form::text('empresa', $nota->empresa, ['class' => 'form-control myReadOnly' . ($errors->has('empresa') ? ' is-invalid' : ''), 'placeholder' => 'Empresa', 'readonly' => true] ) }}
            {!! $errors->first('empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4 col-12">
            {{ Form::label('telefonoContacto') }}
            {{ Form::text('telefonoContacto', $nota->telefonoContacto, ['class' => 'form-control myReadOnly' . ($errors->has('telefonoContacto') ? ' is-invalid' : ''), 'placeholder' => 'Telefonocontacto', 'readonly' => true]) }}
            {!! $errors->first('telefonoContacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-2 col-12">
            {{ Form::label('estado') }}
            <!-- {{ Form::text('estado', $nota->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }} -->

            {{ Form::select('estado',
                [
                    'Pendiente'   => 'Pendiente',
                    'En proceso'      => 'En proceso',
                    'Terminado'             => 'Terminado',
                ],
                'Pendiente',
                ['class' => 'form-control', 'placeholder' => 'Selecciona un Estado...']
                ) }}

                {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}

            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-12 col-12">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $nota->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4 col-12">
        
            {{ Form::label('fechaCrea') }}
            {{ Form::date('fechaCrea', Carbon::now(), ['class' => 'form-control myReadOnly' . ($errors->has('fechaCrea') ? ' is-invalid' : ''), 'placeholder' => 'Fechacrea', 'readonly' => true]) }}
            {!! $errors->first('fechaCrea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4 col-12">
            {{ Form::label('fechaGuarda') }}
            {{ Form::date('fechaGuarda', $nota->fechaGuarda, ['class' => 'form-control myReadOnly' . ($errors->has('fechaGuarda') ? ' is-invalid' : ''), 'placeholder' => 'Fechaguarda', 'readonly' => true]) }}
            {!! $errors->first('fechaGuarda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4 col-12">
            {{ Form::label('fechaElimina') }}
            {{ Form::date('fechaElimina', $nota->fechaElimina, ['class' => 'form-control myReadOnly' . ($errors->has('fechaElimina') ? ' is-invalid' : ''), 'placeholder' => 'Fechaelimina', 'readonly' => true]) }}
            {!! $errors->first('fechaElimina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4 col-12">
            {{ Form::label('fechaReactiva') }}
            {{ Form::date('fechaReactiva', $nota->fechaReactiva, ['class' => 'form-control myReadOnly' . ($errors->has('fechaReactiva') ? ' is-invalid' : ''), 'placeholder' => 'Fechareactiva', 'readonly' => true]) }}
            {!! $errors->first('fechaReactiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>