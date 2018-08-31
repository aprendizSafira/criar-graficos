<?php
$vendas = array(10,20,30,40,20);
$custos = array(8,15,37,97,35);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Criação de Gráficos</title>
</head>
<body>
	<div style="width:500px">
		<canvas id="grafico"></canvas>
	</div>

	<!--Importando biblioteca chartjs-->
	<script type="text/javascript" src="Chart.min.js"></script>
	<script type="text/javascript">
		window.onload = function () {//Vai rodar esse codigo apos a pagina ser completamente carregada
			var contexto  = document.getElementById("grafico").getContext("2d");
			var grafico = new Chart(contexto, {
				//Todas as propriedade do nosso grafico vai ficar
				type:'line',
				data: {
					labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
					datasets: [{
						label:'Vendas',
						backgroundColor:'#FF0000',
						borderColor:'#FF0000',
						data: [<?php echo implode(',', $vendas); ?>],
						fill:false
					}, {
						label:'Custos',
						backgroundColor:'#00FF00',
						borderColor:'#00FF00',
						data:[
							8,
							15,
							37,
							97,
							35
						],
						fill:false
					}]
					
				}
			});
		}
		
	</script>
</body>
</html>