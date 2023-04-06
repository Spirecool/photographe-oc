<?php
/* Template Name: Modèle page du Portfolio */
?>


<?php get_header(); ?>

<?php get_header(); ?>
<section class="container my-6">

    <h1><?php the_title(); ?></h1>
    <?php the_field('introduction'); ?>


    <!-- On utilise la fonction WP get_posts pour récupérer toutes nos photos -->

    <?php $params = array(
        'post_type' => 'photo',
        // -1 permet de récupérer tous les éléments
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
    ); ?>

    <?php $allPhotographies = get_posts($params); ?>
    <pre>
        <?php var_dump($allPhotographies); ?>
    </pre>


</section>


<?php get_footer(); ?>