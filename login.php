<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/styleLogin.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>
<body>
    <div id="main-login">
        <div class="right-login">
            <div class="card-login">
                <div class="login-name">
                    <h1>LOGIN</h1>
                </div>
                <form name="f_acad" action="validaLogin.php" method="POST">
                    <div class="textfield">
                        <input id="usuario" class="input" required type="text" name="f_login">
                        <label class="label" for="usuario">Usuário</label>
                    </div>
                    <div class="textfield">
                        <input id="senha" class="input" required type="password" name="f_senha">
                        <label class="label" for="senha">Senha</label>
                    </div>
                    <button class="button-login" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
