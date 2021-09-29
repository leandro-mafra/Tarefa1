
		<?php 
			$url = "https://apiintranet.kryptonbpo.com.br/test-dev/exercise-1";
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$resul = json_decode(curl_exec($ch));
			
			foreach($resul->carros as $carro){
				echo '<div class="carro">';
					echo '<div>';
						echo '<label>'.$carro->marca.'</label>';
						echo '<br>';
						echo '<label>'.$carro->modelo.' - '.$carro->cor.'</label>';
					
					echo '</div>';
					echo '<hr>';
					echo '<div>';
						foreach($resul->motores as $motor){
							if($carro->motor_id == $motor->id){
								echo '<label>Motor: '.$motor->posicionamento_cilindros.'</label>';
								echo '<br>';
								echo '<label>Cilindro: '.$motor->cilindros.'</label>';
								echo '<br>';
								echo '<label>Litragem: '.$motor->litragem.'</label>';
								echo '<br>';
								echo '<label>Observacao: '.$motor->observacao.'</label> ';
								break 1;
							};
						};
					
					echo '</div>';
					echo '<div class="bnt_exlu">';
						echo '<button class="button">Excluir</button>';
					echo '</div>';
				echo '</div>';
			};
			
		?>