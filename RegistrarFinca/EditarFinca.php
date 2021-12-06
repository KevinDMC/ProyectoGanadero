<?php
    if(!isset($_POST["Oculto"])){
        exit();
        header('location : RegistrarFinca.php');
    }

    include '../Include/Conexion.php';
    
    $CodigoFinca = $_POST['CodigoFinca'];
    $NombreFinca = $_POST['NombreFinca'];
    $NombreVereda = $_POST['NombreVereda'];
    $Departamento = $_POST['Departamento'];
    $ExtensionHectareas = $_POST['ExtensionHectareas'];

    $sentencia = $dbh->prepare("UPDATE fincas SET NombreFinca = ?, NombreVereda = ?, Departamento = ?, ExtensionHectareas = ? WHERE CodigoFinca = ?;");
    $resultado = $sentencia->execute([$NombreFinca, $NombreVereda, $Departamento, $ExtensionHectareas, $CodigoFinca]);

    echo '<script type="text/javascript"> alert("REGISTRO ACTUALIZADO!")</script>';
    echo "<script> window.location.href = 'RegistrarFinca.php';</script>";

?>