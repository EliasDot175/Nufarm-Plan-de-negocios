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
		<div class="contenedor-B col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<div class="sub-contenedor">

				<h3 class="titulo-A">FACTURACIÓN 2014/2015</h3>
				<hr class="hr-A">

				<div class="block-resumen">
					<div class="num3"> 212.769 </div>
					<hr class="hr-resumen">
					 <div class="text">
						Objetivo Productos Clave
					</div>
				</div>

				<div class="block-resumen">
					<div class="num3">50%</div>
					<hr class="hr-resumen">
					 <div class="text">
						Avance Productos Clave
					</div>
				</div>

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


<?php include 'inc/footer.php'?>