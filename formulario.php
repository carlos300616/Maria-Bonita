<h2>Dados do cliente:</h2><br>
<form> 
	<label for="nome">Nome:</label><br>
	<input type="text" id="nome" name="nome"><br>  
	<label for="telefone">Telefone:</label><br>  
	<input type="text" id="telefone" name="telefone"><br> 
	<label for="data">Data de nascimento:</label><br>
	<input type="text" id="data" name="data"><br>  
	<label for="endereco">Endereço:</label><br>  
	<input type="text" id="endereco" name="endereco"><br> 
	<label for="bairro">Bairro:</label><br>
	<input type="text" id="bairro" name="bairro"><br>  
	<label for="cep">CEP:</label><br>  
	<input type="text" id="cep" name="cep"><br> 
	<label for="referencia">Ponto de referência de onde mora:</label><br>
	<input type="text" id="referencia" name="referencia"><br>  
	<label for="email">E-mail:</label><br>  
	<input type="text" id="email" name="email"><br> 
</form>

<?php
include "crud.php";

?>
	<a href='formulario.php?cadastrar=true' >cadastrar</a>
	<a href='formulario.php?deletar=true' >deletar</a>
	<a href='formulario.php?alterar=true' >alterar</a>
	<a href='formulario.php?pesquisar=true' >pesquisar</a>