<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
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
        <div class="area-esquerda">
            <div class="profile-photo">
                <img src="assets/profile.jpeg" alt="">
            </div>
            <div class="profile-name">
                <h2>Lucas Gois</h2>
            </div>
            <a class="button" style="background-color: white; color:black" href="photos.php">Fotos</a>
            <a class="button" style="background-color: white; color:black" href="amigos.php">Amigos</a>
            <a class="purple button" href="profile.php">Meu perfil</a>
        </div>
        <div class="feed-area">
            <div class="post-area">
                <label for="">
                    Novo post
                </label>
                <form action="" method="get" class="post-form">
                    <textarea name="post" id="post" cols="30" rows="5"></textarea>
                    <input type="submit" value="Postar" class="button purple" style="width: 20%;">
                </form>
            </div>
            <div class="feeds">
                <h1>Feed</h1>
                <div class="models">
                    <div class="post-model">
                        <div class="post-header">
                            <div class="post-photo">
                                <img src="assets/profile.jpeg" alt="">
                            </div>
                            <div class="post-author">
                                Lucas Gois
                            </div>
                            <div class="options">
                                <button class="button" style="width: 20%;  margin-top: 0px">
                                    Editar
                                </button>
                                <button class="button" style="width: 20%; margin-left: 10px; margin-top: 0px">
                                    Excluir
                                </button>
                            </div>
                        </div>
                        <div class="post-content">
                            This is a post content
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>