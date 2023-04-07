<?php
/* Template Name: Modèle page d'accueil */
?>

<?php get_header(); ?>


<section class="image-bg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1.png" alt="" class="img-fluid">
</section>


<section class="container my-6">
    <div class="d-flex justify-content-between">
        <div>
            <p class="pt-4">Catégories</p>

            <label class="select-wrap entypo-down-open-mini">
                <select name="category">
                    <option value="" selected></option>
                    <option value="">Mariage</option>
                    <option value="">Soirée d'entreprise</option>
                    <option value="">Anniversaire</option>
                    <option value="">Évènement</option>
                </select>
            </label>
        </div>
        <div>
            <p class="pt-4">Format</p>

            <label class="select-wrap entypo-down-open-mini">
                <select name="category">
                    <option value="" selected></option>
                    <option value="">Portrait</option>
                    <option value="">Paysage</option>
                    <option value="">1/1</option>
                    <option value="">A4</option>
                </select>
            </label>
        </div>
        <div>
            <p class="pt-4">Trier par</p>

            <label class="select-wrap entypo-down-open-mini">
                <select name="category">
                    <option value="" selected></option>
                    <option value="">Nouveautés</option>
                    <option value="">Les plus populaires</option>
                    <option value="">Les plus anciens</option>
                </select>
            </label>
        </div>
    </div>
</section>


<section>

    <!-- <div class="container my-5">
        <h2> Photos</h2>
        <?php the_field('texte_photographies'); ?>
        <div class="row">
            <?php $text = get_field('photographies') ?>
            <pre>
                <?php var_dump($text); ?>
            </pre>
        </div>

    </div> -->
</section>

<section>
    <div class="container py-5">

        <div class="row">

            <?php $params = array(
                'post_type' => 'photo',
                // -1 permet de récupérer tous les éléments
                'numberposts' => -1,
                'orderby' => 'date',
                'order' => 'ASC',
            ); ?>

            <?php $photos = get_posts($params); ?>

            <?php for ($i = 0; $i < count($photos); $i++) : ?>

                <div class='col-md-6'>
                    <div>
                        <?php $idPhoto = $photos[$i]->ID; ?>
                        <!-- <img src="<?php echo get_field('image', $idPhoto) ?>" alt="" width="100%"> -->

                        <div class="container-block">
                            <div class="image-container-block">
                                <img src="<?php echo get_field('image', $idPhoto) ?>" alt="" class="image-block">
                                <div class="overlay-block">
                                    <p class="bottom-left"><?php echo get_the_title($idPhoto) ?></p>
                                    <p class="bottom-right"> <?php echo the_terms(($idPhoto), 'catphoto'); ?></p>
                                    <a href="<?php echo get_permalink($idPhoto) ?>" class="d-flex justify-content-center"> <button> Voir </button> </a>
                                </div>
                            </div>
                        </div>
<!-- 
                        <h3> <?php echo get_the_title($idPhoto) ?></h3>

                        <p> Catégorie : <?php echo the_terms(($idPhoto), 'catphoto'); ?></p> -->
                    </div>
                </div>

            <?php endfor ?>

        </div>

        <div class="d-flex justify-content-center my-5">
            <button class="all-button">Toutes les photos</button>
        </div>

</section>






<?php get_footer(); ?>