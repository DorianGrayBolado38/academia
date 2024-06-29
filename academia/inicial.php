<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/footer2.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="icon" href="imagens/logo-removed.png">
  <title>Inicial</title>
  <style>
    .banner {
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
    }

    .banner img,
    .banner video {
      max-width: 50%;
      max-height: auto;
      
    }
  </style>
</head>
<body>
  <header>
    <div class="titulo">
      <img class="logo" src="imagens/logo-removed.png">
      <h1 class="h1header">Academia</h1>
      <h2 class="h2header">BIG BANG</h2>
    </div>
    <div class="titulo">
      <ul>

        <li><a href="inicial.php">Ínicio</a></li>
        <li><a href="#contato">contato</a></li>
        <li><a href="equipe.php">nossa equipe</a></li>
        <li><a href="cadastrar.php" class="cadastre-se">Cadastre-se</a></li>
        <li><a href="form_login.php" class="cadastre-se">Login</a></li>
      </ul>
    </div>
  </header>

  <div class="slider">
    <div class="slides">
      <div class="slide">
        <img src="imagens/slider.jpg" alt="Imagem 1">
      </div>
      <div class="slide">
        <img src="imagens/slider2.jpg" alt="Imagem 2">
      </div>
      <div class="slide">
        <img src="imagens/slider3.jpg" alt="Imagem 3">
      </div>
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
    <script src="slider.js"></script>
  </div>

  <div class="banner">
    <img src="imagens/baner.png" alt="banner">
    <video src="imagens/reels.mp4" alt="reels" autoplay muted loop></video>
  </div>

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
        <a id="contato"></a>
      </li>
      <li class="footerli">Telefone: (xx) xxxxx-xxxxx</li>
      <li class="footerli">Celular: (xx) xxxxx-xxxxx</li>
      <li class="footerli">Email: BigBang47@gmail.com</li>
    </ul>
    <div class="form-container">
            <h1>Em caso de dúvidas, nos mande um email!</h1>
            <form action="enviar_email.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="assunto">assunto:</label>
                    <input type="assunto" id="assunto" name="assunto" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-submit" value="Enviar">
                </div>
            </form>
        </div>
  </footer>
</body>
</html>
