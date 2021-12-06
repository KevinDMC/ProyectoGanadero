/*SI SE SUBIO*/
<?php
    $password = "";
    $dbname = "vacunos";
    $user = "root";

    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $options = array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>