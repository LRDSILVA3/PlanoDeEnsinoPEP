
    //Adiciona mais uma linha nas Referencias
function Adicionar(){
    $("#tabela").append(
        "<tr>"+
        "<td>"+"<select class='form-control'id='exampleFormControlSelect'><option>Selecione</option><option>1º</option><option>2º</option><option>3º</option><option>4º</option><option>5º</option><option>6º</option><option>7º</option><option>8º</option></select></td>"+
        "<td><center><textarea name='Conteudo' rows='1' cols='70'></textarea></center></br></td>"+"<td><center><textarea name='Metodologia' rows='1' cols='60'></textarea></center></br></td>"+"</td></thead></table>");}
$(function(){
    //Código das funções Adicionar
    $("#btnAdicionar").bind("click", Adicionar);           
 
});
//Soma as cargas horarias e demonstra Total
function calcular(){
    var Carga_d = parseInt(document.getElementById('Carga_d').value, 10);
    var Carga_h = parseInt(document.getElementById('Carga_h').value, 10);
    document.getElementById('result').value = Carga_h + Carga_d;
}
function pesquisar(){
    var campo = parseInt(document.getElementById('campo').value);
}