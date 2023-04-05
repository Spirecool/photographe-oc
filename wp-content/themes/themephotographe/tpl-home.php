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

            <?php $photos = get_field('photographies'); ?>
            <?php for ($i = 0; $i < count($photos); $i++) : ?>
                <div class='col-md-6'>
                    <div>
                        <?php $idPhoto = $photos[$i]; ?>
                        <img src="<?php echo get_field('image', $idPhoto) ?>" alt="" width="100%">
                        <h3> <?php echo get_the_title($idPhoto) ?></h3>
                        <button>df</button>
                    </div>
                </div>
            <?php endfor ?>

        </div>

</section>

<?php get_footer(); ?>