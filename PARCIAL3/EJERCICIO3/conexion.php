<?php

$hostname='localhost';
$db='electronica';
$user='root';
$pass='';

try {
    $con = new PDO("mysql:host=$hostname; dbname=$db",$user,$pass);
} catch (PDOException $e) {
    echo "Error de la conexion a la base de datos";
    echo $e->getMessage();
    exit();
}

$con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>