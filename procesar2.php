<?php
include ('conexion.php');

//$id_ven = $_POST['id_ven'];
$user_ven = $_POST['user_ven'];
$pass_ven = $_POST['pass_ven'];
$mail_ven = $_POST['mail_ven'];
$prod_ven = $_POST['prod_ven'];
$fec_ven = $_POST['fec_ven'];
$dir_ven = $_POST['dir_ven'];
$ciu_ven = $_POST['ciu_ven'];
$pais_ven = $_POST['pais_ven']; 
$cost_tot_ven = $_POST['cost_tot_ven'];



$sql = "insert into ventas (user_ven, pass_ven, mail_ven, prod_ven, fec_ven, dir_ven, ciu_ven, pais_ven, cost_tot_ven)
  values('$user_ven', '$pass_ven', '$mail_ven', '$prod_ven', '$fec_ven', '$dir_ven', '$ciu_ven', '$pais_ven', '$cost_tot_ven');";
$res = pg_query($sql);

header('location:ventas.php')

?>