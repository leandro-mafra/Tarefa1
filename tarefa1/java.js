			
			
			$(document).ready(function(){
				$("body").on('click', '.button', function(){
					$(this).parent().parent().remove(); //remove elemento
				});
				
			});
			
			// Valída os campos para saber se então preenchidos
			function validaCadrastro(){
				if(($('#nfab').val() && $('#nmodelo').val() && $('#ncor').val() && $('#nmotor').val() && $('#ncilindros').val() && $('#nlitragem').val())){
					cadastrar();
				}else{
					alert('Preeenchar todos as campos.');
				}
			};
			
			
			//efetiva o cadrastro para exibi-la na tela
			function cadastrar(){
				var html = '<div class="carro">';
						html += '<div>';
							html += '<label>'+$("#nfab").val()+'</label>';
							html += '<br>';
							html += '<label>'+$("#nmodelo").val()+' - '+$("#ncor").val()+'</label>';
						html += '</div>';
						html += '<hr>';
						html += '<div>';
							html += '<label>Motor: '+$("#nmotor").val()+'</label>';
							html += '<br>';
							html += '<label>Cilindro: '+$("#ncilindros").val()+'</label>';
							html += '<br>';
							html += 'Litragem: '+$("#nlitragem").val()+'</label>';
							html += '<br>';
							html += '<label>Observacao: '+$("#nobservação").val()+'</label> ';
						html += '</div>';
						html += '<div class="bnt_exlu">';
							html += '<button class="button">Excluir</button>';
						html += '</div>';
					html += '</div>';
				$("#lista").append(html);
				
				$("#nfab").val('');
				$("#nmodelo").val('');
				$("#ncor").val('');
				$("#nmotor").val('')
				$("#ncilindros").val('')
				$("#nlitragem").val('')
				$("#nobservação").val('')
			};