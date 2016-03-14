<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Add Producto</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">

	</head>

	<body>

<!--============================== header =================================-->
<header>
  <?php
            
  // Conectando, seleccionando la base de datos
include 'variables.php';
// Realizar una consulta MySQL
$query = 'SELECT * FROM Categorias';
mysql_query ("SET NAMES 'utf8'");

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

?>



      <div class="container clearfix">
        
        <form  method="POST" action "addProducto.php" enctype="multipart/form-data" >  
          Nombre : <input type="text" name="nombre" ><br> 
          Descripcion: <textarea id="descripcion" name="descripcion" style="width:400px;height:50px" ></textarea> <br> 
          Precio:       <input type="text" name="precio"><br>   
          Imagen Principal: <input type="file" name="imagenUrl[]"> <br>
          Tipo Imagen:  <select name="tipo">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr>

          Imagen 1: <input type="file" name="imagenUrl[]"> <br> 
          Tipo Imagen:  <select name="tipo1">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr>

          Imagen 2: <input type="file" name="imagenUrl[]"> <br> 
          Tipo Imagen:  <select name="tipo2">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr>
          Imagen 3: <input type="file" name="imagenUrl[]"> <br> 
          Tipo Imagen:  <select name="tipo3">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr>
          Imagen 4: <input type="file" name="imagenUrl[]"> <br> 
          Tipo Imagen:  <select name="tipo4">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr>
          Imagen 5: <input type="file" name="imagenUrl[]"> <br>
          Tipo Imagen:  <select name="tipo5">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr> 
          Imagen 6: <input type="file" name="imagenUrl[]"> <br> 
          Tipo Imagen:  <select name="tipo6">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr>
          Imagen 7: <input type="file" name="imagenUrl[]"> <br> 
          Tipo Imagen:  <select name="tipo7">
                          <option value ='0'>Vertical</option>
                          <option value ='1'>Horizontal</option>
                        </select>
                        <hr>
         

          Categoria: 
          <br>
<?php    


// Imprimir los resultados en HTML


while ($line = mysql_fetch_array($result)) {
 
    
     echo ' <Input type="checkbox" name="'.$line[0].'">'.$line[1];
     echo '<br>';
     // echo "<option value='".$line[0]."'>".$line[1]."</option>";

}

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);

?>

</select> 
        
          
          <input type="submit" value="Guardar" id="btnEnviar" name="btnGuardar"class "alt_btn" > 
        </form>

        </div>
  </div>
    </header>


<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
  
  </div>
    </footer>

</body>
</html>
<?php
if (isset($_POST['btnGuardar'])){
  $imgPrincipal = $_FILES['imagenUrl']['tmp_name'][0];
  $destino = "img/imagenes/". $_FILES['imagenUrl']['name'][0];
  move_uploaded_file($imgPrincipal, $destino);


  $imgPrincipal1 = $_FILES['imagenUrl']['tmp_name'][1];
  $destino1 = "img/imagenes/". $_FILES['imagenUrl']['name'][1];
  move_uploaded_file($imgPrincipal1, $destino1);

  $imgPrincipal2 = $_FILES['imagenUrl']['tmp_name'][2];
  $destino2 = "img/imagenes/". $_FILES['imagenUrl']['name'][2];
  move_uploaded_file($imgPrincipal2, $destino2);

  $imgPrincipal3 = $_FILES['imagenUrl']['tmp_name'][3];
  $destino3 = "img/imagenes/". $_FILES['imagenUrl']['name'][3];
  move_uploaded_file($imgPrincipal3, $destino3);

  $imgPrincipal4 = $_FILES['imagenUrl']['tmp_name'][4];
  $destino4 = "img/imagenes/". $_FILES['imagenUrl']['name'][4];
  move_uploaded_file($imgPrincipal4, $destino4);

  $imgPrincipal5 = $_FILES['imagenUrl']['tmp_name'][5];
  $destino5 = "img/imagenes/". $_FILES['imagenUrl']['name'][5];
  move_uploaded_file($imgPrincipal5, $destino5);

  $imgPrincipal6 = $_FILES['imagenUrl']['tmp_name'][6];
  $destino6 = "img/imagenes/". $_FILES['imagenUrl']['name'][6];
  move_uploaded_file($imgPrincipal6, $destino6);

  $imgPrincipal7 = $_FILES['imagenUrl']['tmp_name'][7];
  $destino7 = "img/imagenes/". $_FILES['imagenUrl']['name'][7];
  move_uploaded_file($imgPrincipal7, $destino7);


          

  $descripcion = $_POST['descripcion'];
  $categoria = $_POST['nombre'];
  $precio = $_POST['precio']; 

     
     // echo "<option value='".$line[0]."'>".$line[1]."</option>";

}




  // Conectando, seleccionando la base de datos
  $link = mysql_connect('localhost', 'root', '1')
    or die('No se pudo conectar: ' . mysql_error());
  echo 'Connected successfully';
  mysql_select_db('janetharcosdm') or die('No se pudo seleccionar la base de datos');
  // Realizar una consulta MySQL
  $query = "INSERT INTO PRODUCTO (nombre,descripcion,precio)VALUES ('".$nombre."','".$descripcion."','".$precio."')";
  mysql_query ("SET NAMES 'utf8'");




  if (mysql_query($query)) {
    echo "Insertado Producto";
    //echo "El último registro insertado tiene el id %d\n" .mysql_insert_id(). " ";
    $idConsulta = mysql_insert_id();

    $query1 = 'SELECT * FROM Categorias';
    mysql_query ("SET NAMES 'utf8'");
    $result1 = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());

    while ($line = mysql_fetch_array($result1)) {
      if(isset($_POST[$line[0]])){
        $query1 = "INSERT INTO producto_categoria (id_producto,id_categoria)VALUES ('".$idConsulta."','".$line[0]."')";
        if (mysql_query($query1)) {
          echo "insertada producto categoria";
        }else{
          echo "No inserto producto categoria";

        }

        }
      }
     

 

    if(!empty($imgPrincipal)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino."','".$idConsulta."','1','".$tipo."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen principañ";
      }else{
         echo "No inserto imagen principal";

      }
    }
    if(!empty($imgPrincipal1)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino1."','".$idConsulta."','2','".$tipo1."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen 1 ";
      }else{
         echo "No inserto imagen 1";

      }

    }
     if(!empty($imgPrincipal2)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino2."','".$idConsulta."','2','".$tipo2."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen 2 ";
      }else{
         echo "No inserto imagen 2";

      }

    }
     if(!empty($imgPrincipal3)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino3."','".$idConsulta."','2','".$tipo3."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen 3 ";
      }else{
         echo "No inserto imagen 3";

      }

    }
       
    if(!empty($imgPrincipal4)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino4."','".$idConsulta."','2','".$tipo4."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen 4 ";
      }else{
         echo "No inserto imagen 4";

      }

    }
    if(!empty($imgPrincipal5)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino5."','".$idConsulta."','2','".$tipo5."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen 5 ";
      }else{
         echo "No inserto imagen 5";

      }

    }
    if(!empty($imgPrincipal6)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino6."','".$idConsulta."','2','".$tipo6."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen 6 ";
      }else{
         echo "No inserto imagen 6";

      }

    }
    if(!empty($imgPrincipal7)){
      $query = "INSERT INTO Imagenes (urlImagen,Producto, tipoImagen,orientacion)VALUES ('".$destino7."','".$idConsulta."','2','".$tipo7."')";
      mysql_query ("SET NAMES 'utf8'");
      if (mysql_query($query)) {
        echo "Insertada imagen 7 ";
      }else{
         echo "No inserto imagen 7";

      }

    }
      
      
       
    


} else {

    echo "Error: " . $sql . "<br>" . mysql_error($link);
}

 



// Cerrar la conexión
mysql_close($link);


/*
var displayValue=data[i].replace(/&amp;/gi,'&').replace(/&lt;/gi,'<').replace(/&gt;/gi,'>').replace(/&#039;/gi,'\'').replace(/&quot;/gi,'"');
document.forms[this.qs_obj.form].elements[this.qs_obj.populate_list[key]].value=displayValue;SUGAR.util.callOnChangeListers(document.forms[this.qs_obj.form].elements[this.qs_obj.populate_list[key]]);}}}
*/
//}
?>