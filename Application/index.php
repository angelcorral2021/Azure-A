<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/otro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
</head>
<body>
<?php
    include("funciones.php");
    error_reporting(0);
    if ($_POST['btnlog'] == "Ingresar") {
        if ($_POST['txtusu'] == "admin" && $_POST['txtpas'] == "123") { 
                echo "<script>window.location ='menu.php'</script>";
        } else {
            echo "<script>alert('Datos ingresados incorrectos')</script>";
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4"></div>
            <div class="col-md-4  col-lg-4 col-xl-4 col-sm-4 text-center">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2">
                </div>
                <div class="col-md-10  col-lg-10 col-xl-10 text-center">
                    <h2>Bodegas Don Gato</h2>
                    <i class="fas fa-cat" style="font-size: 4rem; ;"></i>
                    <form action="" method="POST" class="text-center">
                        <div class="mb-3 pt-3">
                            <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="txtusu">
                        </div>
                        <div class="mb-3 ">
                            <input type="text" class="form-control" id="usuario" placeholder="Contraseña" name="txtpas">
                        </div>
    
                        <div class="mb-3  text-center">
                            <button class="btn btn-dark bg-dark " name="btnlog" value="Ingresar">Ingresar</button>
                        </div>
                        <div class="mb-3  text-center">
                            <a href="" class="text-dark">Recuperar Contraseña</a>
                        </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2">
                </div>
                </form>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4"></div>
        </div>
    </div>
    
</body>
</html>