<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="../css/iconoG.ico" type="image/x-icon" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GHC| Inicio Sesion</title>
</head>
<body style="background: #3DBEE5">
<form method="POST" action="{{ route('login.verify') }}">
    @csrf

<div class="login">
    <div class="form">
    <img src="../../css/Icono.svg"  alt="">
      <input type="email" name="correoUsuario" placeholder="Correo" required>
      <input type="password" name="contraseñaUsuario" placeholder="Contraseña" required>
      <input type="submit" value="Iniciar Sesion" class="submit">
      <center>
      <a href="{{ url('registrarse/create' ) }}"<button class="btn btn-info">Registrarse</button></a>
      </center>
      <center>
      <a href="{{ url('inicio') }}"<button class="btn btn-info" style="margin-top: 15px">Volver al Inicio</button></a>
      </center>
    </div>
  </div>
@if (session('mensaje'))
    <center><p>{{ session('mensaje') }}</p></center>
@endif
</form>
</body>
</html>