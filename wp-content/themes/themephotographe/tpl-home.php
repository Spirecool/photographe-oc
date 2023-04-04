<?php
/* Template Name: Modèle page d'accueil */
?>

<?php get_header(); ?>


<section class="image-bg">
    <h1><?php the_field('titre') ?></h1>
</section>

<section class="container my-6">
    <div class="d-flex justify-content-between">
        <div>
            <p class="pt-4">Catégories</p>

            <label class="select-wrap entypo-down-open-mini">
                <select name="category">
                    <option value="" selected ></option>
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
                    <option value="" >Portrait</option>
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
                    <option value="" selected ></option>
                    <option value="">Nouveautés</option>
                    <option value="">Les plus populaires</option>
                    <option value="">Les plus anciens</option>
                </select>
            </label>
        </div>
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