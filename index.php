<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Creative Nerd</title>
	<meta name="description" content="" />

	<!-- Schema.org markup for Google+ --> 
	<meta itemprop="name" content="Creative Nerd">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<!-- <meta name="twitter:site" content="@usuario"> -->
	<meta name="twitter:title" content="Creative Nerd">
	<meta name="twitter:description" content="">
	<!-- <meta name="twitter:creator" content="@usuario"> -->
	<meta name="twitter:image" content="">

	<!-- Open Graph data -->
	<meta property="og:title" content="Creative Nerd" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="Creative Nerd" />
	<meta name="author" content="Geniorama">

<?php 
	$path  = ""; 
	$pathM = "scroll_to";
	$idPagina = "index";
	include('head.php');
?>

<section id="seccion_banner_index" class="position_relative">
	<img class="d-block w-100" src="<?php echo $path; ?>image/portada-home.png">
	<div class="div_diagonal div_diagonal_white"></div>
</section>

<section id="seccion_servicios" class="seccion_padding">
	<div class="container">
		<p class="tag_titulo_secciones tag_titulo_secciones_black text-center">
			NUESTROS <span>SERVICIOS</span>
		</p>
		<div class="row div_contenedor_items_servicios">
			<div class="col-3 text-center div_item_servicios_out">
				<div class="div_item_servicios position_relative_digital">
					<img class="img_item_servicios" src="<?php echo $path; ?>image/logo-blanco-2.png">
				</div>
				<p class="tag_nombre_servicios">Digital Agency</p>
				<hr class="tag_rayita_nombre_servicios digital">
			</div>
			<div class="col-3 text-center div_item_servicios_out">
				<div class="div_item_servicios position_relative_training">
					<img class="img_item_servicios" src="<?php echo $path; ?>image/logo-blanco-2.png">
				</div>
				<p class="tag_nombre_servicios">Training</p>
				<hr class="tag_rayita_nombre_servicios training">				
			</div>
			<div class="col-3 text-center div_item_servicios_out">
				<div class="div_item_servicios position_relative_promocional">
					<img class="img_item_servicios" src="<?php echo $path; ?>image/logo-blanco-2.png">
				</div>
				<p class="tag_nombre_servicios">Promocional</p>
				<hr class="tag_rayita_nombre_servicios promocional">				
			</div>
			<div class="col-3 text-center div_item_servicios_out">
				<div class="div_item_servicios position_relative_printing	">
					<img class="img_item_servicios" src="<?php echo $path; ?>image/logo-blanco-2.png">
				</div>
				<p class="tag_nombre_servicios">Printing</p>
				<hr class="tag_rayita_nombre_servicios printing">					
			</div>
		</div>
		<div class="row div_contenedor_detalles_servicios">
			<div class="col-12  col-lg-6 align-self-end">
				<img class="img_detalle_servicios" src="<?php echo $path; ?>image/bg-quienes-somos.png">
			</div>
			<div class="col-12 col-lg-6">
				<p class="tag_titulo_detalle_servicio">
					Creative Nerd <span>Training</span>
				</p>
				<p class="tag_descripcion_detalle_servicio">
					Lorem ipsum dolor <b>sit amet, consectetur adipisicing elit,</b> sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in <b>reprehenderit in voluptate velit esse
					cillum dolore</b> eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p class="tag_caracteristicas_detalle_servicio">
					<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
				</p>
				<p class="tag_caracteristicas_detalle_servicio">
					<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
				</p>
				<div class="div_botones_detalle_servicio">
					<a class="btn tag_enlace_servicios" href="" role="button">Ver más</a>
					<a class="btn tag_enlace_servicios_2" href="" role="button">Cotizar</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="seccion_quienes_somos">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 align-self-center">
				<p class="tag_titulo_secciones tag_titulo_secciones_white">
					NUESTROS <b>SERVICIOS</b>
				</p>
				<p class="tag_texto_quienes_somos">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>				
			</div>
			<div class="col-12 col-lg-5 offset-lg-1 align-self-center">
				<div class="row">
					<div class="col col-lg-6 text-center">
						<div class="div_circulo_contadores">
							<p class="tag_numero_contadores">37</p>
						</div>
						<p class="tag_nombre_contadores">Clientes felices</p>
					</div>
					<div class="col col-lg-6 text-center">
						<div class="div_circulo_contadores">
							<p class="tag_numero_contadores">137</p>
						</div>
						<p class="tag_nombre_contadores">Clientes felices</p>
					</div>
					<div class="col col-lg-6 text-center">
						<div class="div_circulo_contadores">
							<p class="tag_numero_contadores">37</p>
						</div>
						<p class="tag_nombre_contadores">Clientes felices</p>
					</div>
					<div class="col col-lg-6 text-center">
						<div class="div_circulo_contadores">
							<p class="tag_numero_contadores">37</p>
						</div>
						<p class="tag_nombre_contadores">Clientes felices</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="seccion_equipo" class="seccion_padding">
	<div class="container">
		<p class="tag_titulo_secciones tag_titulo_secciones_black text-center">
			NUESTRO <span>EQUIPO</span>
		</p>
		<div id="div_contenedor_equipo">
			
		</div>
	</div>	
</section>

<section id="seccion_portafolio" class="seccion_padding">
	<div class="container">
		<p class="tag_titulo_secciones tag_titulo_secciones_black text-center">
			NUESTRO <span>PORTAFOLIO</span>
		</p>
	</div>	
</section>

<section id="seccion_testimonios" class="seccion_padding">
	<div class="container">
		<p class="tag_titulo_secciones tag_titulo_secciones_white text-center">
			LO QUE DICEN NUESTROS CLIENTES
		</p>
		<div id="div_contenedor_testimonios">
			<div class="div_item_testimonios">
				<div class="row">
					<div class="col-12 col-lg-4 text-center align-self-end">
						<img class="img_persona_testimonio" src="<?php echo $path; ?>image/persona-testimonio.png">
					</div>
					<div class="col-12 col-lg-7 offset-lg-1 align-self-start div_contenido_testimonios">
						<p class="tag_nombre_testimonio">Luna Rose</p>
						<p class="tag_asunto_testimonio">Web Developer Experience</p>
						<p class="tag_texto_testimonio">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section id="seccion_clientes" class="seccion_padding">
	<div class="container">
		<div id="div_contenedor_clientes">
        <?php
            $directory=$path."image/clientes/";
            $dirint = dir($directory);
            while (($archivo = $dirint->read()) !== false){
               	if (preg_match("/\bgif\b/i", $archivo) || preg_match("/\bjpg\b/i", $archivo) || preg_match("/\bpng\b/i", $archivo)){
               		$imagen = $directory."/".$archivo;             
	                ?>
					<img class="img_logo_clientes" src="<?php echo $imagen; ?>">					
	                <?php 
                }
            }
            $dirint->close();
        ?>
		</div>
	</div>	
</section>

<section id="seccion_contacto" class="seccion_padding">
	<div class="container">
		<p class="tag_titulo_secciones tag_titulo_secciones_black text-center">
			CONTÁCTANOS
		</p>
		<p class="tag_subtitulo_secciones tag_titulo_secciones_black text-center">
			¿Estás listo para iniciar tu proyecto?<br>
			<span>Cuéntanos de él</span>
		</p>
		<div class="row">
			<div class="col-12 col-lg-6 align-self-center">
				<form class="text-center" id="form_contacto" method="post" action="javascript:enviarContacto();">
					<div class="form-row">
						<div class="col-12 col-lg-6 text-left">
							<label for="txt_nombre" class="tag_indicador_form">Nombre</label>
							<input type="text" class="form-control form-control-mine" id="txt_nombre" placeholder="NOMBRE">
						</div>
						<div class="col-12 col-lg-6 text-left">
							<label for="txt_email" class="tag_indicador_form">Email</label>
							<input type="email" class="form-control form-control-mine" id="txt_email" placeholder="EMAIL">
						</div>
					</div>
					<div class="form-row">
						<div class="col-12 text-left">
							<label for="txt_mensaje" class="tag_indicador_form">Mensaje</label>
							<textarea class="form-control form-control-mine" id="txt_mensaje" placeholder="MENSAJE"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-form-mine" id="btn_enviar">ENVIAR</button>
				</form>
			</div>
			<div class="col-12 col-lg-4 offset-lg-2 align-self-end">
				<img class="img_persona_contacto" src="<?php echo $path; ?>image/persona-testimonio.png">
			</div>			
		</div>		
	</div>		
</section>

<?php 
	include('footer.php');
?>