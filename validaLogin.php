<?php
session_start();
require_once("funcaoValidaLogin.php");

$login = $_POST["f_login"];
$senha = $_POST["f_senha"];

$validar = validaLogin($login, $senha);

if ($validar == true) {
    $_SESSION['usuario'] = $login;
    header("Location: loja.php");
    exit;
} else {
    echo "Acesso Negado!";
}
?>
