<?php

$conexion = mysqli_connect("localhost","root","","alumnos2023");

if(mysqli_connect_errno()){
    echo "error de conexion";
}else{
    echo "Funciona todo ok!!!!";
}

