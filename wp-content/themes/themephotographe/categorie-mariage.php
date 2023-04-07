<?php
/* Template Name: Modèle page de catégorie de mariage */
?>


<?php get_header(); ?>
<section>
   
        <div class="container py-5">

            <div class="row">
                <?php $params = array(
                    'post_type' => 'photo',

                    'numberposts' => 2,

                ) ?>

                <?php $photographiesSuggested = get_posts($params) ?>
                <?php $allPhotographies = get_posts($params); ?>

                <?php for ($i = 0; $i < count($allPhotographies); $i++) : ?>

                    <div class="col-md-6">
                        <div>
                            <?php $idPhotographie = $allPhotographies[$i]->ID; ?>
                            <img src="<?php echo get_field('image', $idPhotographie) ?>" alt="" width="100%">
                            <a href="<?php echo get_permalink($idPhotographie) ?>"><?php echo get_the_title($idPhotographie) ?></a>
                        </div>
                    </div>

                <?php endfor ?>
            </div>

            <div class="d-flex justify-content-center my-5">
                <button class="all-button">Toutes les photos</button>
            </div>

    </section>


<?php get_footer(); ?>