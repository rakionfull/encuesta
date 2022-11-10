            </div> <!-- container-fluid -->
        </div>
            <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Valtx.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                           Desarrollado por Valtx
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JAVASCRIPT -->
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="<?=base_url('public/assets/libs/jquery/jquery.min.js'); ?>"></script>
        <script src="<?=base_url('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?=base_url('public/assets/libs/metismenu/metisMenu.min.js'); ?>"></script>
        <script src="<?=base_url('public/assets/libs/simplebar/simplebar.min.js'); ?>"></script>
        <script src="<?=base_url('public/assets/libs/node-waves/waves.min.js'); ?>"></script>
        <script src="<?=base_url('public/assets/js/app.js'); ?>"></script>
		<script>
			// GRAFICO DE BARRAS CANTIDAD DE USUARIOS
			var ctx = document.getElementById('myBarCampanias').getContext('2d');
			var myChartUsuarios = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'],
					datasets: [{
						label: '# de Campañas',
						data: <?php echo $companies_array ?>,
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			var ctx1 = document.getElementById('myBarFormularios').getContext('2d');
			var myBarFormularios = new Chart(ctx1, {
				type: 'bar',
				data: {
					labels: ['Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'],
					datasets: [{
						label: '# de Formularios',
						data: <?php echo $formularios_array ?>,
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			var ctx3 = document.getElementById('myBarPreguntas').getContext('2d');
			var myBarPreguntas = new Chart(ctx3, {
				type: 'bar',
				data: {
					labels: ['Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'],
					datasets: [{
						label: '# de Preguntas',
						data: <?php echo $preguntas_array ?>,
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
			var ctx4 = document.getElementById('myBarEncuestados').getContext('2d');
			var myBarEncuestados = new Chart(ctx4, {
				type: 'bar',
				data: {
					labels: ['Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'],
					datasets: [{
						label: '# de Encuestados',
						data: <?php echo $encuestados_array ?>,
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(40, 200, 50, 0.2)',
							'rgba(100, 20, 86, 0.2)',
							'rgba(20, 150, 65, 0.2)',
							'#782a83',
							'#121d58',
							'#2097d8',
							'#b3deeb',
							'#f8efed',
							'#502400',
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
		</script>
    </div>   
           
</body>

</html>
