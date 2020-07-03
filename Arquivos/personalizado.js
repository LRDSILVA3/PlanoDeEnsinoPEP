$(function(){
	$("#pesquisa").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('proc_pesq_user.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}
	$("#btnAdicionar").bind("click", Adicionar);
	//Soma as cargas horarias e demonstra Total
function calcular(){
    var Carga_d = parseInt(document.getElementById('Carga_d').value, 10);
    var Carga_h = parseInt(document.getElementById('Carga_h').value, 10);
    document.getElementById('result').value = Carga_h + Carga_d;
}
function pesquisar(){
    var campo = parseInt(document.getElementById('campo').value);
}
	});
});