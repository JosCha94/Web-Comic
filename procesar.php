<?php
include ('conexion.php');

$nom_cli = $_POST['nom_cli'];
$pri_ape_cli = $_POST['pri_ape_cli'];
$seg_ape_cli = $_POST['seg_ape_cli'];
$cel_cli = $_POST['cel_cli'];
$mail_cli = $_POST['mail_cli'];
$fec_nac_cli = $_POST['fec_nac_cli'];
$user_cli = $_POST['user_cli'];
$pass_cli = $_POST['pass_cli'];
$gen_fav_cli = $_POST['gen_fav_cli'];
$dir_cli = $_POST['dir_cli'];
$pais_cli = $_POST['pais_cli'];
$ciu_cli = $_POST['ciu_cli']; 
$tip_tar_cli = $_POST['tip_tar_cli'];
$num_tar_cli = $_POST['num_tar_cli'];
//$id_cli = $_POST['id_cli'];


echo $sql = "insert into clientes (nom_cli, pri_ape_cli, seg_ape_cli, cel_cli, mail_cli, fec_nac_cli, user_cli, pass_cli, gen_fav_cli, dir_cli, pais_cli, ciu_cli, tip_tar_cli, num_tar_cli)
  values('$nom_cli', '$pri_ape_cli', '$seg_ape_cli', '$cel_cli', '$mail_cli', '$fec_nac_cli', '$user_cli', '$pass_cli', '$gen_fav_cli', '$dir_cli', '$pais_cli', '$ciu_cli', '$tip_tar_cli', '$num_tar_cli');";
$res = pg_query($sql);

header('location:nuevousuario.html')

?>

