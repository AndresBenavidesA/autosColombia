<a name="" id="" class="btn btn-success" href="?controlador=Usuarios&accion=crear" role="button">Agregar Usuario</a></a>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Teléfono Prin.</th>
            <th>Teléfono Secun.</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($Usuarios as $usuarios) { ?>
    
        <tr>
            <td><?php echo $usuarios->id_usuarios ?></td>
            <td><?php echo $usuarios->nombre ?></td>
            <td><?php echo $usuarios->apellido ?></td>
            <td><?php echo $usuarios->cedula ?></td>
            <td><?php echo $usuarios->telefono ?></td>
            <td><?php echo $usuarios->telefono_se ?></td>
            <td><?php echo $usuarios->direccion ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=usuarios&accion=editar&id_usuarios=<?php echo $usuarios->id_usuarios; ?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=usuarios&accion=borrar&id_usuarios=<?php echo $usuarios->id_usuarios; ?>" class="btn btn-danger">Borrar</a>
                    
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