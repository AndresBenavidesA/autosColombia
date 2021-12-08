<!doctype html>
<html lang="en">
  <head>
    <title>Parqueadero - Autos Colombia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="?controlador=Paginas&accion=inicio"> Vehiculo<span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="?controlador=Paginas&accion=inicio">Home</a>
                <a class="nav-item nav-link" href="?controlador=Registro&accion=inicio">Entrada</a>
                <a class="nav-item nav-link" href="?controlador=Usuarios&accion=inicio">Usuarios</a>
                <a class="nav-item nav-link" href="?controlador=Vehiculo&accion=inicio">Vehículos</a>
                <a class="nav-item nav-link" href="?controlador=Celda&accion=inicio">Celdas</a>
                <a class="nav-item nav-link" href="?controlador=Precios&accion=inicio">Precios</a>
                <a class="nav-item nav-link" href="?controlador=Pago&accion=inicio">Pagos</a>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-xs|sm|md|lg|xl-1-12">
                    <?php
                        include_once("Router.php");
                    ?>
                </div>
                
            </div>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        $(document).ready( function () {
            $('#table').DataTable({
                "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                }
            });
        } );
    </script>
</body>

</html>
