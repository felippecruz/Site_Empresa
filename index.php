<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vialog Transportes Rodoviarios">
  <meta name="author" content="Vialog Transportes">
  <meta name="generator" content="Vialog">
  <title>Vialog Transportes</title>

  <link rel="shorticon icon"
    href="https://d1jfoe5og03v22.cloudfront.net/EmpresaLogo/via-log-transporte-d18f87fa-8f93-4507-ae48-e66f0c13bf37.gif">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-utilities.css" rel="stylesheet">
  <link href="assets/css/headers.css" rel="stylesheet">
  <link href="assets/css/carousel.css" rel="stylesheet">
  <link href="assets/css/starter-template.css" rel="stylesheet">
  <link href="assets/css/features.css" rel="stylesheet">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
</head>

<body>
  <?php
  include('header.php')
    ?>

  <main>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/slides/1.png" class="d-block w-100" width="100%" height="100%" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/slides/2.png" class="d-block w-100" width="100%" height="100%" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/slides/3.png" class="d-block w-100" width="100%" height="100%" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">


      <!-- START THE FEATURETTES -->

      <section id="sobre">

        <h1 class="w3-wide w3-center">Sobre Nós</h1>
        <p class="lead">Somos uma empresa com mais de 10 anos atuando dentro do mercado rodovíario,
          cujo nossa principal missão é operar como parceiro logístico atendendo as exigências
          e expectativas do mercado e satisfação em atender bem e com transparência nos nossos serviços
        </p>

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Perfil de Carga Atendido</h2>
            <p class="lead">Atendemos todos os tipos de carga disponiveis no mercado atualmente porém os principais
              tipos
              são:</p>
            <li>Alimentos</li>
            <li>Quimicos</li>
            <li>Embalagens</li>
            <li>Brinquedos</li>
            <li>Utensilios Domesticos</li>
            <li>Papelaria</li>
            <li>Plasticos</li>
          </div>
          <div class="col-md-5">
            <img src="assets/img/van-1303948_1920.png" class="img-fluid rounded mx-auto" alt="">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Nossos Valores</h2>
            <p class="lead">Confira abaixo os pricipais valores empregados por nós para satisfazer todas as necessidades
              de nossos clientes.</p>
            <p class="lead"><i class="bi bi-rocket-takeoff-fill"></i>Frete mais competitivo do Mercado</p>
            <p class="lead"><i class="bi bi-cash-coin"></i>Foco na redução do custo logístico</p>
            <p class="lead"><i class="bi bi-award-fill"></i>Qualidade no Atendimento</p>
            <p class="lead"><i class="bi bi-stopwatch"></i>Pontualidade nas Coletas / Entregas</p>
            <p class="lead"><i class="bi bi-speedometer"></i>Satisfação total de nossos clientes</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="assets/img/valor-agregado.png" class="img-fluid rounded mx-auto" alt="">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Confira Abaixo as Nossas Filiais.
            </h2>
            <br>
            <p class="lead"><a href="https://goo.gl/maps/Vrq8n4xEpSJFydLT7" target="_blank"><button type="button"
                  class="btn btn-success"><i class="bi bi-geo-alt"></i>Armazem Condomínio Airport Town</button></a>
            </p>
            <p class="lead"><a href="https://goo.gl/maps/kzGdPuriMYNR5bko8" target="_blank"><button type="button"
                  class="btn btn-success"><i class="bi bi-geo-alt"></i>CD Armazém Grupo Mateus - 115</button></a></p>
            <p class="lead"><a href="https://goo.gl/maps/tosAyixM2ePW8euLA" target="_blank"><button type="button"
                  class="btn btn-success"><i class="bi bi-geo-alt"></i>CD Santa Isabel do Pará</button></a></p>
            <p class="lead"><a href="https://goo.gl/maps/MMkDgZx2s51pB2aU6" target="_blank"><button type="button"
                  class="btn btn-success"><i class="bi bi-geo-alt"></i>Matriz São Luís - MA</button></a></p>
            <p class="lead"><a href="https://goo.gl/maps/PvZr6mh2yFLYvHUJ8" target="_blank"><button type="button"
                  class="btn btn-success"><i class="bi bi-geo-alt"></i>Fortaleza - CE</button></a></p>
            <p class="lead"><a href="https://goo.gl/maps/7dsJzNqgskZdqoLv7" target="_blank"><button type="button"
                  class="btn btn-success"><i class="bi bi-geo-alt">Jaboatão dos Guararapes - PE</i></button></a></p>
          </div>
          <div class="col-md-5">
            <img src="assets/slides/9.png" class="img-fluid rounded mx-auto">
          </div>
        </div>

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    </section>


    <section id="services">

      <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Confira Abaixo os Nossos Serviços</h2>

        <div class="container col-xxl-8 px-4 py-5">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="assets/img/laptop.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold lh-1 mb-3">Os pricipais e melhores serviços você encontra aqui</h1>
              <p class="lead"></p>
              <div class="col-md-6">

                <ul class="icon-list ps-0">
                  <li class="d-flex align-items-start mb-1">Carga Dedicada</li>
                  <li class="d-flex align-items-start mb-1">Carga Lotação</li>
                  <li class="d-flex align-items-start mb-1">Carga Fracionada</li>
                  <li class="d-flex align-items-start mb-1">Transferências</li>
                  <li class="d-flex align-items-start mb-1">Armazenagem</li>
                  <li class="d-flex align-items-start mb-1">Distribuição</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


    <section id=contato>

      <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
        <h2 class="w3-wide w3-center">CONTATO<i class="bi bi-object-ungroup" aria-hidden="true"></i></h2>
        <p class="w3-opacity w3-center"><i>Envie-nos uma mensagem</i></p>
        <div class="w3-row w3-padding-32">
          <div class="w3-col m6 w3-large w3-margin-bottom">
            <i class="bi bi-geo-alt" style="width:30px"></i> São Lúis, BR<br>
            <i class="bi bi-phone" style="width:30px"></i> <a href="callto:+551124834352"> +55 (11) 2483 -
              4352</a><br>
            <i class="bi bi-envelope" style="width:30px"> </i><a
              href="mailto:vendas01.spo@vialogtransportes.com.br">vendas01.spo@vialogtransportes.com.br</a><br>
          </div>
          <div class="w3-col m6">
            <form action="action_page.php" method="post">
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" name="Nome" placeholder="Nome" required name="Nome">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border" type="email" name="Email" placeholder="Email" required name="Email">
                </div>
              </div>
              <input class="w3-input w3-border" type="text" name="Menssagem" placeholder="Menssagem" required name="Menssagem">
            </form>
          </div>
          <button class="w3-button w3-black w3-section w3-right"
              type="submit">ENVIAR</button>
        </div>
      </div>

    </section>

  </main>

  <?php
  include('footer.php')
    ?>


  <!---------------------END FOOTER SECTION---------------->


  <!-- Scroll [to top] -->
  <div id="scroll-to-top" class="scroll-to-top">
    <a href="#header" class="smooth-anchor"><button>
        <i class="bi bi-arrow-up"></i>
      </button></a>
  </div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>