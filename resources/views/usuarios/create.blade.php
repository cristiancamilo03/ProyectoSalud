@extends('layouts.navbar')

@section('header')
<link rel="shortcut icon" href="../css/iconoG.ico" type="image/x-icon" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center> 
<section class="content container-fluid" style="margin: 40px 0">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('datos') }} ">
                            @csrf
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre Usuario</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="nombreUsu" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Apellido</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="apellidoUsu" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Correo</label>  
                            <div class="col-md-4">
                            <input id="textinput" name="email" type="email" placeholder="" class="form-control input-md">
                                
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Contraseña</label>  
                                <div class="col-md-4">
                                <input id="textinput" name="password" type="password" placeholder="" class="form-control input-md">
                                    
                                </div>
                                </div>
                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Edad</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="edadUsu" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Dirección Usuario</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="direccionUsu" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Teléfono Usuario</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="telefonoUsu" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Estado Usuario</label>
                            <div class="col-md-4">
                                <select id="selectbasic" name="estadoUsuario" class="form-control">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                                </select>
                            </div>
                            </div>
                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-info" style="margin: 20px">Guardar</button>
                        </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</center>  
@endsection