formulario

<br>
<a name="" id="" class="btn btn-primary" href="?controlador=vehiculo&accion=inicio">Volver al inicio</a>
<br><br>
<div class="card">
    <div class="card-header">
        Agregar Vehículo
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
            <label for="placa" class="form-label">PLACA</label>
            <input type="text"
            class="form-control" value="<?php echo $vehiculo->placa; ?>" name="placa" id="placa" aria-describedby="helpId" placeholder="Placa">
            </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">tipo</label>
            <input type="text" class="form-control" value="<?php echo $vehiculo->tipo; ?>" name="tipo" aria-describedby="helpId" placeholder="Tipo">
            </div>
        <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" value="<?php echo $vehiculo->marca; ?>" name="marca" aria-describedby="helpId" placeholder="Marca" >
            </div>
        <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" value="<?php echo $vehiculo->color; ?>" name="color" aria-describedby="helpId" placeholder="color">
            </div>
        <div class="mb-3">
                <label for="celda" class="form-label">Celda</label>
                <input type="text" class="form-control" value="<?php echo $vehiculo->celda; ?>" name="celda" aria-describedby="helpId" placeholder="celda">
            </div>
        <div class="mb-3">
                <label for="id_usuarios" class="form-label">Usuario</label>
                <input type="text" class="form-control" value="<?php echo $vehiculo->usuarios; ?>" name="id_usuarios" aria-describedby="helpId" placeholder="usuario">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar Vehículo">
        </form>
    </div>
</div>