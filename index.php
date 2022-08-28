<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Página de teste para Docker" />
	<title>Página de teste</title>
</head>
<body>
	<header>
		<h1>Seja bem vindo!</h1>
		<p>Obrigado por ter aberto essa página, os dados foram inseridos.</p>
	</header>
	<?php
	ini_set("display_errors", 1);
	header('Content-Type: text/html; charset=iso-8859-1');

	$servername = "18.205.236.1";
	$username = "root";
	$password = "Senha123";
	$database = "sala";

	// Criar conexão


	$link = new mysqli($servername, $username, $password, $database);

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$valor_rand1 =  rand(1, 999);
	$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
	$host_name = gethostname();


	$query = "INSERT INTO veiculos (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";


	if ($link->query($query) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $link->error;
	}

	?>
</body>
</html>
