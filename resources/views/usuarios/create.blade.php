
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Usuario</span>
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
                        <label class="col-md-4 control-label" for="textinput">Telefono Usuario</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="telefonoUsu" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
                        </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>