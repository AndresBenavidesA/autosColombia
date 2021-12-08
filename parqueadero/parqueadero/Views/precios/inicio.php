<a name="" id="" class="btn btn-success" href="?controlador=Precios&accion=crear" role="button">Agregar Precio</a></a>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Precios</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($Precios as $precios) { ?>
    
        <tr>
            <td><?php echo $precios->id ?></td>
            <td><?php echo $precios->costo ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=precios&accion=editar&id=<?php echo $precios->id; ?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=precios&accion=borrar&id=<?php echo $precios->id; ?>" class="btn btn-danger">Borrar</a>
                    
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