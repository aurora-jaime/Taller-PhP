<?php
 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "tasklist";

    try{
    
        $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión Exitosa";

    }catch(PDOException $e){
        echo "Existe un error en la conexión del base de datos fucking shet: " .$e->getMessage();
    }


$sql = "SELECT * FROM tareas";
$result = $conn->query($sql);
/*
foreach($result as $registro){
    print_r($registro);

}


    ?> */
    