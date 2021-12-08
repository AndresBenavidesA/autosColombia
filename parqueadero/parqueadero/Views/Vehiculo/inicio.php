<a name="" id="" class="btn btn-success" href="?controlador=vehiculo&accion=crear" role="button">Agregar Vehiculo</a></a>

<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Placa</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Color</th>
            <th>Celda</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($Vehiculo as $vehiculo) { ?>
    
        <tr>
            <td><?php echo $vehiculo->placa ?></td>
            <td><?php echo $vehiculo->tipo ?></td>
            <td><?php echo $vehiculo->marca ?></td>
            <td><?php echo $vehiculo->color ?></td>
            <td><?php echo $vehiculo->celda ?></td>
            <td><?php echo $vehiculo->usuarios ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=vehiculo&accion=editar&placa=<?php echo $vehiculo->placa; ?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=vehiculo&accion=borrar&placa=<?php echo $vehiculo->placa; ?>" class="btn btn-danger">Borrar</a>
                    
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