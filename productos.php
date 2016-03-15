<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$idCategoria = $_GET['idCategoria'];
            
include 'variables.php';

$query = 'SELECT * FROM Categorias';
mysql_query ("SET NAMES 'utf8'");

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

$query1 = 'SELECT * FROM Categorias WHERE idCategoria = "'.$idCategoria.'"';
mysql_query ("SET NAMES 'utf8'");

$result1 = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
$nombreCategoria ="";
while ($line = mysql_fetch_array($result1)) {

   $nombreCategoria = $line[1];
}
// Realizar una consulta MySQL
?>
<!DOCTYPE html>
<html lang="en">
	<head>

<?php
echo "<title>Floristeria colors</title>";
?>




<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" type="text/css" href="css/nuevostyle.css">
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="js/simpleCart.min.js"> </script>
</head>
<body> 
<!--header-->	
<!--header-->	
<div class="header" >
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >
			<div class="header-para">
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>
					
				</ul>			
			</div>	
			
			<ul class="header-in">
				<li ><a href="index.php" >Inicio</a></li>
				<li><a href="nosotros.php">Nuestra Empresa</a> </li>
				<li><a href="contact.html">Contactanos</a></li>
				
			</ul>
			<div class="search-top">
				<div class="search">
					<form>
						<input type="text" value="Buscar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar';}" >
						<input type="submit" value="" >
					</form>
				</div>
				
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			
		<div class="top-nav">		
			  <ul class="megamenu skyblue">
				      <?php

                                    while ($line = mysql_fetch_array($result)) {
                                      echo "<li><a href='productos.php?idCategoria=".$line[0]."'>".$line[1]." </a></li>";
                                     
                                    }

                                    // Liberar resultados
                                    mysql_free_result($result);
                                  
                                  

                                  ?>
			  </ul> 
				</div>
					<div class="logo">
				<a href="index.php"><img src="images/logo.jpg" alt="" ></a>
			</div>
		
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="product">
		<?php
        echo '<h2 class="new">'.$nombreCategoria.'</h2>';
          ?>	
		
		<div class="pink">

			<?php
            
            $query = ' SELECT idProducto, nombre, urlImagen, precio FROM Producto INNER JOIN Imagenes on Producto =  idProducto INNER JOIN producto_categoria on id_producto = idProducto INNER JOIN Categorias on id_categoria = idCategoria  WHERE tipoImagen = 1 and id_categoria = "'.$idCategoria.'"';
            mysql_query ("SET NAMES 'utf8'");

            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo '<div class="espacio"> </div>';

            while ($line = mysql_fetch_array($result)) {

            	

            echo '<div class="col-md-3 box-in-at">';
           		echo '<div class=" grid_box portfolio-wrapper">	';	
						echo'<a href="single.php?idProducto='.$line[0].'" > <img src="'. $line[2] .'" class="img-responsive tamano-fijo" alt="">';

						echo '<div class="zoom-icon">';								
					
						echo '<ul class="in-by-color">';
						echo '	<li><h5>Click en la imagen para ver detalles</h5></li> ';                  
						
						
							
						echo '</ul>';
					
						echo '</div>';

						echo '</a> ';	
		    	echo '</div>';
				echo '<div class="grid_1 simpleCart_shelfItem">';
					echo '<a href="#" class="cup item_add"><span class=" item_price" >'.$line[3].'$ </span></a>';		
				echo '</div>';
			echo'</div>';
			
                
            }
            echo '<div class="espacio"> </div>';

            // Liberar resultados
            mysql_free_result($result);

            // Cerrar la conexión
            mysql_close($link);
            ?>		
			
				
				<div class="clearfix"> </div>
		</div>
		</div>
		<!---->	
</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="index.html"><img src="images/logo.jpg" alt=""></a>
				<!--<p class="footer-class">© 2015 Markito All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			-->
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.html">Nuestra Empresa</a> </li>
					<li><a href="contact.html">   Contactanos</a></li>
					<li ><a href="products.html" >  Nuestra Tienda</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<ul class="term">
					<li><a href="#">terms and conditions</a> </li>
					<li><a href="#">  markito in the press</a></li>
					<li ><a href="#" >  testimonials</a></li>	
				</ul>
				<ul class="term">
					<li><a href="#">join us</a> </li>
					<li><a href="#">  markito videos</a></li>
					
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>Servicio Datafono</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
					 		SELECT idProducto, descripcion, urlImagen FROM Producto INNER JOIN Imagenes on Producto =  idProducto INNER JOIN producto_categoria on id_producto = idProducto INNER JOIN Categorias on id_categoria = idCategoria  WHERE tipoImagen = 1 and id_categoria = '2'
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div>

</body>
</html>