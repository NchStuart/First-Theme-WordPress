<?php get_header(); ?>
<!--  Estou chamando o arquivo header.php para cá -->

<section>
  <div class="container">
    <?php while(have_posts()): ?>
    <?php the_post(); ?>
    <!-- Irá definir cada post aqui -->

    <?php get_template_part('template-parts/post')?>

    <?php endwhile; ?>

  </div>

  <?php get_sidebar(); ?>
  <!-- Chama o arquivo sidebar.php para cá -->

  <div style="clear:both"></div> <!-- Limpa os floats -->

</section>

<?php get_footer(); ?>
<!--  Estou chamando o arquivo footer.php para cá -->