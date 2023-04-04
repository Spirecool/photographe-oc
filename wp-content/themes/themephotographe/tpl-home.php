<?php
/* Template Name: Modèle page d'accueil */
?>

<?php get_header(); ?>


<div class="image-bg">
    <h1><?php the_field('titre') ?></h1>
</div>

<section class="container my-6">
    <div class="d-flex">
        Sélecteurs
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                <?php endwhile;
                endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>