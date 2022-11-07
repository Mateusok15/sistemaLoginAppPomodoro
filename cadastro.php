<?php
 
$nome   = isset( $_GET["nome"])? $_GET["nome"] : "";
$email  = isset( $_GET["email"])? $_GET["email"] : "";
$senha  = isset( $_GET["senha"])? $_GET["senha"] : "";
 
$acao   = $_GET["acao"];
 
$server_name = "localhost"; 
$user_name   = "root";
$password    = "";
$data_base   = "pomodoro";
 
$con = mysqli_connect($server_name, $user_name, $password, $data_base);
 
if ($acao=="inserir"){
	$sql = "insert into cadastro(nome, email, senha) values('{$nome}','{$email}', '{$senha}')";
	mysqli_query($con, $sql);
	if (mysqli_affected_rows($con)>0){
		echo "Dados inseridos com sucesso!";
	}else{
		echo "Não foi possível inserir os dados!";
	}
}

mysqli_close($con); 

?>