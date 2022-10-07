<?php
session_start();
include ('conexion.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

if((!$user) || (!$pass)){
    header("location: login.html");
}else{
    $sql = "SELECT * FROM usuarios WHERE user_usr = '$user' AND pass_usr = '$pass' AND hab_usr='t' ;";
    $res = pg_query($sql);
    $login_check = pg_num_rows($res);

    if ($login_check > 0){
        while($row = pg_fetch_array($res)){

            $_SESSION['usuario_usr'] = $row['user_usr'];
            $_SESSION['apellido_usr'] = $row['ape_usr'];
            $_SESSION['nombre_usr'] = $row['nom_usr'];

            header("location: mantenimiento.html");
        }
    }else{
        header("location: login.html");
        }
    }
?>

