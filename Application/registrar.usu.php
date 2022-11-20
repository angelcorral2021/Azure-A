<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/otro.css">
    <script>
        //Script para validaciones numero y letras  
        function ValidaSoloNumeros() {
            if ((event.keyCode < 48) || (event.keyCode > 57))
                event.returnValue = false;

        }

        function ValidaSoloLetras() {
            if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
                event.returnValue = false;

        }
    </script>
</head>
<body>
<?php
    include("funciones.php");
    error_reporting(0);
    if ($_POST['btnvol'] == "Volver") {
        echo "<script>window.location ='menu.php'</script>";
    }

    if ($_POST['btnreg'] == "Registrar") {
        $validacion = VerificarRut($_POST['txtrut']);
        $rut = $_POST["txtrut"] . "-" . $_POST["txtrutv"];
        $rutn = $_POST["txtrut"];
        $rutv = $_POST["txtrutv"];
        $usu = $_POST['txtusu'];
        $pass = $_POST['txtpas'];
        $pass2 = $_POST['txtpas2'];
        $mail = $_POST['txtcorreo'];
        $nom = $_POST['txtnom'];
        
        
        if ($_POST['txtrutv'] == $validacion && $rutn > 999999) {
            if (empty($rutn) ||empty($rutv) || empty($usu) || empty($pass) || empty($pass2) || empty($mail) || empty($nom) || empty($ape) ) {
                echo "<script>alert('Debe ingresar todos los datos')</script>";
            } else if ($pass  != $pass2) {
                echo "<script>alert('Contraseñas no coinciden')</script>";
            } else {
                echo "<script>alert('Se han grabado los datos correctamente')</script>";
                echo "<script>window.location ='index.php'</script>";
            }
        } else {
            echo "<script>alert('rut erroneo')</script>";
        }
    }
    ?>
<div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
            <h2 class="text-dark">Registro de usuario</h2> 
            <form action="" method="POST">
                <div class="input-group mb-3 mt-5">
                    <div class="col-md-8">
                        <input type="text" placeholder="Rut" class="form-control border-dark" maxlength="8" name="txtrut"
                            onkeypress='ValidaSoloNumeros()'>
                    </div>
                    <div class="col-md-1">
                        <span class="group-text">-</span>
                    </div>
                    <div class="control col-md-1">
                        <input type="text" class="form-control border-dark" maxlength="1" name="txtrutv">
                    </div>
                    <div class="control col-md-2 ps-2">
                    <button class="btn btn-dark bg-dark " name="btnvol" value="Buscar">Buscar</button>
                    </div>
                </div>
            
                <div class="mb-3 ">
                    <input type="text" class="form-control border-dark" name="txtusu" placeholder="Usuario">
                </div>
                <div class="mb-3 ">
                    <input type="password" class="form-control border-dark" name="txtpas" placeholder="Contraseña">
                </div>
                <div class="mb-3 ">
                    <input type="password" class="form-control border-dark" name="txtpas2" placeholder="Verificacion Contraseña">
                </div>
                <div class="mb-3 ">
                    <input type="email" class="form-control border-dark" name="txtcorreo" placeholder="Correo">
                </div>
            
                <div class="mb-3 ">
                    <input type="text" class="form-control border-dark " name="txtnom" placeholder="Nombre"
                        onkeypress='ValidaSoloLetras()'>
                </div>
            
            
                <div class="mb-3  text-center">
                    <button class="btn btn-dark bg-dark " name="btnreg" value="Registrar">Registrar</button>
                    <button class="btn btn-dark bg-dark" name="btnmod" value="Modificar">Modificar</button>
                    <button class="btn btn-dark bg-dark " name="btnrec" value="Recuperar">Recuperar</button>
                    <button class="btn btn-dark bg-dark" name="btnvol" value="Eliminar">Eliminar</button>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-dark bg-darks" name="btnvol" value="Volver">Volver</button>
                </div>
            
            </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>