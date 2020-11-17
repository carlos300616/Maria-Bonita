<?php
	//$conn = "";
	// INICIO CONEXAO BANCO DE DADOS MYSQL 	
		//function conectarBancoDeDados () {
			//global $conn;
		$servername = "localhost";
		$database = "loja_maria_bonita";
		$username = "root";
		$password = "Dudu300616@";

		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $database);

		// Check connection
		if (!$conn) { 
			die("Connection failed: " . mysqli_connect_error()); 
		}

		echo "Connected successfully";// mysqli_close($conn);
		echo "conn de conectar:";
		//}
	// FIM CONEXAO BANCO DE DADOS MYSQL 
	if (isset($_GET['pesquisar'])) { 
		//inserirClienteBanco();
	// INICIO DE CONSULTA NOME BANCO DE DADOS MYSQL
		//function consultarClienteBanco () {
			global $conn;
			$query_nome = "select nome from cliente where id = 2";
			
			//$resultado = $conn->query($query_nome);
			$resultado = mysqli_query($conn,$query_nome);
			
			if ($resultado->num_rows > 0) {
				// output data of each row     
				while($row = $resultado->fetch_assoc()) {
					echo "<br> nome: ". $row["nome"]."<br>"; 
				} 
			} else {
				echo "0 resultado";
			}
		//}
	// FIM DE CONSULTA NOME BANCO DE DADOS MYSQL
	} else if(isset($_GET['inserir'])) { 
	// INICIO DE  INSERCAO NOVO CLIENTE
	//function inserirClienteBanco () {
			  
		
		global $conn;
		echo "conn de inserir:";
		echo $conn;
		$insert_cliente = "insert into cliente (nome, telefone, email, data_nascimento, id_endereco)
				values ('Carla', '(11) 99523-0950', 'carlamaisa13@hotmail.com', '15/03/1995', 1);";
			if (mysqli_query($conn,$insert_cliente) === TRUE){
				echo "inserido com sucesso!";
			} else {
				echo "Erro: ". $insert_cliente. "<br>". $conn->error;
			}
	//}
		
	// FIM DE  INSERCAO NOVO CLIENTE
	}  else if(isset($_GET['alterar'])) { 
		// INICIO MODIFICANDO NOME
			//function alterarClienteBanco () {
					  
				global $conn;
				$update_nome_cliente = "update cliente set nome = 'Carla Maisa' where id = 3;";
				$resultado = mysqli_query ($conn,$update_nome_cliente);
				if ($resultado === TRUE) {
					echo "Modificado com sucesso!";
				} else {
					echo "Erro:". $update_nome_cliente. "<br>". $conn->error;
				} 
			//}
		// FIM MODIFICANDO NOME
	 } else if(isset($_GET['deletar'])) {
		// INICIO DO DELETE
		//function deletarClienteBanco () {
				 
			global $conn;
			$delete_cliente = "delete from cliente where id = 3;";
			$resultado = mysqli_query ($conn, $delete_cliente);
			if ($resultado === TRUE) {
				echo "Cliente deletado!";
			} else {
				echo "Erro:". $delete_cliente. "<br>". $conn->error;
			}
		//}
		// FIM DO DELETE
	}
	
	  ?>