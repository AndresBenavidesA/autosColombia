formulario

<br>
<a name="" id="" class="btn btn-primary" href="?controlador=usuarios&accion=inicio">Volver al inicio</a>
<br><br>
<div class="card">
    <div class="card-header">
        Editar Usuario
    </div>
    <br>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
            <label for="id_usuarios" class="form-label">ID</label>
            <input type="text"
            class="form-control" value="<?php echo $usuarios->id_usuarios; ?>" name="id_usuarios" id="id_usuarios" aria-describedby="helpId" placeholder="">
            </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" value=<?php echo $usuarios->nombre; ?> name="nombre" aria-describedby="helpId" placeholder="Nombre del usuario">
            </div>
        <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" value=<?php echo $usuarios->apellido; ?> name="apellido" aria-describedby="helpId" placeholder="Apellido del usuario" >
            </div>
        <div class="mb-3">
                <label for="cedula" class="form-label">Cédula</label>
                <input type="text" class="form-control" value=<?php echo $usuarios->cedula; ?> name="cedula" aria-describedby="helpId" placeholder="Cédula">
            </div>
        <div class="mb-3">
                <label for="telefono" class="form-label">Telefóno</label>
                <input type="text" class="form-control" value=<?php echo $usuarios->telefono; ?> name="telefono" aria-describedby="helpId" placeholder="Teléfono">
            </div>
        <div class="mb-3">
                <label for="telefono_se" class="form-label">Telefóno Secundario</label>
                <input type="text" class="form-control" value=<?php echo $usuarios->telefono_se; ?> name="telefono_se" aria-describedby="helpId" placeholder="Teléfono">
            </div>
        <div class="mb-3">
                <label for="direccion" class="form-label">direccion</label>
                <input type="text" class="form-control" value=<?php echo $usuarios->direccion; ?> name="direccion" aria-describedby="helpId" placeholder="Dirección">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Editar Usuario">
        </form>
    </div>
</div>