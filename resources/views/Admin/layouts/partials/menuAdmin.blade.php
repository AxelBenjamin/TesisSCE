<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="list-group">
      <a href="{{ route('alu.index') }}" class="list-group-item">Gestión de Usuarios</a>
      <a href="{{ route('mat.index') }}" class="list-group-item">Gestión de Materias</a>
      <a href="{{route('ce.index') }}" class="list-group-item">Gestión de Ciclo Escolar</a>
      <a> {!!link_to('/AgregarDocumentos', $title = 'Gestión de Documentos', $attributes = ['class' => 'list-group-item']) !!}</a>
    </div>
  </div>
</div>