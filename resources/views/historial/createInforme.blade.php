@extends('layouts.navbar')

@section('header')
<link rel="shortcut icon" href="../css/iconoG.ico" type="image/x-icon" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

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

                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                        
                        <input id="textinput" name="nombre" type="text" placeholder="" class="form-control input-md">
                        {{ $errors->first("nombre") }}
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Edad</label>  
                        
                        <input id="textinput" name="edad" type="text" placeholder="" class="form-control input-md">
                            
                        {{ $errors->first("edad") }}
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Fecha Informe</label>  
                        
                        <input id="textinput" name="fechaInforme" type="date" placeholder="" class="form-control input-md">
                            
                        {{ $errors->first("fechaInforme") }}
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Documento Identidad</label>  
                        
                        <input id="textinput" name="documentoInforme" type="text" placeholder="" class="form-control input-md">
                            
                        {{ $errors->first("documentoInforme") }}
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Entidad</label>  
                        
                        <input id="textinput" name="entidadInforme" type="text" placeholder="" class="form-control input-md">
                        {{ $errors->first("entidadInforme") }}
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Direcci??n</label>  
                        
                        <input id="textinput" name="direccionInforme" type="text" placeholder="" class="form-control input-md">
                            
                        {{ $errors->first("direccionInforme") }}
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Tel??fono</label>  
                        
                        <input id="textinput" name="telefonoPaciente" type="text" placeholder="" class="form-control input-md">
                        {{ $errors->first("telefonoPaciente") }}
                        
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="featured">Diagnostico</label>  
                        
                        <input id="textinput" name="diagnostico" type="text" placeholder="" class="form-control input-md">
                        {{ $errors->first("diagnostico") }}
                        
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Cuidador Primario</label>
                            
                                <select id="selectbasic" name="cuidadorP" class="form-control">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                                </select>
                                {{ $errors->first("cuidadorP") }}
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="selectbasic">Conciencia</label>
                                
                                    <select id="selectbasic" name="conciencia" class="form-control">
                                    <option value="Alerta">Alerta</option>
                                    <option value="Somnolencia">Somnolencia</option>
                                    <option value="Coma">Coma</option>
                                    </select>
                                    {{ $errors->first("conciencia") }}
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="selectbasic">Estado de la Piel</label>
                                    
                                        <select id="selectbasic" name="estadoP" class="form-control">
                                        <option value="Integra">Integra</option>
                                        <option value="Zona de Presi??n">Zona de Presion</option>
                                        <option value="Escara">Escara</option>
                                        </select>
                                        {{ $errors->first("estadoP") }}
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Drenajes</label>
                                        
                                            <select id="selectbasic" name="drenaje" class="form-control">
                                            <option value="Biliar">Biliar</option>
                                            <option value="Gastrico">Gastrico</option>
                                            <option value="Otro">Otro</option>
                                            </select>
                                            {{ $errors->first("drenaje") }}
                                        </div>                                       
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic">Venopunci??n</label>
                                                
                                                    <select id="selectbasic" name="venopuncion" class="form-control">
                                                    <option value="Edema">Edema</option>
                                                    <option value="Rubor">Rubor</option>
                                                    <option value="Calor">Calor</option>
                                                    <option value="Dolor">Dolor</option>
                                                    </select>
                                                    {{ $errors->first("venopuncion") }}
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="selectbasic">Alimentaci??n</label>
                                                   
                                                        <select id="selectbasic" name="alimentacion" class="form-control">
                                                        <option value="Enteral">Enteral</option>
                                                        <option value="Parenteral">Parenteral</option>
                                                        <option value="Oral">Oral</option>
                                                        <option value="Dolor">Dolor</option>
                                                        </select>
                                                        {{ $errors->first("alimentacion") }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="selectbasic">Deposici??n</label>
                                                                <select id="selectbasic" name="deposici??n" class="form-control">
                                                                <option value="Normal">Normal</option>
                                                                <option value="Desenterico">Desenterico</option>
                                                                <option value="Estre??ido">Estre??ido</option>                                                          
                                                                </select>
                                                                {{ $errors->first("deposici??n") }}
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="selectbasic">Orina</label>
                                                                
                                                                    <select id="selectbasic" name="orina" class="form-control">
                                                                    <option value="Normal">Normal</option>
                                                                    <option value="Retencion">Retencion</option>
                                                                    <option value="Incontinencia">Incontinencia</option>
                                                                    <option value="Sonda Vesical">Sonda Vesical</option>
                                                                    </select>
                                                                    {{ $errors->first("orina") }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="selectbasic">Oxigeno</label>
                                                                    
                                                                        <select id="selectbasic" name="oxigeno" class="form-control">
                                                                        <option value="Bipap">Bipap</option>
                                                                        <option value="Cipap">Cipap</option>
                                                                        <option value="Concentrador">Concentrador</option>
                                                                        <option value="Bala">Bala</option>
                                                                        <option value="Otro">Otro</option>
                                                                        </select>
                                                                        {{ $errors->first("oxigeno") }}
                                                                    </div>
                                                    </div>
                                                    <div class="col-lg-6">
               
                                                                        <div class="form-group">
                                                                            <label class="col-md-4 control-label" for="selectbasic">Vomito</label>
                                                                            <select id="selectbasic" name="vomito" class="form-control">
                                                                                <option value="Si">Si</option>
                                                                                <option value="No">No</option>
                                                                                </select> 
                                                                                {{ $errors->first("vomito") }}                                
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="selectbasic">Hemovac</label>
                                                                                <select id="selectbasic" name="hemovac" class="form-control">
                                                                                    <option value="Si">Si</option>
                                                                                    <option value="No">No</option>
                                                                                    </select>    
                                                                                    {{ $errors->first("hemovac") }}                             
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-4 control-label" for="selectbasic">Sonda</label>
                                                                                    <select id="selectbasic" name="sonda" class="form-control">
                                                                                        <option value="Si">Si</option>
                                                                                        <option value="No">No</option>
                                                                                        </select>  
                                                                                        {{ $errors->first("sonda") }}                             
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label" for="selectbasic">Total Liquido Eliminado</label>
                                                                                        <input id="textinput" name="liquidoE" type="text" placeholder="" class="form-control input-md"> 
                                                                                        {{ $errors->first("liquidoE") }}                  
                                                                                        </div>
                                                                        <h1>Control de Medicamentos</h1>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="featured">Nombre Medicamento</label>                                                         
                                                                    <input id="textinput" name="nombreM" type="text" placeholder="" class="form-control input-md">
                                                                    {{ $errors->first("nombreM") }} 
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label" for="featured">Presentaci??n</label>  
                                                                        
                                                                        <input id="textinput" name="presentacion" type="text" placeholder="" class="form-control input-md">
                                                                            
                                                                        {{ $errors->first("presentacion") }} 
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-4 control-label" for="featured">Concentraci??n</label>  
                                                                            
                                                                            <input id="textinput" name="concentracion" type="text" placeholder="" class="form-control input-md">
                                                                                
                                                                            {{ $errors->first("concentracion") }} 
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="featured">Posologia</label>  
                                                                                
                                                                                <input id="textinput" name="posologia" type="text" placeholder="" class="form-control input-md">
                                                                                    
                                                                                {{ $errors->first("posologia") }}
                                                                                </div>
                                                                                <div class="form-group">
                                                                                        <label class="col-md-4 control-label" for="featured">Diluci??n</label>  
                                                                                        
                                                                                        <input id="textinput" name="dilucion" type="text" placeholder="" class="form-control input-md">
                                                                                            
                                                                                        {{ $errors->first("dilucion") }}
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-4 control-label" for="featured">Via Admon</label>  
                                                                                  
                                                                                    <input id="textinput" name="viaAdmon" type="text" placeholder="" class="form-control input-md">
                                                                                        
                                                                                    {{ $errors->first("viaAdmon") }}
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="featured">Fecha</label>  
                                                                                
                                                                                <input id="textinput" name="fecha" type="date" placeholder="" class="form-control input-md">
                                                                                    
                                                                                {{ $errors->first("fecha") }}
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-4 control-label" for="featured">Hora</label>  
                                                                            
                                                                            <input id="textinput" name="hora" type="time" placeholder="" class="form-control input-md">
                                                                                
                                                                            {{ $errors->first("hora") }}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label" for="featured">Enfermero</label>  
                                                                        
                                                                        <input id="textinput" name="enfermero" type="text" placeholder="" class="form-control input-md">
                                                                            
                                                                        {{ $errors->first("enfermero") }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="selectbasic">Via Administraci??n</label>
                                                                    
                                                                        <select id="selectbasic" name="viaAdministracion" class="form-control">
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
                                                                        {{ $errors->first("viaAdministracion") }}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label" for="selectbasic">Observaciones</label>
                                                                        <textarea name="observaciones" class="form-control"></textarea>   
                                                                        {{ $errors->first("observaciones") }}  
                                                                        </div>                                                                 
                        <!-- Button -->
                    
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-info">Guardar</button>
                                <a class="btn btn-info" href="{{ url('informes') }}"> Volver</a>
                            </div>
                            </div>
 
                        </fieldset>
                        </form>
                    </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
@endsection