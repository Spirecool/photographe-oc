<div class="container">

    <?php get_header(); ?>

    <!-- <p> Modèle de CPT : photo </p> -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 left-single border-bottom border-dark">
                <h1 class="my-5 single-title w-50"><?php the_title(); ?></h1>
                <span> Référence : <?php the_field('reference'); ?> <br>
                    Catégorie : <?php the_field('categories'); ?> <br>
                    Format : <?php the_field('format'); ?> <br>
                    Type : <?php the_field('type'); ?> <br>
                    Année : <?php the_field('annee'); ?>
                </span>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="<?php the_field('image'); ?>" alt="Image" class="img-fluid ">
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
</div>