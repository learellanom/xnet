<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamento') }}
            {{ Form::select('departamento', 
                [
                    'Atencion al cliente' => 'Atencion al cliente',
                    'Recursos Humanos' => 'Recursos Humanos',
                    'Comercial' => 'Comercial',
                    'Limpieza' => 'Limpieza',
                    'Planta de reciclaje' => 'Planta de reciclaje',
                ],
                $user->departamento, 
                ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']
                ) 
            }}
            {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('rol') }}
            {{ Form::select('rol', 
                [
                    'Jefe' => 'Jefe',
                    'Responsable de equipo' => 'Responsable de equipo',
                    'Empleado' => 'Empleado',
                ],
                $user->rol, 
                ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'rol']
                ) 
            }}
            {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>