<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/otro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Menu Administrador</title>
</head>

<body>
    <?php
include("funciones.php");
error_reporting(0);
if ($_POST['btncre'] == "Crear") {
    echo "<script>window.location ='registrar.usu.php'</script>";
}

if ($_POST['btnsal'] == "Salir") {
    
    echo "<script>window.location ='index.php'</script>";
}
?>
    <form action="" method="POST">
        <div class="container text-center">
            <div class="row ">
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-3"></div>
                <div class="col-md-6  col-lg-6 col-xl-6 col-sm-6 pt-4 text-center">
                    <h2><i class="fas fa-cat " style="font-size: 3rem; ;"></i> Menu administrador </h2>
                    <button class="btn btn-dark bg-dark btn-lg mt-4" name="btncre"
                        value="Crear">Crear usuario
                        </button>
                    <button class="btn btn-dark bg-dark btn-lg mt-4" name="btnasig"
                        value="Asignar bodega">Asignar
                        bodega</button>
                    <button class="btn btn-dark bg-dark btn-lg mt-4" name="btnrev" value="Ver bodegas">Ver
                        Bodegas</button>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6"></div>
                <div class="col-md-12 align-self-center">
                    <button class="btn btn-dark bg-dark btn-lg mt-4" name="btnsal"
                        value="Salir">Salir</button>
                </div>
            </div>
    </form>
</body>
</html>