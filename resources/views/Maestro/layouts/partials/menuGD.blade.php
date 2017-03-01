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
        <li class="active"><a {!!link_to('/AgregarDocumentosM', $title = 'Agregar Documentos') !!}</a></li>
        <li><a {!!link_to('/VerDocumentosM', $title = 'Ver Documentos') !!}</a></li>
      </ul>

      <form class="navbar-form navbar-right">
        <a href="http://132.248.38.20/contenido_wp/wp-content/uploads/2016/04/Licenciatura_2016-2017.pdf" class="btn btn-primary btn-sm" role="button" aria-pressed="true" target="blank">Calendario Escolar</a>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>