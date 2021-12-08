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
              <label for="placa" class="form-label">Placa</label>
              <input type="text" class="form-control" name="placa" aria-describedby="helpId" placeholder="Placa" required>
            </div>
            <div class="mb-3">
              <label for="tipo" class="form-label">Tipo de Vehículo</label>
              <select class="form-control" name="tipo" >
                    <option>Automóvil</option>
                    <option>Camión</option>
                    <option>Camioneta</option>
                    <option>Moto</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="marca" class="form-label">Marca</label>
              <input type="text" class="form-control" name="marca" aria-describedby="helpId" placeholder="Marca" required>
            </div>
            <div class="mb-3">
              <label for="color" class="form-label">Color</label>
              <input type="text" class="form-control" name="color" aria-describedby="helpId" placeholder="Color" required>
            </div>
            <div class="mb-3">
              <label for="id_celda" class="form-label">Celda</label>
              <select class="form-control" name="id_celda" >
                    <option value="<?php echo $vehiculo->celda?>"></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            
            </div>
            <div class="mb-3">
              <label for="id_usuarios" class="form-label">Usuario</label>
              <select class="form-control" name="id_usuarios" >
                    <option value="<?php echo $vehiculo->usuarios?>"></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
            
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar Usuario">
        </form>
    </div>
</div>

