<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenimiento</title>
    <link rel="stylesheet" href="estilos.c.css">
</head>
<header>
        <br>
                <MARQUEE>
                                <font color="#000000" size="3" face="Verdana, Arial, Helvetica, sans-serif">
                                MANTENIMIENTO DE LA TABLA CLIENTES
                                </font>
                </MARQUEE>
    <a href="mantenimiento.html"><img id="logo" src="img/logo 2.png" > </a>   
    <img id="bolsa" src="img/carrito.png" ></a>

    <nav>
        <ul>
            <li><a href="consulta.php">TABLA CLIENTES</a></li>
            <li><a href="Consulta2.php">TABLA VENTAS</a></li>
                      
        </ul> 
    </nav>
    
</header>
<body>
<br>
<div class="formulario">
    <form method="POST" action="" >
     ID: <input type="text" name="txtid"><br>
     <br>
    Genero:<input type="text" name="txtgen"><br>
    <br>
    Pais: <input type="text" name="txtpais"><br>
    <br>
    Celular: <input type="tel" name="txtcel"><br><br>
    
    <input type="submit" name="button" value="Listar">
    <input type="submit" name="button" value="Eliminar">
    <input type="submit" name="button" value="Modificar">
    </form>
</div>
<br>
<?php
include("conexion.php");
if (isset($_POST['button'])) {
    $btn=$_POST['button'];
    $buscar=$_POST['txtid'];
    $genero=$_POST['txtgen'];
    $pais=$_POST['txtpais'];
    $celu=$_POST['txtcel'];
    
    if ($btn=='Listar') {
        
        $query = 'SELECT * FROM clientes;';
        $result = pg_query($query) or die('Query failed: ' . pg_last_error());
        echo "<center><h2> TABLA DE CIENTES </h2></center>";
        echo "<table border=1>\n";
        echo "<tr><td>ID</td><td>nombre</td><td>1er Apellido</td><td>2do Apellido</td><td>Numer celular</td><td>Correo Electronico</td><td>Fecha de nacimiento</td>
        <td>Usuario</td><td>Password</td><td>Genero</td><td>Direccion</td><td>Ciudad</td><td>Pais</td><td>Tipo de tarjeta</td><td>Nemero de tarjeta</td></tr>";
        while ($row=pg_fetch_array($result)) {
            echo "<tr><td>".$row['id_cli'].
            "</td><td>".$row['nom_cli']."</td><td>".$row['pri_ape_cli']. "</td><td>".$row['seg_ape_cli'].   
            "</td><td>".$row['cel_cli']."</td><td>".$row['mail_cli']."</td><td>".$row['fec_nac_cli'].
            "</td><td>".$row['user_cli']."</td><td>".$row['pass_cli']."</td><td>".$row['gen_fav_cli'].
            "</td><td>".$row['dir_cli']."</td><td>".$row['ciu_cli']."</td><td>".$row['pais_cli'].
            "</td><td>".$row['tip_tar_cli']."</td><td>".$row['num_tar_cli']."</td></tr>";
        }
        "</table>";
        }
        if ($btn=='Eliminar') {
            if(isset($buscar)&&!empty($buscar)){
            $query = "DELETE FROM clientes where id_cli = '$buscar'";
            $result = pg_query($query);
        }else{
            echo"<script>alert('Debe digitar un ID');</script>";
             }
        }
        if ($btn=='Modificar'){
            if(isset($buscar)&&!empty($buscar)&&isset($genero)&&!empty($genero)&&isset($pais)&&!empty($pais)&&isset($celu)&&!empty($celu)){
            $query ="update clientes set gen_fav_cli='$genero', pais_cli='$pais', cel_cli = '$celu' where id_cli = '$buscar'";
            $result = pg_query($query);
        }else{
            echo"<script>alert('Debe llenar todos los campos');</script>";
             }
        }
    }
    
?>
</body>
</html>