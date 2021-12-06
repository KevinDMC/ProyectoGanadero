<?php

    include '../Include/Conexion.php';
    // Prepare
    $stmt = $dbh->prepare("INSERT INTO fincas(CodigoFinca, NombreFinca, NombreVereda, Departamento, ExtensionHectareas) VALUES (?, ?, ?, ?, ?)");
    // Bind
    $CodigoFinca = $_POST['CodigoFinca'];
    $NombreFinca = $_POST['NombreFinca'];
    $NombreVereda = $_POST['NombreVereda'];
    $Departamento = $_POST['Departamento'];
    $ExtensionHectareas = $_POST['ExtensionHectareas'];

    $stmt->bindParam(1, $CodigoFinca);
    $stmt->bindParam(2, $NombreFinca);
    $stmt->bindParam(3, $NombreVereda);
    $stmt->bindParam(4, $Departamento);
    $stmt->bindParam(5, $ExtensionHectareas);
    // Excecute
    $stmt->execute();
    
    if($stmt == TRUE){
        echo '<script type="text/javascript"> alert("REGISTRO GUARDADO!")</script>';
       echo "<script> window.location.href = 'RegistrarFinca.php';</script>";
    }else{
        echo '<script type="text/javascript"> alert("REGISTRO NO FUE GUARDADO!")</script>';
        echo "<script> window.location.href = 'RegistrarFinca.php';</script>";
    }

?>