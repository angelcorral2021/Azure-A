<?php
function Conectar(){
    if(!($cnn = mysqli_connect("localhost","root",""))){ 
        exit();
    }
    if(! mysqli_select_db($cnn,"empresa3")){
        exit();
    }
    return $cnn;

}
function VerificarRut($caja_rut){
    $cont = 2;
    $suma = 0;
    $largo =strlen($caja_rut);
    for($i = $largo;$i>0;$i--){
        $suma = $suma + (substr($caja_rut,$i-1,1)*$cont);
        $cont = $cont +1;
        if($cont == 8){
            $cont = 2;
        }
    }
    $digito = 11 - ($suma %11);
    if($digito==10){
        $digito = "K";
    }
    if($digito==11){
        $digito = "0";
    }
    return $digito;
}
?>