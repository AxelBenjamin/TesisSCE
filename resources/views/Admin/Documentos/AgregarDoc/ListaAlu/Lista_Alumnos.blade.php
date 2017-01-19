
<div class="table-responsive">
    <h3>Alumnos registrados en el grupo</h3>
    <table class="table table-hover">
        <thead><tr>
            <th>Matricula</th>
            <th>Apellidos</th>
            <th>Nombre</th>
        </tr></thead>
    
        @foreach ($data as $Grupo)
        <tbody>
                <tr>
                
                <td>
                    {{$Grupo->nombre}}
                </td>
                
                </tr>
        </tbody>
        @endforeach

    </table>
    </div>
