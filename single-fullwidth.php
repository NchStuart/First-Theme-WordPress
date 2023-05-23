<?php 
/*
Template Name: Post Página Total 
Template Post Type: post
*/
?>

<?php get_header(); ?>
<!--  Estou chamando o arquivo header.php para cá -->

<section>
  <div class="container fullwidth">
    <?php if(have_posts()): ?>
    <!-- Checando se existem posts -->
    <?php while(have_posts()): ?>
    <?php the_post(); ?>
    <!-- Irá definir cada post aqui -->

    <article>

      <h2>
        <?php the_title(); ?>
      </h2>

      <?php if (has_post_thumbnail()): ?>
      <!--  Verificando se o posto há miniatura -->
      <?php the_post_thumbnail('thumbnail'); ?>
      <!-- Estou colocando a foto em um post, eu defino no primeiro parametro qual o tamanho dessa foto, eu posso colocar os tamanhos padrões que vem configurado no wordpress colocando 'full' = tamanho original da imagem,'thumbnail' = tamanho pequeno,'medium' tamanho medio, 'large' = tamanho grande 
                            - O segundo parametro é um array que você pode colocar proprieddes nas imagens
                        -->
      <?php endif; ?>

      <p>
        <?php echo get_the_date(); ?> |
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
        <?php the_category(', '); ?>
      </p>

      <?php the_content(); ?>
      <!-- Exibe o conteudo do post por inteiro -->
      </p>

      <p>
        <?php comments_number('0 Comentários', '1 Comentário', '% Comentários'); ?>
      </p>

      <hr />

      <?php if(comments_open()) {  // Checando se os comentarios está aberto a este post
                        comments_template(); // Puxando o arquivo comments.php para cá
                    }?>

    </article>

    <?php endwhile; ?>
    <?php endif; ?>

    <div class="paginacao">
      <div class="pagina_anterior">
        <?php previous_post_link(); ?>
      </div>
      <div class="pagina_proxima">
        <?php next_post_link(); ?>
      </div>
    </div>

  </div>

  <div style="clear:both"></div> <!-- Limpa os floats -->

</section>

<?php get_footer(); ?>
<!--  Estou chamando o arquivo footer.php para cá -->