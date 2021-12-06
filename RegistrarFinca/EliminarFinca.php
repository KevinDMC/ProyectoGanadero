<?php
  include '../Include/Conexion.php';


  $CodigoFinca=$_GET['CodigoFinca'];
  $sql = "DELETE FROM fincas WHERE CodigoFinca= $CodigoFinca";

  if ($dbh->query($sql) == true) {
    echo '<script type="text/javascript"> alert("REGISTRO ELIMINADO!")</script>';
    echo "<script> window.location.href = 'RegistrarFinca.php';</script>";
  }else {
    echo '<script type="text/javascript"> alert("REGISTRO NO FUE ELIMINADO!")</script>';
    echo "<script> window.location.href = 'RegistrarFinca.php';</script>";
  }

?>