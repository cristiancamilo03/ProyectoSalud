@extends('layouts.navbar')

@section('header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idHistorial') }}
            {{ Form::text('idHistorial', $historialclinico->idHistorial, ['class' => 'form-control' . ($errors->has('idHistorial') ? ' is-invalid' : ''), 'placeholder' => 'Idhistorial']) }}
            {!! $errors->first('idHistorial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombrePaciente') }}
            {{ Form::text('NombrePaciente', $historialclinico->NombrePaciente, ['class' => 'form-control' . ($errors->has('NombrePaciente') ? ' is-invalid' : ''), 'placeholder' => 'Nombrepaciente']) }}
            {!! $errors->first('NombrePaciente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoPaciente') }}
            {{ Form::text('ApellidoPaciente', $historialclinico->ApellidoPaciente, ['class' => 'form-control' . ($errors->has('ApellidoPaciente') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaciente']) }}
            {!! $errors->first('ApellidoPaciente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EdadPaciente') }}
            {{ Form::text('EdadPaciente', $historialclinico->EdadPaciente, ['class' => 'form-control' . ($errors->has('EdadPaciente') ? ' is-invalid' : ''), 'placeholder' => 'Edadpaciente']) }}
            {!! $errors->first('EdadPaciente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaHistorial') }}
            {{ Form::text('FechaHistorial', $historialclinico->FechaHistorial, ['class' => 'form-control' . ($errors->has('FechaHistorial') ? ' is-invalid' : ''), 'placeholder' => 'Fechahistorial']) }}
            {!! $errors->first('FechaHistorial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DescripcionHistorial') }}
            {{ Form::text('DescripcionHistorial', $historialclinico->DescripcionHistorial, ['class' => 'form-control' . ($errors->has('DescripcionHistorial') ? ' is-invalid' : ''), 'placeholder' => 'Descripcionhistorial']) }}
            {!! $errors->first('DescripcionHistorial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $historialclinico->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $historialclinico->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FirmaPaciente') }}
            {{ Form::text('FirmaPaciente', $historialclinico->FirmaPaciente, ['class' => 'form-control' . ($errors->has('FirmaPaciente') ? ' is-invalid' : ''), 'placeholder' => 'Firmapaciente']) }}
            {!! $errors->first('FirmaPaciente', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection