<sidebar> 
<?php if (is_active_sidebar('np_sidebar')) { // Checa se existe uma sidebar ativa com o nome np_sidebar
    dynamic_sidebar('np_sidebar'); // Rendderiza uma sidebar chamada np_sidebar
} ?>

</sidebar>