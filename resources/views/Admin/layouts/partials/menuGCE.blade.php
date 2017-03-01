<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/general.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/general.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/botonesPanel.css')}}">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('ce.index') }}">Ciclo Escolar <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('plan.index') }}">Plan Estudios</a></li>
        <li><a href="{{ route('sem.index') }}">Semestres</a></li>
        <li><a href="{{ route('gru.index') }}">Grupos</a></li>
      </ul>

      <form class="navbar-form navbar-right">
        <a href="http://132.248.38.20/contenido_wp/wp-content/uploads/2016/04/Licenciatura_2016-2017.pdf" class="btn btn-primary btn-sm" role="button" aria-pressed="true" target="blank">Calendario Escolar</a>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/bootstrap.js"></script>
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>