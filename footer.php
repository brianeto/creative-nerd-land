<section id="seccion_contacto" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				CONTÁCTANOS
			</h2>
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
								<input type="text" class="form-control form-control-mine" id="txt_nombre">
							</div>
							<div class="col-12 col-lg-6 text-left">
								<label for="txt_email" class="tag_indicador_form">Email</label>
								<input type="email" class="form-control form-control-mine" id="txt_email">
							</div>
						</div>
						<div class="form-row">
							<div class="col-12 text-left">
								<label for="txt_mensaje" class="tag_indicador_form">Mensaje</label>
								<textarea class="form-control form-control-mine" id="txt_mensaje"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-form-mine" id="btn_enviar">ENVIAR</button>
					</form>
				</div>
				<div class="col-12 col-lg-6 align-self-end man">
					<img class="img_persona_contacto" src="<?php echo $path; ?>image/contact.png">
				</div>			
			</div>		
		</div>		
	</section>
<footer class="seccion_padding diagonal_cut_footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 text-center order-2 order-lg-1 div_item_footer">
				<p class="tag_texto_item_footer tag_texto_item_footer_margin text-center text-lg-left">Síguenos</p>
				<a href="" class="tag_enlace_footer_redes text-center" target="blank" title="Instagram">
					<i class="fab fa-twitter tag_fa_footer_redes"></i>
				</a>
				<a href="" class="tag_enlace_footer_redes text-center" target="blank" title="Facebbok">
					<i class="fab fa-facebook-f tag_fa_footer_redes"></i>
				</a>
				<a href="" class="tag_enlace_footer_redes text-center" target="blank" title="Instagram">
					<i class="fab fa-instagram tag_fa_footer_redes"></i>
				</a>
				<p class="tag_texto_item_footer tag_texto_item_footer_opacity" id="tag_texto_item_footer_copyright">
					Copyright Ⓒ  2018. Creative Nerd<br>all rights reserved
				</p>
			</div>
			<div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-left order-1 order-lg-2 div_item_footer div_item_footer_margin">
				<p class="tag_texto_item_footer tag_texto_item_footer_margin">Contáctanos</p>
				<p class="tag_texto_item_footer tag_texto_item_footer_opacity tag_texto_item_footer_contacto">
					<i class="fas fa-mobile-alt tag_fa_footer_contacto"></i> 3164022489
				</p>
				<p class="tag_texto_item_footer tag_texto_item_footer_opacity tag_texto_item_footer_contacto">
					<i class="far fa-envelope tag_fa_footer_contacto"></i> ventas@agenciaelnerd.com
				</p>
				<p class="tag_texto_item_footer tag_texto_item_footer_opacity tag_texto_item_footer_contacto">
					<i class="fas fa-map-marker-alt tag_fa_footer_contacto"></i> Dirección: Cll 74 #15-13 Oficina 403, Bogotá 
				</p>				
			</div>						
		</div>
		<div class="row afiliados">
			<div class="col-12">
				<p class="tag_texto_item_footer tag_texto_item_footer_margin">Afiliados a:</p>
				<div class="owl-carousel owl-afiliados">
					<div class="item"><img src="image/ccb-logo.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</footer>

	<script type="text/javascript" src="<?php echo $path; ?>js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/css3-animate-it.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/jquery.modal.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/scripts.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/jquery.smoothscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/lightbox.min.js"></script>
</body>
</html>