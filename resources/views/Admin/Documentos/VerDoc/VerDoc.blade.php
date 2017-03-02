<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Control Escolar</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/general.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/botonesPanel.css')}}">

</head>

<header>
    <!--Row 1 Titulo y logos-->
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="logoamericana"> <center>
                            <a href="http://www.uaa.edu.mx/" target="_new">
                            <img src="/src/imagenes/logo_americana2.png" class="img-responsive" alt="Responsive image"/> </center>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="logotitulo"><center>
                            <img src="/src/imagenes/logo_titulo2.png" class="img-responsive" alt="Responsive image"/> </center>
                        </div>  
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="logounam"> <center>
                            <a href="http://www.dgire.unam.mx/" target="_new">
                            <img src="/src/imagenes/logo-si-somos-unam2.png" class="img-responsive" alt="Responsive image"/> </center>
                            </a>
                        </div>  
                    </div>     
                </div>
            </div>
    </div>
</header>

<body>


<div class="container-fluid">
    @yield('content')
</div>

<!--Row 2 PEqueño de fecha a la izquierda y cerrar sesión -->
<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row2">
                    
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="fecha">
                        <?php
                        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                        echo $dias[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
                        ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cerrarsesion">

                        
                                <p><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><div align="right"><span class="glyphicon glyphicon-user"></span>Cerrar sesión</div></a></p>
                        

                        </div>  
                    </div>    
                </div>

                </div>
            </div>        
</div>

<!--Row general que contendra a los 3 rows-->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
        <!--Subdividimos este row en 3 columnas-->
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="menuizquierdo"> 
                @include('Admin.layouts.partials.menuAdmin')   
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div style="border-left:1px solid #000; height:550px; border-right:1px solid #000; height:550px; padding:1em">
            @include('Admin.layouts.partials.menuGD') 

            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            {!! link_to_route('alu.index', 'Programa Sintetizado', null, array('class' => 'btn btn-default btn-lg btn-block')); !!}

            {!! link_to('/ProgramaExtendidoAdmin', $title = 'Programa Extendido', $attributes = ['class' => 'btn btn-default btn-lg btn-block']) !!}

            {!! link_to('/AcuerdoGrupoAdmin', $title = 'Acuerdo Grupo', $attributes = ['class' => 'btn btn-default btn-lg btn-block']) !!}

            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

            </div>
            </div><!--Termina Row del contenido de en medio, del panel-->

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="rowderecho">
                    <div class="logoFacultad">
                    <img src="/src/imagenes/logo_computacion.png" class="img-responsive" alt="Responsive image"/>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/bootstrap.js"></script>
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>

</body>
</html>