<?php if (post_password_required()) { // Estou checando se o post que estou exibindo os comentarios precisa de senha, se precisar ele irá parar a execução desta pagina.
    return;
} 

if (have_comments()) { // chegando se existem comentarios
    foreach($comments as $comment) {
        ?> 

        <div class="comentario">
            <div class="comentario_foto">
                <?php echo get_avatar($comment, 60); ?>
            </div>
            <div class="comentario-area">
                <strong><?php comment_author(); ?></strong> - <?php comment_date(); ?> <br>
                <?php comment_text(); ?>
            </div>
        </div>
        
        <?php
    }

    the_comments_pagination();
}



comment_form(array(
    'comment_field' => 'Comentário: * <br /> <textarea name="comment"> </textarea> <br />',
    'fields' => array(
        'author' => 'Nome: <input type="text" name="author" placeholder="Digite seu nome" /> <br />',
        'email' => 'Email: <input type="email" name="email" placeholder="Digite seu email" /> <br />',
        'url' => 'Site: <input type="text" name="url" placeholder="Digite seu site" /> <br />'
    ),
    'class_submit' => 'botao',
    'label_submit' => 'Envie seu comentário',
    'title_reply' => 'Deixe um comentário no meu site'
));



?>