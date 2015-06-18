
<?php
	ini_set('default_charset', 'utf8_general_ci');
	if(isset($_POST["submit"])){
		require_once 'fcnsdb.php';
		require_once 'logindb.php';
		require_once 'querys.php';
		$banco = conectadb($dbHostname, $dbUsername, $dbPassword); //faz a coneão com phpMyAdmin

		selectdb($banco, $dbDatabase); //Alterando a conexão seleciona o bando em $dbDatabase

		//$estudante = array("12345678912", "Agronomia", "Erechim", "2", "3", "1994-10-05", "Dayan Roberto Weber", "Publica", "Branco");
		//intoEstudante($banco, $estudante);

		//$campus = array("Chapecó", "5", "5", "http://www.uffs.edu.br/", "(49) 2049-2600", "(49) 2049-6486");
		//intoCampus($banco, $campus);

		$id = lastAddress($banco);
		echo $id;

		//$curso = array("Ciência da Computação")
		/*$login = $_POST["login"];
		$senha = $_POST["pass"];
		$query = "SELECT user from dblog WHERE user ='".$login."' AND pass='".$senha."'"; //Faz a consulta no Banco buscando Usuário e Senha;
		$resultado = query($banco, $query); //Resultado da consulta eh uma tabela

		if(mysqli_num_rows($resultado) > 0){ //Se tiver mais que 0 linhas. Eh porque encontrou um usuário
			$_SESSION["login"] = $login;
			echo "<p>Usuário conectado</p>";s
		}
		else{
			echo "<meta http-equiv=\"refresh\" content=\"0; url=authentication.php?user=".$login."\">";
			exit;
		}
	}
	if(isset($_GET["user"])){
		echo "<p>Login e/ou senha inválidos</p>";
	}*/
}
?>


<form name="autentication" action="" method="post" style="width: 200px; border: 1px
solid black; padding: 10px">
	<p>
		<label for="idlogin" style="width: 85px; display: inline-block" >Login</label>
		<input type="text" id="idlogin" name="login" size="15" maxlength="15" />
	</p>
	<p>
		<label for="idpass" style="width: 85px; display: inline-block" >Senha</label>
		<input type="password" id="idpass" name="pass" size="15" maxlength="15" />
	</p>
	<p style="text-align: center">
		<input type="submit" name="submit" value="Conectar" />
	</p>
</form>