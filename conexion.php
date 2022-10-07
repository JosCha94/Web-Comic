<?php
$SuNombre='JoseAlberto';
$SuPass= 123456;
$localhost= 'localhost';
$db= 'libcomics';

conectar_postgreSQL($SuNombre, $SuPass, $localhost, $db);


function conectar_postgreSQL($SuNombre, $SuPass, $localhost, $db)
{
    $conexion=pg_connect("user=".$SuNombre." ".
                         "password=".$SuPass." ".
                         "host=".$localhost." ".
                         "dbname=".$db
                        ) or die ("error al conectar: ".pg_last_error() );
    return $conexion;
}


/*$conn = "host=localhost port=5432 dbname=libcomics user=JoseAlberto password=123456";

$dbconn = pg_connect($conn);

if(!$dbconn){
    echo "Error";
} else{
    echo "Exito";
}*/

?>