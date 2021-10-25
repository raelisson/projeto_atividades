<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Atividades Complementares</title>

<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #4E5869;
	margin: 0;
	padding: 0;
	color: #000;
}

ul, ol, dl {
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 
	padding-right: 15px;
	padding-left: 15px; 
}
a img {
	border: none;
}

a:link {
	color:#414958;
	text-decoration: underline;
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus {
	text-decoration: none;
}

.container {
	width: 80%;
	max-width: 1260px;
	min-width: 780px;
	background-color: #FFF;
	margin: 0 auto;
}


.header {
	background-color: #6F7D94;
}


.content {
	padding: 10px 0;
}


.content ul, .content ol { 
	padding: 0 15px 15px 40px; 
}

.footer {
	padding: 10px 0;
	background-color: #6F7D94;
}

.fltrt { 
	float: right;
	margin-left: 8px;
}
.fltlft {
	float: left;
	margin-right: 8px;
}
.clearfloat {
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.container .content #form1 table tr td div strong {
	color: #999;
}
#apDiv1 {
	position: absolute;
	left: 132px;
	top: 92px;
	width: 833px;
	height: 10px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 132px;
	top: 117px;
	width: 246px;
	height: 13px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 132px;
	top: 104px;
	width: 246px;
	height: 13px;
	z-index: 2;
}
.container .content #form1 table tr td {
	font-weight: bold;
}
-->
</style></head>
<?php
// Inicia a sessão do usuário
session_start();	  
  $usuario_nome = @$_SESSION['usu_nome'];
  $usuario_mat =  @$_SESSION['usu_matricula'];
  $usuario_id =   @$_SESSION['usu_id'];
  
//Recebe a mensagem se os dados forma cadastrados 
  @$alerta = $_GET["alerta"];
  
  if($alerta == 3){
	 $aviso = "Dados cadastrado com sucesso!";
  }
//importa trecho do código que faz conexão com o banco
require("../inc_conection/conection.php");
   
?>
<body>
<div class="container">
  <div class="header">
    <table border="0">
      <tr>
        <td width="86" height="45" align="center"><strong><img src="../assets/icon/engineer.png" width="42" height="42" alt="usuario" /></strong></td>
        <td width="733"><strong><?php echo $usuario_nome ?></strong></td>
        <td width="47">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Matrícula:</strong></td>
        <td><strong><?php echo $usuario_mat ?></strong></td>
        <td><a href="sair.php"><img src="../assets/icon/logout.png" width="32" height="32" alt="sair" /></a></td>
      </tr>
    </table>
    <h5><strong>&nbsp;</strong><strong>&nbsp;</strong></h5>
  </div>
  <div class="content">
    <form action="../inc_cadastro/atividade_cadastrar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      
    <?php
      if($alerta == 3){ ?>
      <table border="0" align="center">
        <tr>
          <th2 width="43"><img src="../assets/icon/checked.png" width="32" height="32" alt="checked" /></th2>
          <th2 width="838" bgcolor="#00FF66">Dados cadastrado com sucesso!</th2>
        </tr>
      </table>
      
     <?php } ?>
      <table width="764" border="0" align="center">
        <tr>
          <td colspan="2"><div align="center"><strong>Cadastro de atividades complementares</strong></div></td>
        </tr>
        <tr>
          <td colspan="2"><h5>&nbsp;</h5>
            <h5>Nome da atividade:
              <label for="textfield"></label>
              <input name="cd_nome_atividade" type="text" id="cd_nome_atividade" size="80" />
          </h5></td>
        </tr>
        <tr>
          <td colspan="2"><h5><strong>Tipo da atividade:</strong>
            <label for="select"></label>
            <select name="cd_tipo_atividade" size="1" id="cd_tipo_atividade">
              <option>Escolha o tipo...</option>
              <option value="Curso de extensão">Curso de extensão</option>
              <option value="Graduação">Graduação</option>
              <option value="Palestra">Palestra</option>
              <option value="Oficina">Oficina</option>
            </select>
          </h5></td>
        </tr>
        <tr>
          <td colspan="2"> <h5><strong>Carga horária:</strong>
            
          <input name="cd_cargahoraria" type="text" id="cd_cargahoraria" size="10" />
          </h5></td>
        </tr>
        <tr>
          <td colspan="2"><h5><strong>Certificado:</strong>
            <label for="fileField"></label>
          <input type="file" name="cd_arquivo" id="cd_arquivo" />
          <input type="hidden" name="cd_id_aluno" id="cd_id_aluno" value="<?php echo $usuario_id ?>" />
          </h5></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Cadastrar" /></td>
        </tr>
        <tr>
          <td width="160">&nbsp;</td>
          <td width="469">&nbsp;</td>
        </tr>
      </table>
      <hr/>
      </p>
    </form>
   
    <?php  
	 //importa trecho do código que confere e exibe os registros 
	require ("../inc_confere/conf_atividades.php");?>
    <h1>&nbsp;</h1>
   
    <!-- end .content --></div>
  <div class="footer">
    <p><strong><?php echo $cont ?>: Registros</strong></p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
