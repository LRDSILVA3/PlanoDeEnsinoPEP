<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM livro where autor like '%$usuarios%' or titulo like '%$usuarios%' or editora like '%$usuarios%' or tipo like '%$usuarios%' LIMIT 20";
$resultado_user = mysqli_query($strcon, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	echo"<table id='tabela' border='2' class='table table-hover'><thead><tr><th class=''  ><center id='autor'>AUTOR</center></br></th><th class='' id='titulo'><center>TITULO</center></br></th><th class='' id='editora'><center>EDITORA</center></br></th><th class=''id='tipo'><center>TIPO</center></br></th><th class=''id='tipo'><center></center></br></th></tr></br><tr>";
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		

		echo "<td>".$row_user['autor']."</td>";
		echo "<td>".$row_user['titulo']."</td>";
		echo "<td>".$row_user['editora']."</td>";
		echo "<td>".$row_user['tipo']."</td>";
		echo "<td><button type='button' class=''>ADD</button><button type='button' class=''>REMOVE</button></td>";
    	echo "</tr>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}