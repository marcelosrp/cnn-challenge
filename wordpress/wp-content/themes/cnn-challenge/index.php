<?php get_header(); ?>
<main class="main">
    <section class="colunistas">
      <div class="colunistas__conexao">
        <div class="colunistas__logo">
          <img src="<?php echo get_template_directory_uri().'/assets/CNN.svg'; ?>" alt="CNN Brasil">
          <h1>Conexão</h1>
        </div>
        <p>
          Nemo enim ipsam voluptatem quia voluptas sit
          <br>
          aspernatur aut odit aut fugit.
        </p>
      </div>

      <figure>
        <img src="<?php echo get_template_directory_uri().'/assets/prancheta.png'; ?>" class="colunistas__prancheta" alt="Prancheta com colunistas CNN Brasil">
      </figure>
    </section>

    <section class="contentBlog container">
      <div class="posts-content" data-js="posts-list">
        <button data-js="button-mais-posts" class="contentBlog__buttonCarregar d-none">
          Carregar mais de Colunas +
        </button>

        <div data-js="loading" class="loader d-none">Loading...</div>
      </div>

      <aside class="contentAside">
        <?php get_sidebar(); ?>
      </aside>
    </section>

    <section class="posts-recentes">
      <div class="container">
        <h1>Mais recentes da CNN</h1>

        <div class="posts-recentes__posts">
          <article class="posts-recentes__post">
            <figure>
              <img
                src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/03/PUTIN-REUNIAO-GOVERNO.png?w=180&h=150&crop=1"
                alt="Foto do Presidente Putin sentado">
            </figure>
            <p>
              Sem rastros: especialistas em Rússia contam como Putin esconde uma fortuna
            </p>
          </article>
          <article class="posts-recentes__post">
            <figure>
              <img
                src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/03/PUTIN-REUNIAO-GOVERNO.png?w=180&h=150&crop=1"
                alt="Foto do Presidente Putin sentado">
            </figure>
            <p>
              Sem rastros: especialistas em Rússia contam como Putin esconde uma fortuna
            </p>
          </article>
          <article class="posts-recentes__post">
            <figure>
              <img
                src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/03/PUTIN-REUNIAO-GOVERNO.png?w=180&h=150&crop=1"
                alt="Foto do Presidente Putin sentado">
            </figure>
            <p>
              Sem rastros: especialistas em Rússia contam como Putin esconde uma fortuna
            </p>
          </article>
          <article class="posts-recentes__post">
            <figure>
              <img
                src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/03/PUTIN-REUNIAO-GOVERNO.png?w=180&h=150&crop=1"
                alt="Foto do Presidente Putin sentado">
            </figure>
            <p>
              Sem rastros: especialistas em Rússia contam como Putin esconde uma fortuna
            </p>
          </article>
          <article class="posts-recentes__post">
            <figure>
              <img
                src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/03/PUTIN-REUNIAO-GOVERNO.png?w=180&h=150&crop=1"
                alt="Foto do Presidente Putin sentado">
            </figure>
            <p>
              Sem rastros: especialistas em Rússia contam como Putin esconde uma fortuna
            </p>
          </article>
          <article class="posts-recentes__post">
            <figure>
              <img
                src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/03/PUTIN-REUNIAO-GOVERNO.png?w=180&h=150&crop=1"
                alt="Foto do Presidente Putin sentado">
            </figure>
            <p>
              Sem rastros: especialistas em Rússia contam como Putin esconde uma fortuna
            </p>
          </article>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>