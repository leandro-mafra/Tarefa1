<!DOCTYPE html>
<html>
	<head lang = "pt-br">
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="estilo.css">
		
		<title>Tarefa1</title>
	</head>
	<body>
	
		<div id="novo" class="novocarro"> <!-- inserir no corro -->
			
			<div class="novocarro_ti">
				<label>Novo Carro</label>
			</div>
			<div class="cadastro">
				<div class="ncad-e">
					<label for="nfab" class="nlabel">Fabricante: </label>
					<input type="text" id="nfab" name="nfab"></input><br>
					<label for="nmodelo" class="nlabel">Modelo: </label>
					<input type="text" id="nmodelo" name="nmodelo"></input><br>
					<label for="ncor" class="nlabel">Cor: </label>
					<input type="text" id="ncor" name="ncor"></input><br>
				</div>
				<div class="ncad-d">
					<label for="nmotor" class="nlabel">Motor: </label>
					<input type="text" id="nmotor" name="nmotor" style="margin-left: 35px;"></input><br>
					<label for="ncilindros" class="nlabel">Cilindros: </label>
					<input type="number" id="ncilindros" name="ncilindros" style="margin-left: 17px;"></input><br>
					<label for="nlitragem" class="nlabel">Litragem: </label>
					<input type="number" id="nlitragem" name="nlitragem" style="margin-left: 17px;"></input><br>
					<label for="nobservação" class="nlabel">Observação: </label>
					<input type="text" id="nobservação" name="nobservação"></input><br>

				</div>
				<div>
					<button id="btn-carro" class="button-Carro" onclick="validaCadrastro()";>Cadastrar</button>
				</div>
			</div>
		</div>
		<div class="novocarro_ti">
				<label>Lista de Carros</label>
			</div>
		<div id="lista" class="conteiner"> <!-- lista de carros -->
			<!-- toda a lista será exibida aqui. -->
			<?php include("core.php"); ?> 
		</div>
		
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="java.js"></script>		

	</body>
</html>