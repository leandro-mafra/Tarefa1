
<?php
	
	if (($_SERVER['REQUEST_METHOD'] == "POST") && !(empty($_POST['pagina']))) {
		
		$paginaAtual = $_POST['pagina'];  
		
		
		if(!(is_numeric($paginaAtual))){
			$paginaAtual = 1;
		}
		
		$paginaAtual = intval($paginaAtual);
		
		if($paginaAtual <= 0){
			$paginaAtual = 1;
		}		
		
		$url = 'https://raw.githubusercontent.com/krypton-tech/test-dev-2021/main/atividades.json';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$resul = json_decode(curl_exec($ch));
		
		$linhas = 5; // números de linhas por página
		
		$count = count($resul); // total de resultados
		
		$pag = ceil($count / $linhas); // total de paginas
		
		$finalPag = $paginaAtual * $linhas; // posição da primeira linha da página
		
		$inicioPag = $finalPag - $linhas; // posição da ultima linha da página
		
		$arrCorpo;
		foreach($resul as $key => $valeu){
			if(($key >= $inicioPag) && ($key < $finalPag)){ //percorre as linhas da páginas
				$arrCorpo[] = array(
						'atividade' => $valeu->atividade,
						'hora' => $valeu->hora
				);
			}
		}
		
		if(empty($arrCorpo)){
			$arrCorpo = array();
		}
		
		$array = array(
			'pagina_atual' => $paginaAtual,
			'total_paginas' => $pag,
			'linha_por_pagina' => $linhas,
			'total_linhas' => $count,
			'resultado' => $arrCorpo
		);
		
		$retorno = json_encode($array);
		
		echo $retorno;
	}else{
		echo 'null';
	}
?>