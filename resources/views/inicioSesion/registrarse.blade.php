<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1>Nuevo Usuario</h1>
    <form method="POST" action="{{ route('registrarse.store') }}">
        @csrf
        <div class="mt-5">
        <label class="form-label" for="name">Nombre Usuario</label>
        <input value="{{ old('name') }}" class="form-control" type="text" id="nombreUsuario" name="nombreUsuario">
        <strong class="text-danger">{{ $errors->first('name') }}</strong>
        </div>
        <div class="mt-4">  
            <label class="form-label" for="email">Email</label>
            <input value="{{ old('email') }}" class="form-control" type="text" id="correoUsuario" name="correoUsuario">
            <strong class="text-danger">{{ $errors->first('email') }}</strong>
        </div>
        <div class="mt-4">
            <label class="form-label" for="password">Contraseña</label>
            <input value="{{ old('password') }}" class="form-control" type="password" id="contraseñaUsuario" name="contraseñaUsuario">
            <strong class="text-danger">{{ $errors->first('password') }}</strong>
        </div>
        <div class="mt-4">
            <label class="form-label" for="password1">Confirmar contraseña</label>
            <input class="form-control" type="password" id="password1" name="password_confirmation">
            <strong class="text-danger">{{ $errors->first('password') }}</strong>
        </div>
        <div class="mt-4">
            <button class="btn btn-info" type="submit">Guardar</button>
        </div>

    </form>