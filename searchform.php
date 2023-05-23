<form role="search" method="GET" class="search-form" action="<?php echo esc_url(home_url('/')); ?>"> <!-- Metodo GET é padrão do wp para todos os formularios de pesquisa e a class search-form é padrão para plugins e outras funcionalidades do wp funcionar em conjunto com este formulario | esc_url para dar um clean e checar a url e o home_url é para retornar a uma url aonde o front-end é acessivel pelo usuario-->

<label for="s">doideirassss</label>
<input type="search" name="s" value="<?php the_search_query(); ?>"> <!-- name = s é padrão do wp e o value tem uma função que quando eu ja tiver feito uma busca ele vai preencher com o que eu digitei -->

<input type="submit" value="Buscar" />

</form>