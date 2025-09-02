<h1> Minuto De Accion </h1>
<p>something wong?</p>
<?php 
    while(have_posts()) {
        the_post(); ?>
        <div>
            <h2><?php the_title() ?></h2>
            <div><?php the_content() ?></div>
        </div>
<?php }
?>