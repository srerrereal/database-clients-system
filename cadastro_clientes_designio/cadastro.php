<html>
	<head>
	<meta> http-equiv="Content-Type" content="text/html; charset=iso-8859-1"
	<title><b>Register has been sucessful completed! Thank You.</b></title>
	</head>
		<body>
			<?php

					$nome = $_POST["name"];
					$email= $_POST["email"];
					$nascimento= $_POST["nascimento"];
					$cep= $_POST["cep"];
					$endereco= $_POST["endereco"];
					$cidade= $_POST["cidade"];
					$estado= $_POST["estado"];
					$telefone= $_POST["telefone"];
					$celular= $_POST["celular"];



			$conect = mysql_connect("localhost", "root");
			if (!$conect)
				die ("Error connecting to the server" .mysql_error());

			$dbank = mysql_select_db("cadastro", $conect);
				if (!$dbank)
					die("Failed to connect with the database" .mysql_error());

			$query = "INSERT INTO 'cadastro' ('name', 'email', 'nascimento', 'cep', 'endereco'
			'cidade',  'estado', 'telefone', 'celular')	
				VALUES ('$nome', '$email', '$nascimento', '$cep', '$endereco', 'cidade', 'estado', 'telefone', 'celular', '')";

			mysql_query($query, $conect);

			echo "Cadastro realizado com sucesso! Obrigado.";

		?>
		</body>
</html>


