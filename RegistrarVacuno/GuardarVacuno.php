<?php

    include '../Include/Conexion.php';
    // Prepare
    $stmt = $dbh->prepare("INSERT INTO vacunos(CodigoVacuno, NombreVacuno, FechaIngreso, Genero, Color, Raza, CodigoFinca) VALUES (?, ?, ?, ?, ? , ?, ?)");
    // Bind
    $CodigoVacuno = $_POST['CodigoVacuno'];
    $NombreVacuno = $_POST['NombreVacuno'];
    $FechaIngreso = $_POST['FechaIngreso'];
    $Genero = $_POST['Genero'];
    $Color = $_POST['Color'];
    $Raza = $_POST['Raza'];
    $CodigoFinca = $_POST['CodigoFinca'];

    $stmt->bindParam(1, $CodigoVacuno);
    $stmt->bindParam(2, $NombreVacuno);
    $stmt->bindParam(3, $FechaIngreso);
    $stmt->bindParam(4, $Genero);
    $stmt->bindParam(5, $Color);
    $stmt->bindParam(6, $Raza);
    $stmt->bindParam(7, $CodigoFinca);
    // Excecute
    $stmt->execute();
    
    if($stmt == TRUE){
        echo '<script type="text/javascript"> alert("REGISTRO GUARDADO!")</script>';
       echo "<script> window.location.href = 'RegistrarVacuno.php';</script>";
    }else{
        echo '<script type="text/javascript"> alert("REGISTRO NO FUE GUARDADO!")</script>';
        echo "<script> window.location.href = 'RegistrarVacuno.php';</script>";
    }

?>