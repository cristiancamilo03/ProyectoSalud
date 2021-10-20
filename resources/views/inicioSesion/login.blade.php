<link rel="stylesheet" href="css/estilo.css">
<form method="POST" action="{{ route('login.verify') }}">
    @csrf
<div class="login">
    <div class="form">
      <h2>Bienvenido</h2>
      <input type="email" name="correoUsuario" placeholder="Correo">
      <input type="password" name="contraseñaUsuario" placeholder="Contraseña">
      <input type="submit" value="Iniciar Sesion" class="submit">
    </div>
  </div>
@if (session('mensaje'))
    <center><p>{{ session('mensaje') }}</p></center>
@endif
</form>