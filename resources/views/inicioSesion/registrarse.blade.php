@extends('plantillas.template')

@section('contenedor')
<h1>Nuevo Usuario</h1>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="mt-5">
        <label class="form-label" for="name">Nombre Usuario</label>
        <input value="{{ old('name') }}" class="form-control" type="text" id="name" name="name">
        <strong class="text-danger">{{ $errors->first('name') }}</strong>
        </div>
        <div class="mt-4">
            <label class="form-label" for="email">Email</label>
            <input value="{{ old('email') }}" class="form-control" type="text" id="email" name="email">
            <strong class="text-danger">{{ $errors->first('email') }}</strong>
        </div>
        <div class="mt-4">
            <label class="form-label" for="password">Contraseña</label>
            <input value="{{ old('password') }}" class="form-control" type="password" id="password" name="password">
            <strong class="text-danger">{{ $errors->first('password') }}</strong>
        </div>
        <div class="mt-4">
            <label class="form-label" for="password1">Confirmar contraseña</label>
            <input class="form-control" type="password" id="password1" name="password_confirmation">
        </div>
        <div class="mt-4">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

    </form>
@endsection