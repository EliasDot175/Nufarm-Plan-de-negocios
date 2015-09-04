<?php include 'inc/header.php' ?>
<!--Admin -->
	<div class="admin col-xs-12 col-sm-12 col-md-12 ol-lg-12">

		<!-- contenedor A -->
		<div class="contenedor-A col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<div class="sub-contenedor">
				<div class="filtros">
				            <form action="" method="POST">
				            <input type="hidden" name="filter">
				                  	<h3> FILTRAR POR:</h3>
				                 	<select name="">
				                  		<option value="">CRISTIAN CARDETTI</option>
				                 	</select>
				                  	<select name="">
				                    		<option value="">TODOS LOS CLIENTES</option>
				                    	</select>
				                    	<select name="">
				                    		<option value="">FACTURACION 2014/ 2015</option>
				                    	</select>
				                  	<button class="button-image button-B" type="submit"><img src="assets/images/ver.png" alt=""> VER RESULTADOS </button>
				            </form>
			      	</div>
			</div>
		</div>
		<!-- end / contenedor A -->

		<!-- contenedor B -->
		<div class="contenedor-B contenedor-HEAD col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<div class="sub-contenedor">

				<h3 class="titulo-A">FACTURACIÓN 2014/2015</h3>

			</div>
		</div>
		<!-- end / contenedor B -->

		<hr class="hr-SELECT">

		<!-- contenedor SELECT -->
		<div class="contenedor-SELECT col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<div class="sub-contenedor">


				<div class='cerrar-pantalla col-xs-12 col-sm-12 col-md-12 ol-lg-12'>
					<img src="assets/images/cerrar-A.png">
				</div>

				<h3 class="titulo-B">SANCHEZ AGRONEGOCIOS S.A.</h3>

				<div class="block-resumen-A">
					<div class="block-resumen col-xs-12 col-sm-3 col-md-3 ol-lg-3">
						<div class="num">212.769</div>
						<hr class="hr-resumen">
						 <div class="text">
							Objetivo Productos Clave
						</div>
					</div>

					<div class="block-resumen col-xs-12 col-sm-3 col-md-3 ol-lg-3">
						<div class="num num2">50%</div>
						<div class="text2">2012.756%</div>
						<hr class="hr-resumen">
						 <div class="text">
							Avance Productos Clave
						</div>
					</div>

					<div class="block-resumen col-xs-12 col-sm-3 col-md-3 ol-lg-3">
						<img class="img" src="assets/images/editar.png" alt="">
						<div class="text2">VIAJE<br>AUSTRALIA</div>
						<hr class="hr-resumen">
						 <div class="text">
							Premio
						</div>
					</div>

				</div>


				<!-- Inputs -->
				<div class="inputs col-xs-12 col-sm-12 col-md-12 ol-lg-12">

					<h3 class="titulo-A titulo-bottom">DETALLE MENSUAL</h3>

					<div class="titulo-meses titulo-meses-B col-xs-12 col-sm-12 col-md-12 ol-lg-12">
						<h3 class="item item-a">2014</h3>
						<h3 class="item item-b">2015</h3>
					</div>

    				<!-- Tabla -->
					<table class="tabla-A tabla-mes tabla-mes-vendedor"  >
						<thead>
							<tr>
								<th class="text-uppercase col-mes"></th>
								<th class="text-uppercase col-mes">Agosto</th>
								<th class="text-uppercase col-mes">Septiembre</th>
								<th class="text-uppercase col-mes">Octubre</th>
								<th class="text-uppercase col-mes">Noviembre</th>
								<th class="text-uppercase col-mes">Diciembre</th>
								<th class="text-uppercase col-mes">Enero</th>
								<th class="text-uppercase col-mes">Febrero</th>
								<th class="text-uppercase col-mes">Marzo</th>
								<th class="guardar"></th>
							</tr>
						</thead>
						<tbody>

							<!-- item-->
							<tr>
								<td class="sin-borde">
									P.Clave
								</td>
								<td class=" background-A text-uppercase ">
									<input type="text" name="" value="10.789">
								</td>
								<td class="background-A text-uppercase  col-mes ">
									<input type="text" name="" value="30.100">
								</td>
								<td class="background-A text-uppercase  col-mes ">
									<input type="text" name="" value="50.789">
								</td>
								<td class="background-A text-uppercase  col-mes ">
									<input type="text" name="" value="20.889">
								</td>
								<td class="background-A text-uppercase  col-mes  ">
									<input type="text" name="" value="10.000">
								</td>
								<td class="background-A text-uppercase  col-mes  ">
									<input type="text" name="" value="51.000">
								</td>
								<td class="background-A text-uppercase  col-mes " >
									<input type="text" name="" value="40.020">
								</td>
								<td class="background-A text-uppercase  col-mes ">
									<input type="text" name="" value="100.789">
								</td>
								<td class="background-A text-uppercase guardar">
									<img class="boton" src="assets/images/editar.png" alt="">
									<p>	GUARDAR </p>
								</td>

							</tr>
							<!-- end / item-->

						</tbody>
					</table>
					<!-- end / Tabla -->
				</div>
				<!-- end / Inputs -->

				<!-- Gráfico -->
				<div class="grafico col-xs-12 col-sm-12 col-md-12 ol-lg-12">
					<canvas id="canvas" height="125" width="600"></canvas>
				</div>
				<!-- end / Gráfico -->


				<!-- ScriptGráfico -->
				<script>
					var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
					var lineChartData = {
						//labels : ["Agosto","Septiembre","Octubre","Noviembre","Diciembre","Enero","Febrero","Marzo"], con labels
						labels : ["","","","","","","",""], // sin labels
						datasets : [
							{
								fillColor : "rgba(0,0,0,0.1)",
								strokeColor : "rgba(220,220,220,1)",
								pointColor : "#666666",
								pointStrokeColor : "#666666",
								pointHighlightFill : "#666666",
								pointHighlightStroke : "rgba(220,220,220,1)",
								data : ['0.5','0.8','0.5','1','1.5','1.8','2','2.5'] //valor correspondiente a la categoria de 0 a 3 por mes
							},
						]

					}

					window.onload = function(){
						var ctx = document.getElementById("canvas").getContext("2d");
						window.myLine = new Chart(ctx).Line(lineChartData, {
							responsive: true
						});
					}
				</script>
				<!-- end / SciptGráfico -->
			</div>
		</div>
		<!-- end /ontenedor SELECT -->

		<hr class="hr-SELECT">

		<!-- contenedor B -->
		<div class="contenedor-B contenedor-TABLA col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<div class="sub-contenedor">
				<!-- Tabla -->
				<table class="tabla-A format-C">
					<thead>
						<tr>
							<th class="col-1">Empresa</th>
							<th class="col-2">Objetivo Fact. Prod.<br>Clave Plan de Negocio 2014/2015</th>
							<th class="col-3">Avance de Productos Clave</th>
							<th class="col-4">Premio</th>
							<th class="botones"></th>
						</tr>
					</thead>
					<tbody>
<?php for ($i = 0; $i < 10; $i++) {?>
	<!-- item-->
								<tr>
									<td class="background-A text-uppercase col-1">
										SANCHEZ AGRONEGOCIOS S.A.
									</td>
									<td class="background-B text-uppercase col-2 center">
										212.789
									</td>
									<td class="background-B text-uppercase col-3 center sub-item">
										<div class="item"><p>212.789</p></div>
										<div class="item background-A violeta"><p>50%</p></div>
									</td>
									<td class="background-A text-uppercase col-4 center">
										<p>
											TV LED
											<img class="boton" src="assets/images/editar.png" alt="">
										</p>
									</td>

									<td class="botones">
										<img class="boton" src="assets/images/editar.png" alt="">
									</td>

								</tr>
								<!-- end / item-->
	<?php	}?>
</tbody>
				</table>
				<!-- end / Tabla -->

			</div>
		</div>
		<!-- end / contenedor B -->


	</div>
	<!-- end / Admin -->


<?php include 'inc/footer.php' ?>