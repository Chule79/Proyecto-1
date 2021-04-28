<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">   
</head>
<body>
  
<?php

	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "chaos-music";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT t2.nombre, t3.obra, t1.titulo, t1.objeto, t1.id, t4.cuenta FROM musica t1 INNER JOIN album t3 on t3.id = t1.id_album inner JOIN artista t2 on t2.id = t1.id_artista inner JOIN usuario t4 on t4.id = t1.id_usuario ORDER BY t1.id ";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT t2.nombre, t3.obra, t1.titulo, t1.objeto, t1.id, t4.cuenta FROM musica t1 INNER JOIN album t3 on t3.id = t1.id_album inner JOIN artista t2 on t2.id = t1.id_artista inner JOIN usuario t4 on t4.id = t1.id_usuario WHERE t1.titulo LIKE '%$q%'  ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows > 0){
    	$salida.="<table border=1 class='tabla'>
    			<thead class='titulo'>
    				<tr id='titulo'>
    					<th>Subido por</th>
                        <th>Artista </th> 
                        <th>Titulo </th>
                        <th>Album </th> 
                         <th>Reproducir </th>
    					
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
            
    		$salida.="<tr>

    					<td>".$fila["cuenta"]."</td>
                        <td>".$fila["nombre"]."</td>
                        <td>".$fila["titulo"]."</td>
                        <td>".$fila["obra"] ."</td> 
                        <td>".$fila["objeto"]."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }
    echo $salida;

    $conn->close();


?>
</body>