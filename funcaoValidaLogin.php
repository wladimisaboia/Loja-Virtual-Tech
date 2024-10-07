<?php
function validaLogin($login, $senha) {
    $loginBD = "wladimi";
    $senhaBD = "1234";

    if ($login == $loginBD && $senha == $senhaBD) {
        return true;
    } else {
        return false;
    }
}
?>