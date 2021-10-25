<?php

$ativ_nome          = $_POST["cd_nome_atividade"];
$ativ_tipo          = $_POST["cd_tipo_atividade"];
$ativ_cargahoraria  = $_POST["cd_cargahoraria"];
$ativ_arquivo       = $_FILES["cd_arquivo"]["name"];
$ativ_id_aluno      = $_POST["cd_id_aluno"];
$ativ_status = "ok";

//var_dump($_FILES["cd_arquivo"]);
// Diretório onde o arquivo vai ser salvo
$diretorio = '../arquivos/'. $ativ_id_aluno. '/';
// if para conferir se diretório não existe
if (!file_exists($diretorio)){
  // Criar pasta de arquivo
  mkdir($diretorio, 0755);
  // Move arquivo para pasta criada
  move_uploaded_file($_FILES["cd_arquivo"]["tmp_name"], $diretorio.$ativ_arquivo);	
  
}
else{ // se o diretório já existe
 
    // Move arquivo para pasta criada
	move_uploaded_file($_FILES["cd_arquivo"]["tmp_name"], $diretorio.$ativ_arquivo);	
}

require("../inc_conection/conection.php");

$insert = $conectar->prepare("INSERT INTO `tb_cad_atividades` (`id_alunos`, `at_nome_atividade`, `at_tipo_atividade`, `at_carga_hora`, `at_certificado`, `at_status` ) VALUES ('{$ativ_id_aluno}', '{$ativ_nome}', '{$ativ_tipo}', '{$ativ_cargahoraria}', '{$ativ_arquivo}', '{$ativ_status}')");
$insert->execute();

header("Location:../pages/pg_atividades.php?alerta=3");
?>