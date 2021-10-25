<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}


th {
    background-color: #414958;
    color: white;
}
th2, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th2 {
    background-color: #00FF66;
    color: white;
}
</style>
</head>

<?php

require("../inc_conection/conection.php");


  $consulta = $conectar->query("SELECT * FROM `tb_cad_atividades` WHERE `id_alunos` = '$usuario_id' ");
  
  $linha = $consulta->fetch(PDO::FETCH_ASSOC);
	  

  $cont = $consulta->rowCount();
 
  
 if($cont > 0){ ?>
 
 <table width="986" border="0" align="center">
  <tr>
    <th width="61">&nbsp;</th>
    <th width="586" align="center">Nome do documento</th>
    <th width="154" align="center">Tipo da atividade</th>
    <th width="125" align="center">Carga Horária</th>
    <th width="163" align="center">Status</th>
  </tr>
  <?php
   $consulta = $conectar->query("SELECT * FROM `tb_cad_atividades` WHERE `id_alunos` = '$usuario_id' ");
     while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
	  
	  $nome_doc    = $linha["at_nome_atividade"];
	  $tipo_at     = $linha["at_tipo_atividade"];
	  $carga_hora  = $linha["at_carga_hora"];
	  $certificado = $linha["at_certificado"];
	  $status      = $linha["at_status"];
	if($status == "ok"){
		 $convert_status = "Não-Homologado";
		}
  
  ?>
  <tr>
    <td height="21"><img src="../assets/icon/files.png" width="32" height="32" alt="arquivo"></td>
    <td><a href="../arquivos/<?php echo $usuario_id ?>/<?php echo $certificado ?>"><?php echo $nome_doc ?></a></td>
    <td align="center"><?php echo $tipo_at ?></td>
    <td align="center"><?php echo $carga_hora ?></td>
    <td align="center"><?php echo $convert_status ?></td>
    
  </tr>
  <?php } ?>
  <tr></tr>
  <tr></tr>
</table>


	 
<?php }else{ ?>
<table width="200" border="0">
  <tr>
    <th width="5%"><img src="../assets/icon/alerta.png" width="32" height="32" alt="alerta"></th>
    <th width="95%">Nenhuma atividade cadastrada no momento!</th>
  </tr>
</table>
<?php }?>