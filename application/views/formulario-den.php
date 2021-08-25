<!DOCTYPE html>
<html lang="en">
<head>
	<title>Denuncia en Linea</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url ();?>assets2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets2/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div>'</div><div>'</div><div>'</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="<?php echo base_url('index.php/Principal/GuardarD')?>">
				<span class="contact100-form-title">
					Sistema de denuncia rápida
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Escriba su nombre">
					<span class="label-input100">Nombre completo </span>
					<input class="input100" type="text" name="nombre" placeholder="Nombre completo">
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Sexo</span>
					<div>
						<select class="js-select2" name="sexo">
							<option>Masculino</option>
							<option>Femenino</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Estado</span>
					<div>
						<select class="js-select2" name="estado_c">
							<option>Aguascalientes</option>
							<option>Baja California</option>
							<option>Baja California Sur</option>
							</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Municipio</span>
					<div>
						<select class="js-select2" name="municipio_c">
							<option>Aguascalientes</option>
							<option>Asientos</option>
							<option>Calvillo</option>
							</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Colonia</span>
					<div>
						<select class="js-select2" name="colonia_c">
							<option>Agricultura</option>
							<option>Aguascalientes</option>
							<option>Agua Clara</option>
							</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>


				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100 rs1-wrap-input100" data-validate="Introduzca su código postal">
					<span class="label-input100">Código postal </span>
					<input class="input100" type="text" name="cp_c" placeholder="Código postal">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Introduzca su calle">
					<span class="label-input100">Calle </span>
					<input class="input100" type="text" name="calle_c" placeholder="Calle">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Introduzca número exterior">
					<span class="label-input100">Número exterior </span>
					<input class="input100" type="text" name="num_c" placeholder="Número exterior">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Introduzca teléfono">
					<span class="label-input100">Teléfono </span>
					<input class="input100" type="text" name="telefono_c" placeholder="Teléfono">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Introduzca su correo electrónico">
					<span class="label-input100">Correo electrónico</span>
					<input class="input100" type="text" name="correo_c" placeholder="Correo electrónico">
				</div>

				

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Edad</span>
					<div>
						<select class="js-select2" name="edad">
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Introduzca narración de como sucedió el delito">
					<span class="label-input100">Hechos de la denuncia</span>
					<textarea class="input100" name="hechos" placeholder="Escriba como sucedió el delito"></textarea>
				</div>
				<h3 class="wrap-input100 input100-select bg1">Lugar de los hechos</h3>
				 <div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">¿Existió violencia?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								Si
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								No
							</label>
						</div>

					</div>

				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Introduzca hora del delito">
					<span class="label-input100">Hora en la que ocurrieron los hechos</span>
					<input class="input100" type="text" name="hora_he" placeholder="Hora de los hechos">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Introduzca fecha del delito">
					<span class="label-input100">Fecha </span>
					<input class="input100" type="text" name="fecha_he" placeholder="Fecha">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Estado</span>
					<div>
						<select class="js-select2" name="estado_he">
							<option>Aguascalientes</option>
							<option>Baja California</option>
							<option>Baja California Sur</option>
							</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Municipio</span>
					<div>
						<select class="js-select2" name="municipio_he">
							<option>Aguascalientes</option>
							<option>Asientos</option>
							<option>Calvillo</option>
							</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Colonia</span>
					<div>
						<select class="js-select2" name="colonia_he">
							<option>Agricultura</option>
							<option>Aguascalientes</option>
							<option>Agua Clara</option>
							</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>


				<div class="wrap-input100 validate-input bg1" data-validate="Introduzca la localidad donde ocurrió">
					<span class="label-input100">Localidad </span>
					<input class="input100" type="text" name="localidad_he" placeholder="Localidad donde ocurrió">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Introduzca la calle donde ocurrió">
					<span class="label-input100">Calle </span>
					<input class="input100" type="text" name="calle_he" placeholder="Calle donde ocurrió">
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Enviar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					<div><p>	'</p></div>
					<a class="contact100-form-btn" href="<?php echo base_url('index.php/Principal/index')?>">
						<span>
							Pagina Principal
							<i class="fa fa-long-arrow-right m-l-7" ></i>
						</span>
					</a>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url ();?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url ();?>assets2/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>