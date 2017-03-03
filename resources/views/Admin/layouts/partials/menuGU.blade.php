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
        <li><a href="{{ route('alu.index') }}">Alumnos <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('mae.index') }}">Maestros</a></li>
      </ul>

      <form class="navbar-form navbar-right">
        <a href="/CalendariosEscolares/Licenciatura_2016-2017.pdf" class="btn btn-primary btn-sm" role="button" aria-pressed="true" target="blank">Calendario Escolar</a>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>