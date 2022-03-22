  <footer class="footer">
    <section class="footer__newsletter">
      <div class="container">
        <div class="titulo-newsletter">
          <i class="fa-solid fa-envelope-open"></i>
          <span>
            <h2>Newsletter CNN Brasil</h2>
            <h3>O melhor do nosso conteúdo, no conforto do seu e-mail.</h3>
          </span>
        </div>
        <form class="form-newsletter">
          <input class="input-newsletter" type="email" placeholder="Digite seu e-mail aqui">
          <button class="button-newsletter">Assinar</button>
        </form>
      </div>
    </section>

    <section class="footer__mapa-site">
      <div class="container">
        <figure class="footer-logo">
          <img src="<?php echo get_template_directory_uri().'/assets/cnn-logo.svg'; ?>" alt="CNN Brasil">
        </figure>
        <nav class="footer-menu">
          <a class="footer-link" href="#">Política</a>
          <a class="footer-link" href="#">Nacional</a>
          <a class="footer-link" href="#">Business</a>
          <a class="footer-link" href="#">Internacional</a>
          <a class="footer-link" href="#">Saúde</a>
          <a class="footer-link" href="#">Tecnologia</a>
          <a class="footer-link" href="#">Esporte</a>
          <a class="footer-link" href="#">Entretenimento</a>
          <a class="footer-link" href="#">Estilo</a>
          <a class="footer-link" href="#">Viagem & Gastronomia</a>
        </nav>
        <div class="footer-social-media">
          <h3>Siga-nos</h3>
          <nav>
            <a href="https://www.facebook.com/cnnbrasil/" target="_blank" rel="noopener noreferrer"
              aria-label="Siga-nos no Facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/CNNBrasil" target="_blank" rel="noopener noreferrer"
              aria-label="Siga-nos no Twitter">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/company/cnnbrasil/" target="_blank" rel="noopener noreferrer"
              aria-label="Siga-nos no LinkedIn">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/cnnbrasil/?hl=pt-br" target="_blank" rel="noopener noreferrer"
              aria-label="Siga-nos no Instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/CNNbrasil" target="_blank" rel="noopener noreferrer"
              aria-label="Siga-nos no Youtube">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </nav>
        </div>
      </div>
      <div class="container container--copy">
        <p class="footer-copy">
          © 2021 Cable News Network Brasil. Uma empresa NOVUS MÍDIA. Todos os direitos reservados.
        </p>
      </div>
    </section>
  </footer>

  <template id="post-template">
    <article class="posts-content__post">
      <nav class="share">
        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Compartilhe no Facebook">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Compartilhe no Twitter">
          <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Compartilhe no LinkedIn">
          <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Compartilhe no Messenger">
          <i class="fa-brands fa-facebook-messenger"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Compartilhe via Whatsapp">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Compartilhe por e-mail">
          <i class="fa-solid fa-envelope-open"></i>
        </a>
      </nav>
      <h1 data-js="post-title" class="post-title"></h1>
      <div class="post-author">
        <img src="" alt="" class="post-author__avatar" data-js="post-author-avatar" />
        <div class="post-author__infos">
          <h2 data-js="post-author-name" class="post-author__name"></h2>
          <p data-js="post-publish-data" class="post-author__post-date"></p>
        </div>
      </div>
      <img src="" alt="" class="post-image" data-js="post-image">
      <p data-js="post-resume" class="post-resume"></p>
      <a href="#" class="post-button" target="_blank" data-js="post-button">
        Continuar lendo
      </a>
    </article>
  </template>

  <?php wp_footer() ?>
</body>
</html>