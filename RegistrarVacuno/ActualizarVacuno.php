<?php

    include ("../Include/Header.php");
    if(!isset($_GET["CodigoVacuno"])){
        exit();
        header('location : RegistrarVacuno.php');
    }

    include "../Include/Conexion.php";
    $CodigoFinca = $_GET["CodigoVacuno"];
    
    $sentencia = $dbh->prepare("SELECT * FROM vacunos WHERE CodigoVacuno = ?;");
    $resultado = $sentencia->execute([$CodigoFinca]);
    $Vacuno = $sentencia->fetch(PDO::FETCH_OBJ);

    //print_r($cliente);

    if($Vacuno === FALSE){
        #No existe
        echo "¡No existe alguna persona con ese ID!";
        exit();
    }

    #Si la persona existe, se ejecuta esta parte del código 

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>EDITAR VACUNO</title>
</head>
<body>
    <div class="modal-body">
        <form method="POST" action="EditarVacuno.php" style="width:40%; margin-top:40px; margin-left:470px; border-radius:20px; padding:35px; background-color:rgba(0,0,0,0.4);">
            <!-- Ocultamos el ID para que el usuario no pueda cambiarlo (en teoría) --> 
            <h1 style="color:#00FF00;" align="center">EDITAR</h1>
            <br>
            <div>
                <label for="" style="color:white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                    </svg>
                    Codigo Del Vacuno
                </label>
                <input type="text" name="CodigoVacuno" class="form-control" value="<?php echo $Vacuno->CodigoVacuno; ?>">
            </div>
            <br>
            <div>
                <label for="" style="color:white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                    </svg>
                    Nombre Del Vacuno
                </label>
                <input type="text" name="NombreFinca" class="form-control" style="border: 3px solid #555;" value="<?php echo $Vacuno->NombreVacuno; ?>">
            </div>
            <br>
            <div>
                <label for="" style="color:white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                    </svg>
                    Fecha De Ingreso
                </label>
                <input type="date" name="FechaIngreso" class="form-control" style="border: 3px solid #555;" value="<?php echo $Vacuno->FechaIngreso; ?>">
            </div>
            <br>
            <div>
                <label for="" style="color:white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                    </svg>
                    Departamento
                </label>
                <select class="form-select" name="Departamento" aria-label="Default select example" style="border: 3px solid #555;" required>
                    <option disabled selected>SELECCIONE UN DEPARTAMENTO</option>  
                    <option <?php echo $Finca->Departamento === 'AMAZONAS' ? "selected='selected'": "" ?> value="AMAZONAS">AMAZONAS</option>
                    <option <?php echo $Finca->Departamento === 'ANTIOQUIA' ? "selected='selected'": "" ?> value="ANTIOQUIA">ANTIOQUÍA</option>
                    <option <?php echo $Finca->Departamento === 'ARAUCA' ? "selected='selected'": "" ?> value="ARAUCA">ARAUCA</option>
                    <option <?php echo $Finca->Departamento === 'ATLANTICO' ? "selected='selected'": "" ?> value="ATLANTICO">ATLÁNTICO</option>
                    <option <?php echo $Finca->Departamento === 'BOLIVAR' ? "selected='selected'": "" ?> value="BOLIVAR">BOLÍVAR</option>
                    <option <?php echo $Finca->Departamento === 'BOYACA' ? "selected='selected'": "" ?> value="BOYACA">BOYACÁ</option>
                    <option <?php echo $Finca->Departamento === 'CALDAS' ? "selected='selected'": "" ?> value="CALDAS">CALDAS</option>
                    <option <?php echo $Finca->Departamento === 'CAQUETA' ? "selected='selected'": "" ?> value="CAQUETA">CAQUETÁ</option>
                    <option <?php echo $Finca->Departamento === 'CASANARE' ? "selected='selected'": "" ?> value="CASANARE">CASANARE</option>
                    <option <?php echo $Finca->Departamento === 'CAUCA' ? "selected='selected'": "" ?> value="CAUCA">CAUCA</option>
                    <option <?php echo $Finca->Departamento === 'CESAR' ? "selected='selected'": "" ?> value="CESAR">CESAR</option>
                    <option <?php echo $Finca->Departamento === 'CHOCO' ? "selected='selected'": "" ?> value="CHOCO">CHOCÓ</option>
                    <option <?php echo $Finca->Departamento === 'CORDOBA' ? "selected='selected'": "" ?> value="CORDOBA">CORDOBA</option>
                    <option <?php echo $Finca->Departamento === 'CUNDINAMARCA' ? "selected='selected'": "" ?> value="CUNDINAMARCA">CUNDINAMARCA</option>
                    <option <?php echo $Finca->Departamento === 'GUAINIA' ? "selected='selected'": "" ?> value="GUAINIA">GUAINIA</option>
                    <option <?php echo $Finca->Departamento === 'GUAVIARE' ? "selected='selected'": "" ?> value="GUAVIARE">GUAVIARE</option>
                    <option <?php echo $Finca->Departamento === 'HUILA' ? "selected='selected'": "" ?> value="HUILA">HUILA</option>
                    <option <?php echo $Finca->Departamento === 'LA GUAJIRA' ? "selected='selected'": "" ?> value="LA GUAJIRA">LA GUAJIRA</option>
                    <option <?php echo $Finca->Departamento=== 'MAGDALENA' ? "selected='selected'": "" ?> value="MAGDALENA">MAGDALENA</option>
                    <option <?php echo $Finca->Departamento === 'META' ? "selected='selected'": "" ?> value="META">META</option>
                    <option <?php echo $Finca->Departamento === 'NARIÑO' ? "selected='selected'": "" ?> value="NARIÑO">NARIÑO</option>
                    <option <?php echo $Finca->Departamento === 'NORTE DE SANTANDER' ? "selected='selected'": "" ?> value="NORTE DE SANTANDER">NORTE DE SANTADER</option>
                    <option <?php echo $Finca->Departamento === 'PUTUMAYO' ? "selected='selected'": "" ?> value="PUTUMAYO">PUTUMAYO</option>
                    <option <?php echo $Finca->Departamento=== 'QUINDIO' ? "selected='selected'": "" ?> value="QUINDIO">QUINDÍO</option>
                    <option <?php echo $Finca->Departamento === 'RISARALDA' ? "selected='selected'": "" ?> value="RISARALDA">RISARALDA</option>
                    <option <?php echo $Finca->Departamento === 'SAN ANDRES Y PROVIDENCIA' ? "selected='selected'": "" ?> value="SAN ANDRES Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                    <option <?php echo $Finca->Departamento === 'SANTANDER' ? "selected='selected'": "" ?> value="SANTANDER">SANTADER</option>
                    <option <?php echo $Finca->Departamento === 'SUCRE' ? "selected='selected'": "" ?> value="SUCRE">SUCRE</option>
                    <option <?php echo $Finca->Departamento === 'TOLIMA' ? "selected='selected'": "" ?> value="TOLIMA">TOLIMA</option>
                    <option <?php echo $Finca->Departamento === 'VALLE DEL CAUCA' ? "selected='selected'": "" ?> value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                    <option <?php echo $Finca->Departamento === 'VAUPES' ? "selected='selected'": "" ?> value="VAUPES">VAUPÉS</option>
                    <option <?php echo $Finca->Departamento === 'VICHADA' ? "selected='selected'": "" ?> value="VICHADA">VICHADA</option>
                </select>
            </div>
            <br>
            <div>
                <label for="" style="color:white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                    </svg>
                    Extensión De Hectareas
                </label>
                <input name="ExtensionHectareas" class="form-control" style="border: 3px solid #555;" required type="text" value="<?php echo $Finca->ExtensionHectareas ?>">
            </div>
            <br><br>
            <input type="hidden" name="Oculto">
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Actualizar" class="btn btn-outline-success">
            </div>
        </form>
    </div>
</body>
</html>