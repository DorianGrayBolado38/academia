<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/footer2.css">
    <link rel="stylesheet" href="css/form_login.css">
    <link rel="icon" href="imagens/logo-removed.png">
</head>
<header>
        <div class="titulo">
            <img class="logo" src="imagens/logo-removed.png">
            <h1 class="h1header">Academia</h1>
            <h2 class="h2header">BIG BANG</h2>
        </div>
        <nav>
            <ul>
                <li><a href="#contato">Nossa equipe</a></li>
                <li><a href="inicial.php" class="cadastre-se">voltar</a></li>
            </ul>
        </nav>
    </header>

<body>

<div class="form-container">

    <form action="login.php" method="post">
        <div class="form-group">
        <p>
            <input type="checkbox" id="Boxe" name="aluno" value="aluno">
            <label for="aluno">Aluno</label>
        </p>
        <p>
            <input type="checkbox" id="professor" name="professor" value="professor">
            <label for="professor">professor</label>
        </p>
            <label for="nome">Informe usuário:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Informe senha:</label>
            <input type="password" id="senha" name="senha" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Entrar" class="btn-submit">
        </div>
    </form>
</div>
</body>
<footer>
        <ul>
            <li><a href="#"><img src="imagens/logo-removed.png" class="imgfooter"></a></li>
        </ul>
        <ul class="icon">
            <li>
                <img src="imagens/insta.png" class="imgIcon">
                <img src="imagens/whatsapp.png" class="imgIcon">
                <img src="imagens/x.png" class="imgIcon">
                <img src="imagens/facebook.png" class="imgIcon">
            </li>
        </ul>
        <ul>
            <li class="footerli">
                <h1>Informações para contato</h1>
                <a id="contato">
            </li>
            <li class="footerli">Telefone: (xx) xxxxx-xxxxx</li>
            <li class="footerli">Celular: (xx) xxxxx-xxxxx</li>
            <li class="footerli">Email: BigBang47@gmail.com</li>
        </ul>
</footer>
</html>
