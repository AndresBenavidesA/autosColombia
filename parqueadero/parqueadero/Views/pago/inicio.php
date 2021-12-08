<a name="" id="" class="btn btn-success" href="?controlador=Pago&accion=crear" role="button">Agregar Pago</a></a>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Mes</th>
            <th>Precio</th>
            <th>Usuario</th>
            
        </tr>
    </thead>
    <tbody>
<?php foreach ($Pago as $pago) { ?>
    
        <tr>
            <td><?php echo $pago->id?></td>
            <td><?php echo $pago->mes ?></td>
            <td><?php echo $pago->precios?></td>
            <td><?php echo $pago->usuarios ?></td>
          
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=pago&accion=editar&id=<?php echo $pago->id?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=pago&accion=borrar&id=<<?php echo $pago->id?>" class="btn btn-danger">Borrar</a>
                    
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