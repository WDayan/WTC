
<?php
	require_once 'fcnsdb.php';
	
	$dbHostname = "localhost";
	$dbDatabase = "wtc";
	$dbUsername = "bruno";
	$dbPassword = "123";
	
	$banco = conectadb($dbHostname, $dbUsername, $dbPassword); //faz a coneão com phpMyAdmin
	selectdb($banco, $dbDatabase); //Alterando a conexão seleciona o bando em $dbDatabase	




?>