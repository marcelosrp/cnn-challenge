<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CNN Challenge Wordpress</title>
  <link rel="apple-touch-icon" sizes="180x180"
    href="https://www.cnnbrasil.com.br/wp-content/themes/master-theme/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="https://www.cnnbrasil.com.br/wp-content/themes/master-theme/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="https://www.cnnbrasil.com.br/wp-content/themes/master-theme/assets/favicon/favicon-16x16.png">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() .
      '/css/hamburgers.css'; ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
  <script defer src="<?php echo get_stylesheet_directory_uri() .
      '/assets/fontawesome/all.js'; ?>"></script>
  <script defer src="<?php echo get_stylesheet_directory_uri() .
      '/js/index.js'; ?>"></script>
</script>
</head>

<body>
  <div class="ads-big"></div>

  <header class="header">
    <section class="header__main" role="navigation">
      <div class="container">
        <a class="header__logo" href="/" aria-label="CNN Brasil">
          <figure>            
            <img src="<?php echo get_template_directory_uri() .
                '/assets/cnn-logo.svg'; ?>" alt="CNN Brasil">
          </figure>
        </a>

        <button data-js="hamburger" class="header__menu-mobile hamburger hamburger--slider" type="button"
          aria-label="Menu" aria-controls="navigation">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>

        <nav class="header__menu">
          <a href="#" class="header__linkMenu header__linkMenu--live">Ao Vivo</a>
          <a href="#" class="header__linkMenu">Política</a>
          <a href="#" class="header__linkMenu">Nacional</a>
          <a href="#" class="header__linkMenu">Business</a>
          <a href="#" class="header__linkMenu">Internacional</a>
          <a href="#" class="header__linkMenu">Saúde</a>
          <a href="#" class="header__linkMenu">Tecnologia</a>
          <a href="#" class="header__linkMenu">Esporte</a>
          <a href="#" class="header__linkMenu">Entretenimento</a>
          <a href="#" class="header__linkMenu">Estilo</a>
          <a href="#" class="header__linkMenu">Viagem & Gastronomia</a>
          <a href="#" class="header__linkMenu">Podcasts</a>
        </nav>
      </div>
    </section>
    <section class="header__searchForm">
      <div class="container">
        <form class="header__form" role="search" autocomplete="off">
          <button id="busca" class="search__form__image">
            <img loading="lazy" src="https://www.cnnbrasil.com.br/wp-content/themes/master-theme/assets/img/search.svg"
              alt="Busca">
          </button>
          <input type="text" placeholder="Pesquisar na CNN Brasil" required="required">
        </form>
      </div>
    </section>
  </header>