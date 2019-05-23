<?php
  function conectarBancoPDO() {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=ludgeros_projeto;", "ludgeros_acessoA", "h79rYz8n0J",
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  $pdo = conectarBancoPDO();
  $selBlog = $pdo->query("SELECT * FROM `blog` b, `linkBlog` l WHERE l.id = b.idLink")->fetchAll();
  $selLinkBlog = $pdo->query("SELECT * FROM `linkBlog` group by `segmento`")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Ludgero Sangaletti - Nutrição esportiva</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="admin/public/img/logoPequenoAzul.png">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C500%2C600%2C700%2C800%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate.css">
    <link rel="stylesheet" href="../assets/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Implementing Plugins -->
    <link  rel="stylesheet" href="../assets/vendor/animate.css">
    <link  rel="stylesheet" href="../assets/vendor/custombox/custombox.min.css">
    
    <!-- PARALLAXER -->
    <link  rel="stylesheet" href="../assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link  rel="stylesheet" href="../assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link  rel="stylesheet" href="../assets/vendor/dzsparallaxer/advancedscroller/plugin.css">

    <link rel="stylesheet" href="../assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="../assets/css/unify-core.css">
    <link rel="stylesheet" href="../assets/css/unify-components.css">
    <link rel="stylesheet" href="../assets/css/unify-globals.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="assetsNovoSite/css/styles.op-architecture.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../assets/css/custom.css">
  </head>

  <body>
    <main>
      <!-- Header v1 -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance"
              data-header-fix-moment="100" style="z-index: 1000;">
        <div class="dark-theme u-header__section g-transition-0_3 g-py-8 g-py-17--md"
             data-header-fix-moment-exclude="g-py-17--md"
             data-header-fix-moment-classes="light-theme u-theme-shadow-v1 fundoMenu g-py-10--md">
          <nav class="navbar navbar-expand-lg p-0 g-px-15">
            <div class="container g-pos-rel">
              <a href="/" class="g-hidden-lg-up navbar-brand mr-0">
                <img class="d-block g-width-220 g-width-220--md" src="logoNovo.png" alt="Image Description"
                           data-header-fix-moment-exclude="d-block"
                           data-header-fix-moment-classes="d-none">

                      <img class="d-none g-width-220 g-width-220--md" src="logoNovo.png" alt="Image Description"
                           data-header-fix-moment-exclude="d-none"
                           data-header-fix-moment-classes="d-block">
              </a>

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                <ul class="js-scroll-nav navbar-nav align-items-lg-center text-uppercase g-font-weight-700 g-letter-spacing-1 g-font-size-12 g-pt-20 g-pt-0--lg mx-auto"
                    data-splitted-breakpoint="992">
                  <li class="nav-item g-mr-30--lg g-mb-7 g-mb-0--lg active">
                    <a href="#home" class="nav-link p-0">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item g-mx-30--lg g-mb-7 g-mb-0--lg">
                    <a href="#about" class="nav-link p-0">Sobre mim</a>
                  </li>
                  <li class="nav-item g-mx-30--lg g-mb-7 g-mb-0--lg">
                    <a href="#servicos" class="nav-link p-0">Serviços</a>
                  </li>

                  <!-- Logo -->
                  <li class="g-hidden-lg-down nav-logo-item g-mx-15--lg">
                    <a href="/" class="js-go-to navbar-brand mr-0"
                       data-type="static">
                      <img class="d-block g-width-220 g-width-220--md" src="logoNovo.png" alt="Image Description"
                           data-header-fix-moment-exclude="d-block"
                           data-header-fix-moment-classes="d-none">

                      <img class="d-none g-width-220 g-width-220--md" src="logoNovo.png" alt="Image Description"
                           data-header-fix-moment-exclude="d-none"
                           data-header-fix-moment-classes="d-block">
                    </a>
                  </li>
                  <!-- End Logo -->

                  <li class="nav-item g-mx-30--lg g-mb-7 g-mb-0--lg">
                    <a href="#team" class="nav-link p-0">Blog</a>
                  </li>
                  <li class="nav-item g-ml-30--lg">
                    <a href="#contact" class="nav-link p-0">Contato</a>
                  </li>
                  <li class="nav-item g-mx-30--lg g-mb-7 g-mb-0--lg">
                    <a href="admin/public/home" class="nav-link p-0" target="_blank">Entrar</a>
                  </li>
                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="mt-3 navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-15 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header v1 -->

      <!-- Section Content -->
      <section id="home" class="u-bg-overlay g-pos-rel g-theme-bg-blue-dark-v1-opacity-0_8--after">
        <div class="js-carousel"
             data-autoplay="true"
             data-infinite="true"
             data-fade="true"
             data-speed="5000">
          <div class="js-slide g-bg-img-hero g-height-100vh" style="background-image: url(fundoHeader.jpg);"></div>

          <div class="js-slide g-bg-img-hero g-height-100vh" style="background-image: url(fundoHeader.jpg);"></div>
        </div>

        <div class="u-bg-overlay__inner g-absolute-centered w-100">
          <div class="container text-center g-max-width-750">
            <div class="text-uppercase u-heading-v2-4--bottom u-promo-title g-brd-primary">
              <h3 class="h3 g-letter-spacing-7 g-font-size-12 g-font-weight-400 g-color-white g-mb-25">
                Nutrição Clinica e Esportiva
              </h3>
              <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-3 g-color-white mb-0" style="font-size: 3.0rem;">
                Nutrição avançada, para todas as idades e objetivos
              </h2>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="about" class="g-pt-100 g-pb-100--md">
        <div class="container text-center g-max-width-750 g-mb-70">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary">
            <h3 class="h3 g-letter-spacing-5 g-font-size-12 g-font-weight-400 g-color-primary g-mb-25">Conheça</h3>
            <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-size-30 g-font-size-40--md mb-0">Sobre mim</h2>
          </div>
        </div>

        <div class="container px-0">
          <!-- Row -->
          <!-- Figure -->
          <figure class="d-md-flex align-items-center">
            <!-- Figure Body -->
            <div class="col-md-6 px-0">
              <div class="u-ns-bg-v1-bottom u-ns-bg-v1-right--md g-bg-white g-py-30 g-px-50">
                <!-- Figure Info -->
                <div class="g-mb-25">
                  <div class="g-mb-20">
                    <h4 class="h5 g-color-black g-mb-5">Ludgero Sangaletti</h4>
                    <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary">Nutricionista clinico e esportivo</em>
                  </div>
                  <p class="text-justify">
                    <span class="u-dropcap-bg g-bg-darkgray-radialgradient-circle g-color-white g-rounded-10 g-mr-20 g-mb-10">G</span>
                    raduado em Nutrição, pós-graduando em Nutrição Clinica e Esportiva, busca atender desde o público geral, que visa saúde, qualidade de vida, bem-estar e disposição para realizar as atividades cotidianas até o público especifico, que busca máxima performance esportiva. A nutrição envolve todas as fases da vida, exerce influência significativa na manutenção da saúde, prevenção, tratamento de diversas patologias e também fator determinante para desempenho no esporte. Uma coisa é certa, independente do objetivo, a Nutrição o auxiliará!
                  </p>
                </div>
                <!-- End Figure Info -->

                <!-- Figure Social Icons -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v2 u-icon-size--xs g-color-main g-bg-gray-light-v5 g-brd-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded-circle" href="https://www.facebook.com/ludgero.sangaletti" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v2 u-icon-size--xs g-color-main g-bg-gray-light-v5 g-brd-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded-circle" href="https://www.instagram.com/ludgerosangaletti/" target="_blank">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v2 u-icon-size--xs g-color-main g-bg-gray-light-v5 g-brd-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded-circle" href="#!" target="_blank">
                      <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </div>
            </div>
            <!-- End Figure Body -->

            <!-- Figure Image -->
            <div class="col-md-6 px-0">
              <img class="w-100" src="fotoPerfil.jpg" alt="Image Description">
              <!-- <img class="w-100" src="fotoPerfil.png" alt="Image Description"> -->
            </div>
            <!-- End Figure Image -->
          </figure>
          <!-- End Figure -->

          <!-- End Row -->
        </div>
      </section>
      <!-- End Section Content -->
      <div class="u-divider u-divider-solid u-divider-center mx-auto" style="z-index: 998; border-color: #2065a1;">
        <i class="fa fa-angle-down u-divider__icon g-color-white rounded-circle" style="background-color: #2065a1;"></i>
      </div>
      <!-- Section Content -->
      <section id="servicos" class="g-py-100 dzsparallaxer auto-init height-is-based-on-content use-loading" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 g-bg-repeat" style="height: 160%; background-image: url(../assets/img/bg/pattern-7.png)"></div>
        <!-- End Parallax Image -->
        <div class="container text-center g-max-width-750 g-mb-70 mt-5">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary">
            <h3 class="h3 g-letter-spacing-5 g-font-size-12 g-font-weight-400 g-color-primary g-mb-25">Serviços</h3>
            <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-size-30 g-font-size-40--md mb-0">Meus serviços</h2>
          </div>
        </div>

        <div class="container mb-5">
          <div id="processesTabs" class="tab-content container g-width-630 g-pb-50 g-pb-100--md">
            <div class="tab-pane fade show active" id="discuss" role="tabpanel">
              <div class="col-lg-12 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-angle-v1--top-right--bg-light g-bg-teal g-color-white text-center g-rounded-5 g-py-60 g-px-30">
                  <span class="u-icon-v2 g-rounded-5 g-mb-25">
                    <i class="icon-medical-004 u-line-icon-pro"></i>
                  </span>
                  <h3 class="h5 g-font-weight-600 mb-30 text-white">Consultas</h3>
                  <p class="g-color-white-opacity-0_8">
                      A consulta consiste na análise geral de fatores que compreendem o indivíduo e seu metabolismo, para elaboração de um plano alimentar que se adeque a rotina e seja capaz de fazer com que o paciente chegue ao seu objetivo, por meio de ajustes semanais, de acordo com as necessidades que levam em consideração a individualidade biológica de cada paciente.
                  </p>
                </div>
                <!-- End Icon Blocks -->
              </div>
  
            </div>
            <div class="tab-pane fade" id="creativeConcept" role="tabpanel">
              <div class="col-lg-12 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-angle-v1--top-right--bg-light g-bg-teal g-color-white text-center g-rounded-5 g-py-60 g-px-30">
                  <span class="u-icon-v2 g-rounded-5 g-mb-25">
                    <i class="icon-science-028 u-line-icon-pro"></i>
                  </span>
                  <h3 class="h5 g-font-weight-600 mb-30 text-white">Exames</h3>
                  <p class="g-color-white-opacity-0_8">
                      Avaliação e interpretação de exames previamente solicitados, que podem indicar possíveis disfunções a níveis: hormonais e metabólicos, que servem como base para elaboração de uma estratégia alimentar individualizada condizente com o estado atual do paciente, levando em consideração suas especificidades, havendo necessidade também serve como base para encaminhamento a outros profissionais.
                  </p>
                </div>
                <!-- End Icon Blocks -->
              </div>
            </div>
            <div class="tab-pane fade" id="modeling3D" role="tabpanel">
              <div class="col-lg-12 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-angle-v1--top-right--bg-light g-bg-teal g-color-white text-center g-rounded-5 g-py-60 g-px-30">
                  <span class="u-icon-v2 g-rounded-5 g-mb-25">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </span>
                  <h3 class="h5 g-font-weight-600 mb-30 text-white">Diagnósticos</h3>
                  <p class="g-color-white-opacity-0_8">
                      Resultados precisos sobre o estado alimentar atual do paciente, bem como distúrbios causados ou ocasionados por hábitos alimentares inadequados, por meio de relatórios e gráficos demonstrativos, de fácil compreensão e que servem como diagnóstico para investigação aprofundada.
                  </p>
                </div>
                <!-- End Icon Blocks -->
              </div>
            </div>

            <div class="tab-pane fade" id="happyClients" role="tabpanel">
              <div class="col-lg-12 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-angle-v1--top-right--bg-light g-bg-teal g-color-white text-center g-rounded-5 g-py-60 g-px-30">
                  <span class="u-icon-v2 g-rounded-5 g-mb-25">
                    <i class="icon-food-021 u-line-icon-pro"></i>
                  </span>
                  <h3 class="h5 g-font-weight-600 mb-30 text-white">Avaliação Nutricional</h3>
                  <p class="g-color-white-opacity-0_8">
                      Análise completa do histórico alimentar do paciente, ingestão atual, gasto metabólico e total, por meio de inquéritos e questionários, que compreendem fatores de mediação, desencadeadores e gatilhos dos sinais e sintomas relatados pelo paciente.
                  </p>
                </div>
                <!-- End Icon Blocks -->
              </div>

            </div>

            <div class="tab-pane fade" id="fisica" role="tabpanel">
              <div class="col-lg-12 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-angle-v1--top-right--bg-light g-bg-teal g-color-white text-center g-rounded-5 g-py-60 g-px-30">
                  <span class="u-icon-v2 g-rounded-5 g-mb-25">
                    <i class="icon-sport-020 u-line-icon-pro"></i>
                  </span>
                  <h3 class="h5 g-font-weight-600 mb-30 text-white">Avaliação Física</h3>
                  <p class="g-color-white-opacity-0_8">
                      A avaliação física é imprescindivel em qualquer consulta nutricional, para estimarmos a composição corporal do indivíduo, traçar metas e objetivos com maior clareza, além de acompanhar sua evolução ao longo do tratamento. Essa avaliação é realizada por meio de antropometria completa e bioimpedância tetrapolar segmentar.
                  </p>
                </div>
                <!-- End Icon Blocks -->
              </div>
            </div>

          </div>

          <!-- Nav tabs -->
          <ul class="nav nav-fill text-center justify-content-center flex-md-nowrap u-nav-v8-2" role="tablist"
              data-target="nav-8-2-primary-hor-center"
              data-tabs-mobile-type="slide-up-down"
              data-btn-classes="btn btn-md u-btn-primary btn-block">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#discuss" role="tab">
                <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-font-size-20 g-rounded-50x g-brd-around g-brd-4 g-brd-white">
                  <i class="icon-medical-004 u-line-icon-pro"></i>
                </span>
                <strong class="text-uppercase u-nav-v8__title g-font-size-13 g-mb-5">Consultas</strong>
                <em class="u-nav-v8__description g-color-white-opacity-0_5">Mais informações +</em>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#creativeConcept" role="tab">
                <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-font-size-20 g-rounded-50x g-brd-around g-brd-4 g-brd-white">
                  <i class="icon-science-028 u-line-icon-pro"></i>
                </span>
                <strong class="text-uppercase u-nav-v8__title g-font-size-13 g-mb-5">Exames</strong>
                <em class="u-nav-v8__description g-color-white-opacity-0_5">Mais informações +</em>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#modeling3D" role="tab">
                <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-font-size-20 g-rounded-50x g-brd-around g-brd-4 g-brd-white">
                  <i class="icon-medical-022 u-line-icon-pro"></i>
                </span>
                <strong class="text-uppercase u-nav-v8__title g-font-size-13 g-mb-5">Diagnósticos</strong>
                <em class="u-nav-v8__description g-color-white-opacity-0_5">Mais informações +</em>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#happyClients" role="tab">
                <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-font-size-20 g-rounded-50x g-brd-around g-brd-4 g-brd-white">
                  <i class="icon-food-021 u-line-icon-pro"></i>
                </span>
                <strong class="text-uppercase u-nav-v8__title g-font-size-13 g-mb-5">Avaliação nutricional</strong>
                <em class="u-nav-v8__description g-color-white-opacity-0_5">Mais informações +</em>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#fisica" role="tab">
                <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-font-size-20 g-rounded-50x g-brd-around g-brd-4 g-brd-white">
                  <i class="icon-sport-020 u-line-icon-pro"></i>
                </span>
                <strong class="text-uppercase u-nav-v8__title g-font-size-13 g-mb-5">Avaliação Física</strong>
                <em class="u-nav-v8__description g-color-white-opacity-0_5">Mais informações +</em>
              </a>
            </li>
          </ul>
          <!-- End Nav tabs -->
        </div>
      </section>
      <!-- End Section Content -->
      
            <!-- Section Content -->
      <section id="team" class="g-bg-bluegray-lineargradient g-py-100">
        <div class="container text-center g-max-width-750 g-mb-70">
          <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-30">
            <h3 class="h3 g-letter-spacing-5 g-font-size-12 g-font-weight-400 g-color-primary g-mb-25">Blog</h3>
            <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-size-30 g-font-size-40--md g-color-white mb-0">Nosso blog</h2>
          </div>
        </div>
        <div id="shortcode">
          <div class="shortcode-html">
            <!-- Cube Portfolio Blocks -->
            <div class="clearfix">
              <!-- Cube Portfolio Blocks - Filter -->
              <ul id="filterControls" class="d-block list-inline text-center g-mb-50">
                <li class="list-inline-item cbp-filter-item cbp-filter-item-active g-brd-around g-theme-brd-blue-dark-v5 g-brd-primary--active text-white g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2"
                role="button" data-filter="*">Todos
                </li>
                <?php
                  $i = 0;
                  foreach ($selLinkBlog as $linkBlog) {
                    $i++;
                    $arrUrls[$i] = $linkBlog['nome'];
                ?>
                   <li class="list-inline-item cbp-filter-item g-brd-around g-theme-brd-blue-dark-v5 g-brd-primary--active text-white g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".<?=$linkBlog['id']?>">
                    <?=$linkBlog['segmento']?>
                  </li>
                <?php
                  }
                ?>
              </ul>
              <!-- End Cube Portfolio Blocks - Filter -->

              <!-- Cube Portfolio Blocks - Content -->
              <div class="cbp" data-controls="#filterControls" data-animation="quicksand" data-x-gap="15" data-y-gap="15" data-media-queries='[
                       {"width": 1500, "cols": 3},
                       {"width": 1100, "cols": 3},
                       {"width": 800, "cols": 3},
                       {"width": 480, "cols": 2},
                       {"width": 300, "cols": 1}
                     ]'>

                <?php 
                $u = 0;
                foreach ($selBlog as $blog):$u++; ?>
                  
                  <!-- Cube Portfolio Blocks - Item -->
                  <div class="cbp-item graphic <?=$blog['idLink']?>">
                    <div class="u-block-hover g-theme-brd-blue-dark-v5 g-brd-around g-color-black g-color-white--hover g-bg-cyan--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
                    <a target="_blank" href="https://www.ludgerosangaletti.com.br/admin/public/blog/artigo/<?=$blog['nome']?>">
                      <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="admin/public/uploads/imagesBlog/<?=$blog['imagem']?>" alt="Image Description">
                      <span class="g-font-weight-600 g-font-size-12 text-uppercase text-white"><?=$blog['titulo']?></span>
                      <!-- <h3 class="h4 g-font-weight-600 mb-0 text-white">Latest  VR product</h3> -->

                        <!-- Demo modal window -->
                          <div id="blog<?=$blog['id']?>" class="text-left g-max-width-1000 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
                            <button type="button" class="close" onclick="Custombox.modal.close();">
                              <i class="hs-icon hs-icon-close"></i>
                            </button>
                            <h4 class="g-mb-20 text-center"><?=$blog['titulo']?></h4>
                            <?=$blog['texto']?>
                          </div>
                        <!-- End Demo modal window -->
                    </div>
                  </div>
                  <!-- End Cube Portfolio Blocks - Item -->
                 </a>
                <?php endforeach ?>

              </div>
              <!-- End Cube Portfolio Blocks - Content -->
            </div>
            <!-- End Cube Portfolio Blocks -->
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Footer -->
      <footer>
        <div id="contact" class="g-py-80">
          <div class="container">
            <div class="container text-center g-max-width-750 g-mb-70">
              <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary">
                <h3 class="h3 g-letter-spacing-5 g-font-size-12 g-font-weight-400 g-color-primary g-mb-25">Contato</h3>
                <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-size-30 g-font-size-40--md mb-0">Fale conosco</h2>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9 g-mb-25 g-mb-0--md">
                <div class="row">
                  <div class="col-sm-6 form-group g-mb-30">
                    <input id="inputGroup1_1" class="form-control g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10" type="text" placeholder="Seu nome">
                  </div>

                  <div class="col-sm-6 form-group g-mb-30">
                    <input id="inputGroup1_2" class="form-control g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10" type="tel" placeholder="Seu telefone">
                  </div>

                  <div class="col-sm-6 form-group g-mb-30">
                    <input id="inputGroup1_3" class="form-control g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10" type="email" placeholder="E-mail *">
                  </div>

                  <div class="col-sm-6 form-group g-mb-30">
                    <input id="inputGroup1_4" class="form-control g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10" type="text" placeholder="Assunto">
                  </div>

                  <div class="col-md-12 form-group g-mb-30">
                    <textarea id="inputGroup1_5" class="form-control g-resize-none g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10" rows="4" placeholder="Mensagem"></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button class="btn btn-info btn-md text-uppercase g-line-height-1 g-font-weight-700 g-font-size-11 rounded-0 g-py-12 g-px-25 mb-0" type="submit" role="button">Enviar</button>
                </div>
              </div>

              <div class="col-md-3">
                <address class="row text-center">
                  <div class="col-sm-4 col-md-12 g-mb-30">
                    <i class="icon-directions icon d-inline-block g-font-size-20 g-color-primary g-mb-7"></i>
                    <h3 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-font-weight-400 g-mb-5">Endereço</h3>
                    <strong class="g-font-size-14 g-color-black">Rua professora Leonidia, 527 <br> Guarapuava - PR </strong>
                  </div>

                  <div class="col-sm-4 col-md-12 g-mb-30">
                    <i class="icon-call-in icon d-inline-block g-font-size-20 g-color-primary g-mb-7"></i>
                    <h3 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-font-weight-400g-mb-5">Telefone</h3>
                    <strong class="g-font-size-14 g-color-black">(42) 3622-3443</strong>
                  </div>

                  <div class="col-sm-4 col-md-12">
                    <i class="icon-envelope-open icon d-inline-block g-font-size-20 g-color-primary g-mb-7"></i>
                    <h3 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-font-weight-400 g-mb-5">E-mail</h3>
                    <a class="g-color-black g-color-black--hover" href="mailto:info@unify.com"><strong class="g-font-size-14">contato@ludgerosangaletti.com.br</strong></a>
                  </div>
                </address>
              </div>
            </div>
          </div>
        </div>

        <!-- Google (Map) [custom] -->
        <div class="g-pos-rel g-height-400">
          <div id="gMap7" class="js-g-map g-pos-abs w-100 h-100"
               data-type="custom"
               data-lat="-25.390782"
               data-lng="-51.466418"
               data-zoom="12"
               data-title="Architecture"
               data-styles='[
                 ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
                 ["", "labels", [{"visibility":"on"}]],
                 ["road.highway", "", [{"color":"#cc0033"}]],
                 ["water", "", [{"color":"#f7f4f4"}]]
               ]'
               data-pin="true"
               data-pin-icon="assetsNovoSite/img/pin.png"></div>
        </div>
        <!-- End Google (Map) [custom] -->

        <div class="text-center g-color-gray-dark-v5 g-theme-bg-blue-dark-v1 g-py-70">
          <a class="d-block g-width-220 mx-auto g-mb-30" href="/">
            <img class="img-fluid" src="logoNovo.png" alt="Image description">
          </a>

          <ul class="list-inline d-inline-block mb-0">
        <!--             <li class="list-inline-item g-mr-10">
              <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="#!"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item g-mr-10">
              <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="#!"><i class="fa fa-pinterest"></i></a>
            </li> -->
            <li class="list-inline-item g-mr-10">
              <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="https://www.facebook.com/ludgero.sangaletti" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="https://www.instagram.com/ludgerosangaletti/" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="#!"><i class="fa fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </footer>
      <!-- End Footer -->

      <a class="js-go-to u-go-to-v1" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <!-- JS Global Compulsory -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../assets/vendor/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/appear.js"></script>
    <script src="../assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="../assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Unify -->
    <script src="../assets/js/hs.core.js"></script>
    <script src="../assets/js/components/hs.header.js"></script>
    <script src="../assets/js/helpers/hs.hamburgers.js"></script>
    <script src="../assets/js/components/hs.scroll-nav.js"></script>
    <script src="../assets/js/components/hs.tabs.js"></script>
    <script src="../assets/js/components/hs.carousel.js"></script>
    <script src="../assets/js/components/gmap/hs.map.js"></script>
    <script src="../assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="../assets/js/custom.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

    <!-- JS Unify -->
    <script src="../assets/js/components/hs.cubeportfolio.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
      });
    </script>

    <!-- JS Plugins Init. -->
    <script>
      // initialization of google map
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }

      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        $('#processes [role="tablist"] .nav-link').on('click', function () {
          setTimeout(function () {
            $('#processesTabs .js-carousel').slick('setPosition');
          }, 200);
        });
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
          duration: 700
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
    </script>

    <!-- PARALAXER -->
    <!-- JS Implementing Plugins -->
    <script  src="../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script  src="../assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script  src="../assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script  src="../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script  src="../assets/js/components/hs.popup.js"></script>

    <!-- JS Implementing Plugins -->
    <script  src="../assets/vendor/custombox/custombox.min.js"></script>

    <!-- JS Unify -->
    <script  src="../assets/js/components/hs.modal-window.js"></script>

    <!-- JS Plugins Init. -->
    <script >
      $(document).on('ready', function () {
        // initialization of popups
        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
      });
    </script>

    <!-- JS Plugins Init. -->
    <script >
      $(document).ready(function () {
        // initialization of popups with media
        $.HSCore.components.HSPopup.init('.js-fancybox-media', {
          helpers: {
            media: {},
            overlay: {
              css: {
                'background': 'rgba(255, 255, 255, .8)'
              }
            }
          }
        });
      });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>
  </body>
</html>
