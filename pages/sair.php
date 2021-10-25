<?

session_start();

$_SESSION['logado'] = "nao";

session_destroy();

header("Location: ../index.html");

?>