<?php
include "conexion.php";

try {
       $consultaSQL = "select id, codigo, componente, voltaje, amperaje, material from componentes";
       $consulta = $con -> prepare($consultaSQL);
       $consulta -> execute();
       $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);

       print "<h2><pre>fetch(PDO::FETCH_OBJ)</pre></h2>";
       print "<br>";
       var_dump($resultado);

       for ($i=0; $i<=count($resultado)-1; $i++) {
            print "<br>";
            printf("<b>Id        :</b>".$resultado[$i]->id."<br>");
            printf("<b>Codigo        :</b>".$resultado[$i]->codigo."<br>");
            printf("<b>Componente        :</b>".$resultado[$i]->componente."<br>");
            printf("<b>Voltaje        :</b>".$resultado[$i]->voltaje."<br>");
            printf("<b>Amperaje        :</b>".$resultado[$i]->amperaje."<br>");
            printf("<b>Material        :</b>".$resultado[$i]->material."<br>");
        }
       $consulta->closeCursor();
} catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}
?>