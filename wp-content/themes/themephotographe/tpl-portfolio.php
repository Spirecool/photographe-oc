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

<ul>
    <?php for ($i=0; $i < count($allPhotographies) ; $i++) : ?> 

    <li>
        <?php $idPhotographie = $allPhotographies[$i]->ID; ?>
        <a href="<?php echo get_permalink($idPhotographie) ?>"><?php echo get_the_title($idPhotographie) ?></a>

    </li>
    <?php endfor ?>
</ul>

    <pre>
        <?php var_dump($allPhotographies); ?>
    </pre>


</section>


<?php get_footer(); ?>