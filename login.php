<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Bem vindo ao FriendsBook</title>
</head>

<body>
    <header>
        <div class="logo-area">
            <div class="logo">
                <h1>FriendsBook</h1>
            </div>
        </div>
    </header>
    <section class="body">
        <div class="slogan">
            <span>O FriendsBook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida tudo que você gosta.</span>
        </div>
        <div class="form">
            <form action="validateLogin.php" method="post">
                <div class="form-title">
                    <h2>Fazer login</h2>
                </div>
                <div class="entrar">
                    <label for="">
                        E-mail
                        <input type="email" name="email" id="email" placeholder="example@mail.com">
                    </label>
                    <label for="">
                        Senha
                        <input type="password" name="password" id="password">
                    </label>
                    <label for="">
                        <a href="redefinirSenha.php">Esqueceu sua senha?</a>
                    </label>
                    <input type="submit" value="Entrar" class="button purple">
                </div>
                <div class="novoUsuario">
                    <a href="cadastrar.php" class="button">Cadastrar</a>
                </div>
            </form>

        </div>

    </section>
    <footer>

    </footer>
</body>

</html>