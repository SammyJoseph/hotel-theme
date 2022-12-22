<?php get_header(); ?>

<?php get_template_part('public/partials/frontpage', 'carrousel') ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php 
                // the_content(); 
                $contenido = get_the_content();
                echo $contenido;
            ?>
        </div>
    </div>
</div> 

<?php get_footer(); ?>