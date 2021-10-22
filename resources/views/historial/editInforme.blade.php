@extends('layouts.navbar')

@section('header')
<link rel="shortcut icon" href="../../css/IconoG.ico" type="image/x-icon" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>GHC| Editar Informe</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <section class="content container-fluid">
        
        <div id="wrapper">          
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Informes</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Crear Informes
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                        <form method="POST" action="{{ url('informes') }}">
                            @csrf

                        <fieldset>

                        <!-- Form Name -->
                       

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                        
                        <input id="textinput" value="{{$informe->nombre}}" name="nombre" type="text" placeholder="" class="form-control input-md">
                            
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Edad</label>  
                        
                        <input id="textinput"value="{{$informe->edad}}" name="edad" type="text" placeholder="" class="form-control input-md">
                            
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Fecha Informe</label>  
                        
                        <input id="textinput" value="{{$informe->fechaNac}}" name="fechaInforme" type="date" placeholder="" class="form-control input-md">
                            
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Documento Identidad</label>  
                        
                        <input id="textinput" value="{{$informe->fechaNac}}"  name="documentoInforme" type="text" placeholder="" class="form-control input-md">
                            
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Entidad</label>  
                        
                        <input id="textinput" value="{{$informe->entidad}}"name="entidadInforme" type="text" placeholder="" class="form-control input-md">
                            
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Dirección</label>  
                        
                        <input id="textinput" value="{{$informe->direccion}}" name="direccionInforme" type="text" placeholder="" class="form-control input-md">
                            
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Teléfono</label>  
                        
                        <input id="textinput"value="{{$informe->telefono}}" name="telefonoPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="featured">Diagnostico</label>  
                        
                        <input id="textinput"value="{{$informe->diagnostico}}" name="diagnostico" type="text" placeholder="" class="form-control input-md">
                            
                        
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Cuidador Primario</label>
                            
                                <select id="selectbasic" value="{{$informe->cuidadorP}}"name="cuidadorP" class="form-control">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                                </select>
                            
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="selectbasic">Conciencia</label>
                                
                                    <select id="selectbasic" value="{{$informe->conciencia}}"name="conciencia" class="form-control">
                                    <option value="Alerta">Alerta</option>
                                    <option value="Somnolencia">Somnolencia</option>
                                    <option value="Coma">Coma</option>
                                    </select>
                                
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="selectbasic">Estado de la Piel</label>
                                    
                                        <select id="selectbasic" value="{{$informe->estadoPiel}}"name="estadoP" class="form-control">
                                        <option value="Integra">Integra</option>
                                        <option value="Zona de Presión">Zona de Presion</option>
                                        <option value="Escara">Escara</option>
                                        </select>
                                    
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Drenajes</label>
                                        
                                            <select id="selectbasic" value="{{$informe->drenajes}}"name="drenaje" class="form-control">
                                            <option value="Biliar">Biliar</option>
                                            <option value="Gastrico">Gastrico</option>
                                            <option value="Otro">Otro</option>
                                            </select>
                                        
                                        </div>                                       
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic">Venopunción</label>
                                                
                                                    <select id="selectbasic" value="{{$informe->venopuncion}}"name="venopuncion" class="form-control">
                                                    <option value="Edema">Edema</option>
                                                    <option value="Rubor">Rubor</option>
                                                    <option value="Calor">Calor</option>
                                                    <option value="Dolor">Dolor</option>
                                                    </select>
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="selectbasic">Alimentación</label>
                                                   
                                                        <select id="selectbasic" name="alimentacion" value="{{$informe->alimentacion}}"class="form-control">
                                                        <option value="Enteral">Enteral</option>
                                                        <option value="Parenteral">Parenteral</option>
                                                        <option value="Oral">Oral</option>
                                                        <option value="Dolor">Dolor</option>
                                                        </select>
                                                    
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="selectbasic">Deposición</label>
                                                                <select id="selectbasic" value="{{$informe->deposicion}}"name="deposición" class="form-control">
                                                                <option value="Normal">Normal</option>
                                                                <option value="Desenterico">Desenterico</option>
                                                                <option value="Estreñido">Estreñido</option>                                                          
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="selectbasic">Orina</label>
                                                                
                                                                    <select id="selectbasic" value="{{$informe->orina}}"name="orina" class="form-control">
                                                                    <option value="Normal">Normal</option>
                                                                    <option value="Retencion">Retencion</option>
                                                                    <option value="Incontinencia">Incontinencia</option>
                                                                    <option value="Sonda Vesical">Sonda Vesical</option>
                                                                    </select>
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="selectbasic">Oxigeno</label>
                                                                    
                                                                        <select id="selectbasic" value="{{$informe->oxigeno}}"name="oxigeno" class="form-control">
                                                                        <option value="Bipap">Bipap</option>
                                                                        <option value="Cipap">Cipap</option>
                                                                        <option value="Concentrador">Concentrador</option>
                                                                        <option value="Bala">Bala</option>
                                                                        <option value="Otro">Otro</option>
                                                                        </select>
                                                                    
                                                                    </div>
                                                    </div>
                                                    <div class="col-lg-6">
               
                                                                        <div class="form-group">
                                                                            <label class="col-md-4 control-label" for="selectbasic">Vomito</label>
                                                                            <select id="selectbasic" value="{{$informe->vomito}}"name="vomito" class="form-control">
                                                                                <option value="Si">Si</option>
                                                                                <option value="No">No</option>
                                                                                </select>                                 
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="selectbasic">Hemovac</label>
                                                                                <select id="selectbasic" name="hemovac" value="{{$informe->hemovac}}"class="form-control">
                                                                                    <option value="Si">Si</option>
                                                                                    <option value="No">No</option>
                                                                                    </select>                                 
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-4 control-label" for="selectbasic">Sonda</label>
                                                                                    <select id="selectbasic" name="sonda" value="{{$informe->sonda}}"class="form-control">
                                                                                        <option value="Si">Si</option>
                                                                                        <option value="No">No</option>
                                                                                        </select>                               
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label" for="selectbasic">Total Liquido Eliminado</label>
                                                                                        <input id="textinput" name="liquidoE"value="{{$informe->liquidoE}}" type="text" placeholder="" class="form-control input-md">                  
                                                                                        </div>
                                                                        <h1>Control de Medicamentos</h1>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="featured">Nombre Medicamento</label>                                                         
                                                                    <input id="textinput" name="nombreM"value="{{$informe->nombreMedicamento}}" type="text" placeholder="" class="form-control input-md">

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label" for="featured">Presentación</label>  
                                                                        
                                                                        <input id="textinput" name="presentacion"value="{{$informe->presentacion }}" type="text" placeholder="" class="form-control input-md">
                                                                            
                                                                        
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-4 control-label" for="featured">Concentración</label>  
                                                                            
                                                                            <input id="textinput" value="{{$informe->concentracion}}"name="concentracion" type="text" placeholder="" class="form-control input-md">
                                                                                
                                                                            
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="featured">Posologia</label>  
                                                                                
                                                                                <input id="textinput" name="posologia" value="{{$informe->posologia}}"type="text" placeholder="" class="form-control input-md">
                                                                                    
                                                                                
                                                                                </div>
                                                                                <div class="form-group">
                                                                                        <label class="col-md-4 control-label" for="featured">Dilución</label>  
                                                                                        
                                                                                        <input id="textinput"value="{{$informe->dilucion}}" name="dilucion" type="text" placeholder="" class="form-control input-md">
                                                                                            
                                                                                
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-4 control-label" for="featured">Via Admon</label>  
                                                                                  
                                                                                    <input id="textinput" value="{{$informe->viaAdmon}}" name="viaAdmon" type="text" placeholder="" class="form-control input-md">
                                                                                        
                                                                            
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="featured">Fecha</label>  
                                                                                
                                                                                <input id="textinput" name="fecha"value="{{$informe->fecha}}" type="date" placeholder="" class="form-control input-md">
                                                                                    
                                                                        
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-4 control-label" for="featured">Hora</label>  
                                                                            
                                                                            <input id="textinput" name="hora" value="{{$informe->hora}}"type="time" placeholder="" class="form-control input-md">
                                                                                
                                                                    
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label" for="featured">Enfermero</label>  
                                                                        
                                                                        <input id="textinput" name="enfermero"value="{{$informe->enfermero}}" type="text" placeholder="" class="form-control input-md">
                                                                            
                                                                
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="selectbasic">Via Administración</label>
                                                                    
                                                                        <select id="selectbasic" value="{{$informe->viaAdministracion}}"name="viaAdministracion" class="form-control">
                                                                        <option value="Intramuscular">Intramuscular</option>
                                                                        <option value="IM">IM</option>
                                                                        <option value="Por sonda Gastronomia">Por sonda Gastronomia</option>
                                                                        <option value="SGY">SGY</option>
                                                                        <option value="Por sonda Nasogastrica">Por sonda Nasogastrica</option>
                                                                        <option value="SNG">SNG</option>
                                                                        <option value="Subcutanea">Subcutanea</option>
                                                                        <option value="SC">SC</option>
                                                                        <option value="Oral">Oral</option>.
                                                                        <option value="OR">OR</option>
                                                                        <option value="Endovenosa">Endovenosa</option>
                                                                        <option value="EV">EV</option>
                                                                        <option value="Por Cateter Venoso Central">Por Cateter Venoso Central</option>
                                                                        <option value="CVC">CVC</option>
                                                                        </select>
                                                                    
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label" for="selectbasic">Observaciones</label>
                                                                        <textarea name="observaciones" value="{{$informe->observaciones}}" class="form-control"></textarea>     
                                                                        
                                                                        </div>                                                                 
                        <!-- Button -->
                        <center>
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-info" style="margin: 40px 0">Guardar</button>
                                <a class="btn btn-info" href="{{ url('informes') }}" style="margin: 40px 20px"> Volver</a>
                            </div>
                            </div>
                        </center>
                        </fieldset>
                        </form>
                    </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
</section>
</center>
@endsection