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
<div class="formulario2">
    <form method="POST" action="" >
     ID: <input type="text" name="txtid"><br>
    <br>
    Usuario: <input type="text" name="txtusr"><br>
    <br>
    Producto: <input type="text" name="txtpro"><br>
    <br>
    Fecha: <input type="date" name="txtfec"><br><br>

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
    $user=$_POST['txtusr'];
    $prod=$_POST['txtpro'];
    $fech=$_POST['txtfec'];

    if ($btn=='Listar') {
        
        $query = 'SELECT * FROM ventas;';
        $result = pg_query($query) or die('Query failed: ' . pg_last_error());
        echo "<center><h2> TABLA DE VENTAS </h2></center>";
        echo "<table border=1>\n";
        echo "<tr><td>ID</td><td>Usuario</td><td>Contraseña</td><td>Correo Electronico</td><td>Producto</td>
        <td>Total</td><td>Fecha</td><td>Direccion</td><td>Ciudad</td><td>Pais</td></tr>";
        while ($row=pg_fetch_array($result)) {
            echo "<tr><td>".$row['id_ven'].
            "</td><td>".$row['user_ven']."</td><td>".$row['pass_ven']. "</td><td>".$row['mail_ven'].   
            "</td><td>".$row['prod_ven']."</td><td>".$row['cost_tot_ven']."</td><td>".$row['fec_ven'].
            "</td><td>".$row['dir_ven']."</td><td>".$row['ciu_ven']."</td><td>".$row['pais_ven']."</td></tr>";
        }
        "</table>";
        }
        if ($btn=='Eliminar') {
            if(isset($buscar)&&!empty($buscar)){
            $query = "DELETE FROM ventas where id_ven = '$buscar'";
            $result = pg_query($query);
        }else{
            echo"<script>alert('Debe digitar un ID');</script>";
             }
        }
        if ($btn=='Modificar'){
            if(isset($buscar)&&!empty($buscar)&&isset($user)&&!empty($user)&&isset($prod)&&!empty($prod)&&isset($fech)&&!empty($fech)){
            $query ="update ventas set user_ven='$user', prod_ven='$prod', fec_ven='$fech' where id_ven = '$buscar'";
            $result = pg_query($query);
        }else{
            echo"<script>alert('Debe llenar todos los campos');</script>";
             }
        }
    
        }
?>
</body>
</html>