<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="list-group">
      <a> {!! link_to_route('Boleta.index', 'Boleta de Calificaciones', null, array('class' => 'list-group-item')); !!}</a>
      <a> {!!link_to('/HorarioAlumno', $title = 'Horario de Clases', $attributes = ['class' => 'list-group-item']) !!}</a>
      <a> {!!link_to('/CalendarioExamenesAlumno', $title = 'Calendarios de Exámenes', $attributes = ['class' => 'list-group-item']) !!}</a>
      <a> {!!link_to('/AcuerdoGrupoAlumno', $title = 'Acuerdo de Grupo', $attributes = ['class' => 'list-group-item']) !!}</a>
      <a href="/CalendariosEscolares/Licenciatura_2016-2017.pdf" class="list-group-item" role="button" aria-pressed="true" target="blank">Calendario Escolar</a>
    </div>
  </div>
</div>