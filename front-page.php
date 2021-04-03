<?php get_header(); ?>

<div class="slider"></div>

<div class="container hero-wrapper">
    <div class="row flex-lg-row-reverse justify-content-md-center">
        <div class="col-12 col-lg-6 mt-3 mt-md-5 text-center">
            <img class="img-fluid d-lg-none" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/hero-img-small.svg'; ?>" alt="Illustration stage">
            <img class="img-fluid d-none d-lg-block pl-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/hero-img-md.svg'; ?>" alt="Illustration stage">
        </div>

        <div class="col-12 col-md-8 col-lg-6 mt-5 pt-4 pt-md-0">
            <span class="up-title">UE3TC05</span>
            <h1 class="hero-title font-title violet big-text">Stage d'application professionnelle</h1>
            <p class="light pr-lg-4">C'est suite à un post remarqué sur LinkedIn, que la société Htag Consulting à bien voulu discuter avec moi.</p>
            <p class="strong pr-lg-4">Après quelques échanges et un entretien probant, nous décidons de collaborer lors d'un stage.</p>
            <div class="row my-5">
                <div class="col-12">
                    <a href="<?= bloginfo('url') . '/rapport-lancement'; ?>" class="btn btn-primary btn-lg waves-effect waves-light d-block d-sm-inline-flex btn-rapport-1 ml-md-0"><i class="material-icons star-icon">star</i>Voir le rapport de lancement</a>
                </div>
                <div class="col-12 mt-2">
                    <a href="#!" class="link">À propos de ce thème</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>