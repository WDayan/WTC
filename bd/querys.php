
<?php
	ini_set('default_charset', 'utf8_general_ci');

	function intoEsporte($db, $values){
		$query = "INSERT INTO esporte (sig, nome) VALUES ('".$values[0]."', '".$values[1]."');";
		return query($db, $query);
	}

	function intoPratica($db, $values){
		$query = "INSERT INTO pratica(sige, cpfe) VALUES ('".$values[0]."', '".$values[1]."');";
		return query($db, $query);
	}

	function intoEstudante($db, $values){
		$query = "INSERT INTO estudante (cpf,nomecur, nomecam, endorigem, endatual, dtnasc, nome, escladde, etnia, periodo, concluido, ingresso) 
		VALUES(".$values[0].", '".$values[1]."', '".$values[2]."', ".$values[3].", ".$values[4].", '".$values[5]."', '".$values[6]."', '".$values[7]."', '".$values[8]."', '".$values[9]."', '".$values[10]."', '".$values[11]."');";
		//echo "<p> ".$query."</p>";
		return query($db, $query);
	}

	function intoEndereco($db, $endereco){
		$id = lastAddress($db) + 1;
		$query = "INSERT INTO endereco(id, endereco) VALUES (".$id.", '".$endereco."');";
		return query($db, $query);
	}

	function intoEnderecoLL($db, $values){
		$query = "INSERT INTO endereco(id, longitude, latitude, endereco) VALUES (".$values[0].", '".$values[1]."', '".$values[2]."', '".$values[3]."');";
		return query($db, $query);
	}

	function intoCampus($db, $values){
		$query = "INSERT INTO campus (nome, endereco_id, avaliacao, site, telefone1, telefone2) VALUES('".$values[0]."', ".$values[1].", ".$values[2].", '".$values[3]."', '".$values[4]."', '".$values[5]."');";
		//echo $query;
		return query($db, $query);
	}

	function intoCurso($db, $values){
		$query = "INSERT INTO curso (nome, nomec) VALUES ('".$values[0]."', '".$values[1]."');";
		return query($db, $query);
	}

	function lastAddress($db){
		$query = "SELECT MAX(id) FROM endereco;";
		$result = query($db, $query);
		mysqli_fetch_all($result, MYSQLI_NUM);
		echo "oi".$result['id']."bye";
		return 500;
	}

?>