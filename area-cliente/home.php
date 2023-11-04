<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify - Home</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">

  <div class="container-fluid container00 container01">
    <div class="container">
      <?php 
        include('./../componentes/header-cliente.php');
      ?>
    </div>
    <div class="container titlePadding" data-aos="fade-up" data-aos-duration="1500">
      <p class="h5" style="color: #1ED760 ; text-shadow: 0 0 10px rgba(30, 215, 96, 0.5); " id="lauchComing">Músicas mais escutadas</p>
      <p class="h1" style="color: #1DB954; text-shadow: 0 0 10px rgba(30, 215, 96, 0.5);">Melhores músicas de 2023.</p>
      <button type="button" class="btn btn-outline-light mt-5" id="button">SAIBA MAIS</button>

      <div class="container text-center">
        <img src="../img/site/arrowDown.gif" alt="arrowDown" class="arrowDown">
      </div>
    </div>
  </div>
  <div class="container-fluid container00 container02">
  <div class="container-fluid container00 container02">
    <div class="container titlePadding" data-aos="fade-down" data-aos-duration="1500">
        <div class="row">
            <div class="col-md-6">
                <h2>O que o Spotify tem?</h2>

                <h3>Músicas</h3>
                <p>O Spotify tem milhões de músicas. Escute seus sons favoritos, descubra novas músicas e reúna seus favoritos em um só lugar.</p>

                <h3>Playlists</h3>
                <p>No Spotify você encontra uma playlist para cada momento. Todas feitas por fanáticos e especialistas da música.</p>

                <h3>Novos Lançamentos</h3>
                <p>Escute os novos lançamentos de singles e álbuns da semana e veja o que está bombando no Top 50.</p>

                <a type="button" class="btn btn-outline-light mt-5" id="button">SAIBA MAIS</a>
            </div>
            <div class="col-md-6">
                <img src="../img/site/acdc.jpg" alt="AC" style="width: 200px; border: 2px solid #000;">
            </div>
        </div>
    </div>
</div>
  </div>
  <?php 
      include('./../componentes/footer-cliente.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>