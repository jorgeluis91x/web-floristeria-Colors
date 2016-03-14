<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php
$idProducto = $_GET['idProducto'];
            
  // Conectando, seleccionando la base de datos
include 'variables.php';
$query = 'SELECT * FROM Categorias';
mysql_query ("SET NAMES 'utf8'");

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());




// Realizar una consulta MySQL
?>
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
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

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
<div class="content">
	<div class="container">
		<div class="single">
				<div class="col-md-9 top-in-single">

		
					<div class="col-md-5 single-top">	
						<ul id="etalage">

							<?php

          $query1 = 'SELECT * FROM Imagenes WHERE Producto = "'.$idProducto.'" order by orientacion';
          mysql_query ("SET NAMES 'utf8'");

          $result1 = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
          $nombreCategoria ="";
          while ($line = mysql_fetch_array($result1)) {

          	echo '<li>';
								echo '<a href="optionallink.html">';
									echo '<img class="etalage_thumb_image img-responsive" src="'.$line[1].'" alt="" >';
									echo '<img class="etalage_source_image img-responsive" src="'.$line[1].'" alt="" >';
								echo '</a>';
							echo '</li>';



          }
        ?>
						</ul>

					</div>	
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<?php

          $query1 = 'SELECT * FROM Producto WHERE idProducto = "'.$idProducto.'"';
          mysql_query ("SET NAMES 'utf8'");

          $result1 = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
          
          while ($line = mysql_fetch_array($result1)) {


          
							echo '<h4>'.$line[1].'</h4>';
							echo '<p>'.$line[2].'</p>';
							echo '<div class="star-on">';
								
								
							echo '<div class="clearfix"> </div>';
							echo '</div>';
							
								echo '<label  class="add-to">$ '.$line[3].'</label>';

								}
			?>
							
							
							
								
						</div>
					</div>
				<div class="clearfix"> </div>
				  <!----- tabs-box ---->
		<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span></span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span></span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span></span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									
							    	</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									
								</div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Reviews</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 
							 </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
</div>
				</div>
				<div class="col-md-3 at-single">
					<!--
					
					<div class="single-bottom">
						<h4>Colors</h4>
						<ul>
						<li>
							<input type="checkbox"  id="color" value="">
							<label for="color"><span></span> Red</label>
						</li>
						<li>
							<input type="checkbox"  id="color1" value="">
							<label for="color1"><span></span> Blue</label>
						</li>
						<li>
							<input type="checkbox"  id="color2" value="">
							<label for="color2"><span></span> Black</label>
						</li>
						<li>
							<input type="checkbox"  id="color3" value="">
							<label for="color3"><span></span> White</label>
						</li>
						<li>
							<input type="checkbox"  id="color4" value="">
							<label for="color4"><span></span>Green</label>
						</li>
						</ul>
					</div>
				-->
					<div class="single-bottom">
						<h4>Recomendados</h4>
							<div class="product-go">
								<img class="img-responsive fashion" src="images/flores1.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Docena de Rosas con jarron</a>
								<span class=" price-in">$40.000</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
								<img class="img-responsive fashion" src="images/flores1.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Docena de Rosas con jarron</a>
								<span class=" price-in">$40.000</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
								<img class="img-responsive fashion" src="images/flores1.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Docena de Rosas con jarron</a>
								<span class=" price-in">$40.000</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							
							
				</div>
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