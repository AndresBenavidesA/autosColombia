<a name="" id="" class="btn btn-success" href="?controlador=registro&accion=crear" role="button">Agregar Registro</a></a>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Celda</th>
            <th>Placa</th>
            <th>Hora de Llegada</th>
            <th>Hora de Salida</th>
            
           
        </tr>
    </thead>
    <tbody>
<?php foreach ($Registro as $registro) { ?>
    
        <tr>
            <td><?php echo $registro->id_registro ?></td>
            <td><?php echo $registro->celda ?></td>
            <td><?php echo $registro->placa ?></td>
            <td><?php echo $registro->llegada ?></td>
            <td><?php echo $registro->salida ?></td>

            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=registro&accion=editar&id_usuarios=<?php echo $registro->id_registro; ?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=registro&accion=borrar&id_usuarios=<?php echo $registro->id_registro; ?>" class="btn btn-danger">Borrar</a>
                    
                </div>
            </td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>

<?php } ?>
    </tbody>
</table>