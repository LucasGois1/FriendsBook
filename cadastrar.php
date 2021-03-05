<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastre-se</title>
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

        <div class="form-cadastro">
            <form action="cadastrar-action.php" method="post">
                <div class="form-title">
                    <h2>Cadastre-se</h2>
                </div>
                <div class="entrar">
                    <label for="">
                        Digite seu nome completo
                        <input type="text" name="nome" id="nome">
                    </label>
                    <label for="">
                        Digite seu e-mail
                        <input type="email" name="email" id="email" placeholder="example@mail.com">
                    </label>
                    <label for="">
                        Crie uma senha
                        <input type="password" name="password" id="password">
                    </label>
                    <input type="submit" value="Cadastrar" class="button purple">
                </div>
            </form>

        </div>

    </section>
    <footer>

    </footer>
</body>

</html>