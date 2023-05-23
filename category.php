<?php get_header(); ?> <!--  Estou chamando o arquivo header.php para cá -->

<section>
    <div class="container">
    <h1>
      <?php the_archive_title(); ?>
    </h1>

        <?php if(have_posts()): ?> <!-- Checando se existem posts --> 
            <?php while(have_posts()): ?>
                <?php the_post(); ?> <!-- Irá definir cada post aqui --> 

                <article>
                    <?php if (has_post_thumbnail()): ?> <!--  Verificando se o posto há miniatura --> 
                        <a href="<?php the_permalink(); ?>" class="post_thumbnail"> <!--  Exibe o link permanente da postagem atual. --> 
                            <?php the_post_thumbnail('thumbnail', array(
                                'class' => 'post-miniatura'
                            )); ?> <!-- Estou colocando a foto em um post, eu defino no primeiro parametro qual o tamanho dessa foto, eu posso colocar os tamanhos padrões que vem configurado no wordpress colocando 'full' = tamanho original da imagem,'thumbnail' = tamanho pequeno,'medium' tamanho medio, 'large' = tamanho grande 
                            - O segundo parametro é um array que você pode colocar proprieddes nas imagens
                        --> 
                        </a>
                    <?php endif; ?>

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                             <?php the_title(); ?>
                        </a>
                    </h2>

                    <p>
                        <?php echo get_the_date(); ?> | 
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
                        <?php the_category(', '); ?>
                    </p>

                    <p>
                        <?php the_excerpt(); ?> <!-- Exibe o conteudo do post mas respeitando as configurações do wordpress padrão na aba configurações e leitura do painel admin -->
                    </p>

                    <p>
                        <?php comments_number('0 Comentários', '1 Comentário', '% Comentários'); ?> |
                        <a href="<?php the_permalink(); ?>">LEIA MAIS</a>
                    </p>

                </article>

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

    <?php get_sidebar(); ?>  <!-- Chama o arquivo sidebar.php para cá -->

    <div style="clear:both"></div> <!-- Limpa os floats -->

</section>

<?php get_footer(); ?> <!--  Estou chamando o arquivo footer.php para cá -->