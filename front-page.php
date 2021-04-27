<?php get_header(); ?>

<div id="fullpage">


    <div class="container hero-wrapper section">
        <div class="row flex-lg-row-reverse justify-content-md-center hero-content">
            <div class="col-12 col-lg-6 mt-3 mt-md-5 text-center">
                <img class="img-fluid d-lg-none"
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/img/hero-img-small.svg'; ?>"
                    alt="Illustration stage">
                <img class="img-fluid d-none d-lg-block pl-5"
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/img/hero-img-md.svg'; ?>"
                    alt="Illustration stage">
            </div>

            <div class="col-12 col-md-8 col-lg-6 mt-5 pt-4 pt-md-0">
                <span class="up-title">UE3TC05</span>
                <h1 class="hero-title font-title violet big-text">Stage d'application professionnelle</h1>
                <p class="light pr-lg-4">C'est suite à un post remarqué sur LinkedIn, que la société Htag Consulting a
                    bien voulu discuter avec moi.</p>
                <p class="strong pr-lg-4">Après quelques échanges et un entretien probant, nous décidons de collaborer
                    lors d'un stage.</p>
                <div class="row my-5">
                    <div class="col-12">
                        <a href="<?= bloginfo('url') . '/rapport-lancement'; ?>"
                            class="btn btn-primary btn-lg waves-effect waves-light d-block d-sm-inline-flex btn-rapport-1 ml-sm-0"><i
                                class="material-icons star-icon">star</i>Voir le rapport de lancement</a>
                    </div>
                    <div class="col-12 mt-2 text-center text-sm-left">
                        <a href="<?= bloginfo('url') . '/a-propos'; ?>" class="link">À propos de ce thème</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hero-wrapper watermark-2 section">
        <div class="row justify-content-md-center hero-content">
            <div class="col-12 col-lg-6 mt-3 mt-md-5 text-center">
                <img class="img-fluid d-lg-none"
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/img/avancement-img-small.svg'; ?>"
                    alt="Illustration avancement">
                <img class="img-fluid d-none d-lg-block pr-5"
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/img/avancement-img-md.svg'; ?>"
                    alt="Illustration avancement">
            </div>

            <div class="col-12 col-md-8 col-lg-6 mt-5 pt-4 pt-md-0">
                <span class="up-title pl-lg-4">Avancement</span>
                <h1 class="hero-title font-title violet big-text pl-lg-4">L'application bat la mesure</h1>
                <p class="light pl-lg-4">Après un petit temps d'adaptation, je commence à trouver mon rythme de
                    croisière.</p>
                <p class="strong pl-lg-4">C'est avec une grande motivation que l'UE3TC05 se déroule en ce moment.</p>
                <div class="row my-5 px-lg-4">
                    <div class="col-12">
                        <a href="<?= bloginfo('url') . '/rapport-avancement'; ?>"
                            class="btn btn-primary btn-lg waves-effect waves-light d-block d-sm-inline-flex btn-rapport-1 ml-sm-0"><i
                                class="material-icons star-icon">star</i>Voir le rapport d'avancement</a>
                    </div>
                    <div class="col-12 mt-2 text-center text-sm-left">
                        <a href="<?= bloginfo('url') . '/a-propos'; ?>" class="link">À propos de ce thème</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>