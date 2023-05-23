<!DOCTYPE html>

<head>
  <?php wp_head(); ?>
  <!--  Adicionando classes e dependencias padrões do wp no header da pagina -->
</head>

<body <?php body_class(); ?>>
  <!-- Adicionar classes padrões do wp ao body e tambem posso adicionar classes adicionais como parametro para melhor estilização no meu site -->
  <header>
    <?php
    if(has_custom_logo()) {
        the_custom_logo();
    } 
    ?>


    <h1> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> </h1>

    <div style="clear:both"></div>
    <?php 
            if (has_nav_menu('primary')) { // Checando se há um menu com identificado chamado primary existente
                wp_nav_menu(array( // Renderizando um menu chamado primary com os parametros da documentação.
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' => 'main_menu',
                    'fallback_cb' => false
                ));
            }
        ?>
  </header>