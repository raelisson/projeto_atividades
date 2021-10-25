<?php

#conexão com o banco

try{
	
	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=bd_atividades;", "root", "");
	
	
}catch(PDOExcption $erro){
	
	echo 'Falha'. $erro->getMessage();
	
}

?>