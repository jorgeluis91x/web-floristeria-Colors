<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include 'variables.php';
            
 
  // Realizar una consulta MySQL
  $query = 'SELECT * FROM Categorias';
  mysql_query ("SET NAMES 'utf8'");

  $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

?>
<!DOCTYPE html>
<html>
<head>
<title>Floristeria Colors</title>
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
				<li ><a href="products.html" >  flores</a></li>
				<li><a href="404.html">Nuestra Empresa</a> </li>
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
<!--banner-->

	<div class="banner">
<div class="container">	
		  <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
					
						<div class="banner-top">
						<a href="single.html">
						<div class="banner-top-in">
							<img src="images/flores2.jpg" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >15.000 $ </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>Aprovecha hermoso arreglo florar </p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
						 
						  <div class="banner-top banner-bottom">
						 <a href="single.html">
						<div class="banner-top-in at">
							<img src="images/flores1.jpg" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >25.000 $ </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>Aprovecha hermoso arreglo florar </p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
				   		 <div class="clearfix"> </div>
						 
				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
						
						<div class="banner-top">
						<a href="single.html">
						<div class="banner-top-in">
							<img src="images/flores3.jpg" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >35.000 $ </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>Aprovecha hermoso arreglo florar </p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
						
						  <div class="banner-top banner-bottom">
						  <a href="single.html">
						<div class="banner-top-in at">
							<img src="images/flores4.jpg" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >12.500 $</span></div>
							<div class="off">
								<label>35% off !</label>
								<p>Aprovecha hermoso arreglo florar </p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
				   		 <div class="clearfix"> </div>
						
				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
						
						<div class="banner-top">
						<a href="single.html">
						<div class="banner-top-in">
							<img src="images/flores5.jpg" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >34.500 $  </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>Aprovecha hermoso arreglo florar </p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
						 
						   <div class="banner-top banner-bottom">
						  <a href="single.html">
						<div class="banner-top-in at">
							<img src="images/flores6.jpg" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >12.400 $</span></div>
							<div class="off">
								<label>35% off !</label>
								<p>Aprovecha hermoso arreglo florar </p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
				   		 <div class="clearfix"> </div>
						
				   	 </div>
			</article>
			</div>
			 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});         
   		     </script> 	
		
		</div>   
	</div>
<div class="content">
	<div class="container">
		<div class="content-top">
		<h2 class="new">NUEVOS ARREGLOS</h2>
		<div class="pink">
			<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 4,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			<div id="owl-demo" class="owl-carousel text-center">

				<?php
				

          $query2 = 'SELECT * FROM Producto INNER JOIN Imagenes ON idProducto = Producto WHERE tipoImagen = 1 LIMIT 12';
          mysql_query ("SET NAMES 'utf8'");

          $result2 = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
      
          while ($line2 = mysql_fetch_array($result2)) {

          	echo '<div class="item">';
				echo '<div class=" box-in">';
			echo '<div class=" grid_box">';		
							echo '<a href="single.php?idProducto='.$line2[0].'" > <img src="'.$line2[5].'" class="img-responsive" alt="">';
							 	
						
					
						echo ' </a> </div><div class="grid_1 simpleCart_shelfItem">';
							echo '<a href="#" class="cup item_add"><span class=" item_price" >'.$line2[3].' $ </span></a>';				
						echo '</div></div></div>';
           
           
          }

        ?>

				<div class="clearfix"> </div>
			</div>
			
		</div>
		
		 </div>
	
		<!---->
	
	<!---->
		
			<div class="content-bottom">
				<div class="col-md-8 latter">
					<h6>Contactanos</h6>
					<p>Envianos un email o llamanos al 311456556 y realiza tu pedido</p>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 latter-right">
					
						<form>
						<div class="join">
							<input type="text" value="Tu email aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu email aqui';}">
							<i> </i>
						</div>
							<input type="submit" value="Enviar">
						</form>
						
				</div>
				<div class="clearfix"> </div>
			</div>

	<!---->
	<div class="bottom-content">
	
			<div class="col-md-4">
				<img src="images/ad1.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-4">
				<img src="images/ad1.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-4">
				<img src="images/ad1.png" class="img-responsive" alt="">
			</div>
			<div class="clearfix"> </div>
		</div>
	
	</div>
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
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div>

</body>
</html>