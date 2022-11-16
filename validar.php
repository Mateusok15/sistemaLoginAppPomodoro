<?php

$email    = $_POST["email"];
$senha = md5( $_POST["senha"]);

$server_name = "localhost";
$user_name   = "root";
$password    = "";
$database    = "pomodoro";

$con = mysqli_connect($server_name, $user_name, $password, $database);

$sql = "select * from cadastro where email= '{$email}' and senha='{$senha}'";

$result = mysqli_query($con,$sql);

$linha  = mysqli_fetch_assoc($result);

mysqli_close($con);

if ($linha){
	session_start();
	$_SESSION["email"] = $linha["email"];
	$_SESSION["senha"] = $linha["senha"];
	
	header("location: pomodoro.php");
}else{
	echo "Email ou senha inválidos!<br><br>";
	echo "<a href='index.php'>Voltar ao login</a>";
}


?>