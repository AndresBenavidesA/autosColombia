<a name="" id="" class="btn btn-success" href="?controlador=Celda&accion=crear" role="button">Crear Celda</a></a>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($Celda as $celda) { ?>
    
        <tr>
            <td><?php echo $celda->id ?></td>
            <td><?php echo $celda->tipo?></td>
            <td><?php echo $celda->estado?></td>
            
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=celda&accion=editar&id_celda=<?php echo $celda->id; ?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=celda&accion=borrar&id_celda=<?php echo $celda->id; ?>" class="btn btn-danger">Borrar</a>
                    
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