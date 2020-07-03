<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>PEP</title>
		    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                <script type="text/javascript" src="funcoes2.js"></script>

	</head>
	<body>
		<div class="form-horizontal">
            <body>
            <container>
               
<br>
<div class="w-80 p-3" style="background-color: #fff">
<div class="text-center"><img src="logoteste.jpg"class="rounded mx-auto d-block" alt=""></div>

                <table id="" border="2" class="table table-hover">
                            
                               
                           <br>
                    <thead>
                               <tr>
                                    <th class="centro">Curso</th>
                                    <th class="centro">Professor</th>
                                    <th class="centro">Disciplina</th>              
                               </tr>
                                <td>
    								<select class="form-control" id="exampleFormControlSelect1">
    									<option>Selecione o Curso</option>
								    	<option>Analise de Sistemas</option>
								    	<option>Agronomia</option>
								    	<option>Contabilidade</option>
								      
								    </select>
                                </td>

                                <td>
                                   <select class="form-control" id="exampleFormControlSelect1">
    									<option>Selecione o Professor</option>
								    	<option>Leonardo Garcia</option>
								    	<option>Vinicius Tessele</option>
								      
								    </select>
                                </td>

                                <td>
                                   <select class="form-control" id="exampleFormControlSelect1">
    									<option>Selecione a Disciplina</option>
								    	<option>Banco de Dadaos</option>
								    	<option>Python</option>
								      
								    </select>
                                </td>
                    </thead>
                </table><br>


                <table id="" border="2" class="table table-hover">
                   <thead>
                           <tr>
                                    <th class="centro">REGIME</th>
                                    <th class="centro">PERIODO LETIVO</th>
                                    <th class="centro">CARGA HORARIA <br>SALA DE AULA</th>
                                    <th class="centro">CARGA HORARIA <br>A DISTANCIA</th>
                                    <th class="centro">CARGA HORARIA <br>TOTAL</th>     
                           </tr>
                            
                            <td>
                                   <select class="form-control" id="exampleFormControlSelect1">
								    	<option>Bimestral</option>
								    	<option>Semestral</option>
								      
								    </select>
                            </td>
        
                            <td>
                                   <select class="form-control" id="exampleFormControlSelect1">
    									<option>Diurno</option>
								    	<option>Matutino</option>
								    	<option>Vespetino</option>
								    	
								      
								    </select>
                            </td>

                            <td>
                                   <input type="number" id="Carga_h" name="Carga_sala" onfocus="calcular()">Horas
                            </td>
        
                            <td> 
                                   <input type="number" id="Carga_d" name="Carga_distancia" onblur="calcular()">Horas
                            </td>

                             <td>
                                   <input type="number" id="result" name="result" readonly=“true” onblur="calcular()">Horas
                             </td>
                 </thead>
                </table>

                <table id="" border="2" class="table table-hover">
                  <thead>
                         <tr>
                                <th class=""><center>EMENTA</center></th>
                         </tr>

                          <td>
                                 <center><textarea name="comentarios" rows="5" cols="150"></textarea></center>
                          </td>
                  </thead>
               </table>

                <table id="" border="2" class="table table-hover">
                    <thead>
                            <tr>
                                <th class=""><center>COMPETÊNCIAS E HABILIDADES ESPECÍFICAS DA DISCIPLINA</center></th>
                            </tr></br>

                            <td>
                                <center><textarea name="Competencias" rows="5" cols="150"></textarea></center>
                            </td>

                     </thead>
                 </table>

                <table id="tabela" border="2" class="table table-hover">
                    <thead>
                            <tr>
                 
                                <th class=""><center>BIMESTRE</center></br></th>
                                <th class=""><center>CONTEÚDO PREVISTO POR AULA</center></br></th>
                                <th class=""><center>METODOLOGIA/RECURSO PREVISTO</center></br></th>
                                <th class=""><center></center></br></th>
                            </tr></br>
        
            
                            <td>
                                 <select class="form-control" id="exampleFormControlSelect1">
    									<option>Selecione</option>
								    	<option>1º</option>
								    	<option>2º</option>
								    	<option>3º</option>
								    	<option>4º</option>
								    	<option>5º</option>
								    	<option>6º</option>
								    	<option>7º</option>
								    	<option>8º</option>
								      
								    </select>
                            </td>

                            <td>
                                <center><textarea name="Conteudo" rows="1" cols="70"></textarea></center></br>
                            </td>

                            <td>
                                <center><textarea name="Metodologia" rows="1" cols="60"></textarea></center></br>
                            </td>

                            <td>
                                <center><button id="btnAdicionar"class="btn btn-info">Inserir Novo</button></center></br>
                            </td>

                    </thead>
            </table><br>
            
            <center><H1>REFERENCIAS BIBLIOGRAFICAS</H1></br></center>
          
                <table id="tabela" border="2" class="table table-hover">
                    <thead>
                            <tr>
                 
                                <th class=""  ><center id="autor">AUTOR</center></br></th>
                                <th class="" id="titulo"><center>TITULO</center></br></th>
                                <th class="" id="editora"><center>EDITORA</center></br></th>
                                <th class=""id="tipo"><center>TIPO</center></br></th>
                            </tr></br>
                    </thead>
                </table>



<!-- Button trigger modal -->
<center>
<button type="button" id="mmodal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-backdrop="static"> Adicionar Referencias
</button>

<button type="button" id="mmodal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-backdrop="static" onClick="window.print()">Imprimir
</button></center>

<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div><right>
		<div style="text-align:right"> <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
		</right>
	</div>
		<center><h1>Pesquisar Referencias</h1>

        
		<form method="POST" id="form-pesquisa" action="">
			<label>Buscar: </label>
			<input type="text" name="pesquisa" id="pesquisa" placeholder="Digite a busca">
		</form>
		
		<ul class="resultado">
		
		</ul>

        
		
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="personalizado.js"></script>

	</center>
</div>
</div>
</div>
</div>
</container>

	</body>
</html>