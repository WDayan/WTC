
<?php
	ini_set('default_charset', 'UTF-8');
	
	function conectadb($dbHostname, $dbUsername, $dbPassword){
		$con = mysqli_connect($dbHostname, $dbUsername, $dbPassword);
		if(!$con){
			die("Não foi possível conectar ao MySQL: ". mysqli_error($con));
		}
		return $con;
	}

	function selectdb($con, $db){
		mysqli_select_db($con, $db)
			or die("Não foi possível selecionar a base de dados: ".mysqli_error($con));
	}

	function query($con, $query){
		$result = mysqli_query($con, $query);
		if(!$result){
			die ("Falha na execução da consulta: ".mysqli_error($con));
		}
		return $result;
	}

	function vEmail($mail){
		$regex = '/^[a-z\d\._-]+@([a-z\d-]+\.)+[a-z]{2,4}$/i';
		return preg_match($regex, $mail); //Função retorna true or false
	}

	function vName($name){
		trim($name);//Remove os espacos inúteis!
		ucwords($name); //Torna maiuscula a primeira letra de cada palavra
		return $name;
	}

	function vCpf($cpf){
		str_replace(array(".","-"), "", $data); //Troca . e - por ""(nada kk)
		trim($cpf);//Remove os espacos inúteis!
		return $cpf;
	}

?>