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
        <li class="active"><a href="{{ route('mat.index') }}">Horario de Clases <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('uni.index') }}">Calendario de Examenes</a></li>
        <li><a href="{{ route('tem.index') }}">Lista de Alumnos</a></li>
        <li><a href="{{ route('tem.index') }}">Calendario de Visitantes</a></li>
        <li><a href="{{ route('tem.index') }}">Carta de Asignación</a></li>
      </ul>

      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>