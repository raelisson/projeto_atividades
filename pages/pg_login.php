<?php


 if ($_POST['lg_usuario'] =="" or $_POST['lg_senha']==""){
 header("Location: ../index.html?erro=camposEmBrancos");
 exit();
 }

require("../inc_conection/conection.php");

$login = @$_POST['lg_usuario'];
$senha = @$_POST['lg_senha'];


$consulta = $conectar->query("SELECT * FROM `tb_alunos` WHERE `alu_matricula` = '{$login}' AND `alu_senha` = '{$senha}' "); 
  
  $total = $consulta->rowCount();
  
  if ($total > 0){
  
 	 $linha = $consulta->fetch(PDO::FETCH_ASSOC);
	 
       session_start();
	   @$_SESSION['logado'] = "sim";
	   @$_SESSION['usu_id'] = $linha['id_alunos'];
	   @$_SESSION['usu_nome'] = $linha['alu_nome'];
	   @$_SESSION['usu_matricula'] = $linha['alu_matricula'];
	 
	   
	   
  header("Location: ../pages/pg_atividades.php");
  exit();
  
  }else{  

  header("Location:../index.html?alerta=1");
  exit();
  
  }

?>