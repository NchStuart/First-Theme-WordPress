<?php get_header(); ?>
<!--  Estou chamando o arquivo header.php para cá -->

<section>
  <div class="container">
    <?php if(have_posts()): ?>
    <!-- Checando se existem posts -->
    <?php while(have_posts()): ?>
    <?php the_post(); ?>
    <!-- Irá definir cada post aqui -->

    <?php get_template_part('template-parts/post')?>

    <?php endwhile; ?>
    <?php endif; ?>

    <div class="paginacao">
      <div class="pagina_anterior">
        <?php previous_posts_link('Posts Anteriores'); ?>
      </div>
      <div class="pagina_proxima">
        <?php next_posts_link('Próxima Pagina'); ?>
      </div>
    </div>

  </div>

  <?php get_sidebar(); ?>
  <!-- Chama o arquivo sidebar.php para cá -->

  <div style="clear:both"></div> <!-- Limpa os floats -->

</section>

<?php get_footer(); ?>
<!--  Estou chamando o arquivo footer.php para cá -->