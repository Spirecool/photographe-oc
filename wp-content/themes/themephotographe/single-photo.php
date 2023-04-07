<div class="container">

    <?php get_header(); ?>

    <!-- <p> Modèle de CPT : photo </p> -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 left-single border-bottom border-dark">
                <h1 class="my-5 single-title w-50"><?php the_title(); ?></h1>
                <span> Référence : <?php the_field('reference'); ?> <br>
                    Catégorie : <?php the_terms(get_the_ID(), 'catphoto'); ?> <br>
                    Format :<?php the_terms(get_the_ID(), 'formatphoto'); ?> <br>
                    Type : <?php the_field('type'); ?> <br>
                    Année : <?php the_field('annee'); ?>
                </span>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="<?php the_field('image'); ?>" alt="Image" class="img-fluid" data-lightbox="image-1">
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5 border-bottom border-dark">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="col-md-6 mr-2">
                        <p>Cette photo vous intéresse ?</p>
                    </div>
                    <div class="col-md-2 mb-3">
                        <button class="contact-button">Contact</button>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <p>Deuxième div</p>
                </div>
            </div>
        </div>
    </section>


    <h2 class="my-5 text-uppercase"> Vous aimerez aussi </h2>

  
<section>
<div class="container py-5">

    <div class="row">
        <?php $params = array(
            'post_type' => 'photo',
            'numberposts' => 2,
            'exclude' => [$post->ID],

        ) ?>

        <?php $photographiesSuggested = get_posts($params) ?>
        <?php $allPhotographies = get_posts($params); ?>

        <?php for ($i = 0; $i < count($allPhotographies); $i++) : ?>

            <div class="col-md-6">

                <div class="container-block">
                    <div class="image-container-block">
                        <?php $idPhotographie = $allPhotographies[$i]->ID; ?>
                        <img src="<?php echo get_field('image', $idPhotographie) ?>" alt="" class="image-block">
                        <div class="overlay-block">
                            <p class="bottom-left"><?php echo get_the_title($idPhotographie) ?></p>
                            <p class="bottom-right"> <?php echo the_terms(($idPhotographie), 'catphoto'); ?></p>
                            <a href="<?php echo get_permalink($idPhotographie) ?>" <?php echo get_the_title($idPhotographie) ?> class="d-flex justify-content-center"> <button> Voir </button> </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor ?>
    </div>

    <div class="d-flex justify-content-center my-5">
        <button class="all-button">Toutes les photos</button>
    </div>

</section>


    <?php get_footer(); ?>
</div>