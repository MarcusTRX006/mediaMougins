<!-- Livres graphes -->
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Répartition des livres par genre"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: <?php echo json_encode(Livre::livreParGenre(), JSON_NUMERIC_CHECK) ?>
	}]
});
chart.render();

}
</script>

<main role="main">

<!--Partie top-->
    <section id="ban0" class="py-2">
        <div class="container pt-5 pb-5">
            <h2 class="mt-5 pb-3">Bienvenue, vos idées, notre savoir...</h2>
            <p class="text-align left">Vous avez une question ? Besoin d'un renseignement ? N'hésitez pas à contacter le service des médiathèques et bibliothèques de la Mairie de Mougins.</p>
                <p>" MERCI REMPLIR LE FORMULAIRE POUR ETRE ADHERENT "</p>
        </div>
    </section>
<br>

<!-- Section Statistique -->
<div class="container">
    <div class="row">
        <div class="col-md-8" style="height: 600px">
            <div class="card border-primary mb-3" style="height: 600px">
                <div class="card-header">Statistiques des livres</div>
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <div class="card-text" id="chartContainer"></div>
                    </div>
            </div>
        </div>
    <div class="col-md-4" style="height: 600px">
        <div class="card border-primary mb-3" style="height: 600px">
            <div class="card-header">Statistiques générales</div>
                <div class="card-body mt-5">
                    <h4 class="card-title text-center"><a href="index.php?uc=livres&action=list">
                        <span class="badge badge-success"> <?php echo Livre::nombreLivres(); ?></span> livres</a></h4>
                        <hr>
                                <h4 class="card-title text-center"><a href="index.php?uc=auteurs&action=list">
                            <span class="badge badge-primary"> <?php echo Auteur::nombreAuteurs(); ?></span> auteurs</a></h4>
                        <hr>
                                <h4 class="card-title text-center"><a href="index.php?uc=genres&action=list">
                            <span class="badge badge-danger"> <?php echo Genre::nombreGenres(); ?></span> genres</a></h4>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!--Partie A propos-->

    <section id="aPropos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>A propos</h2>
                    <hr>
                    <p>Notre tâche consiste a offrir un accès gratuit d'une large palette de documents et de services</p>
                </div>

                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">

                                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-chevron-right"></i>
                                        &nbsp;Les détails
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Une équipe entièrement à votre disposition
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-chevron-right"></i>
                                        &nbsp; Encore des détails
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">Des forfaits attractifs</div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fas fa-chevron-right"></i>
                                        &nbsp;Plus de détails
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Des offres de bienvenue.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

<!-- Section trois icones -->

    <section id="icones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <h2><i class="fab fa-android"></i>&nbsp;Livre</h2>
                    <p> Médiathèque et Espace Jeux de Mougins 16, place des Arcades 04 92 94 04 95 mediatheque@villedemougins.com </p>
                </div>
                <div class="col-md-4">
                    <h2><i class="fas fa-archway"></i>&nbsp;Boutique</h2>
                    <p>Médiathèque Tournamy Centre Commercial de Tournamy 04 93 75 33 82 </p>
                </div>
                <div class="col-md-4">
                    <h2><i class="fas fa-atom"></i>&nbsp;Service</h2>
                    <p>La médiathèque et bibliothèques de Mougins organisent et accueillent toute l’année de nombreux événements et ateliers pour adultes et enfants.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section premiere bannière image -->

    <section id="ban1" class="py-2">
        <div class="container pt-5 pb-5">
            <h2 class="pb-3">Etes-vous prêt à commencer ?</h2>
            <!-- disparait à md -->
            <p class="text-dark d-none d-md-block">Nous restons à votre écoute</p>
        </div>
    </section>

    <!-- Librairie 6 images  -->

    <section id="galerie">
        <div class="container">
            <h2 class="text-center h2Photos">Bienvenue</h2>
            <p class="text-center">Pour votre plaisirs</p>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row  mb-3">
                        <a href="./img/img1.jpg" data-toggle="lightbox"
                            data-gallery="example-gallery" class="col-sm-4">
                            <img src="./img/img1.jpg" alt ="Livre en paquet" class="img-fluid">
                        </a>
                        <a href="./img/img2.jpg" data-toggle="lightbox"
                            data-gallery="example-gallery" class="col-sm-4">
                            <img src="./img/img2.jpg" alt ="Livre ouvert" class="img-fluid">
                        </a>
                        <a href="./img/img3.jpg" data-toggle="lightbox"
                            data-gallery="example-gallery" class="col-sm-4">
                            <img src="./img/img3.jpg" alt ="Vieux livre" class="img-fluid">
                        </a>
                    </div>

                    <div class="row">
                        <a href="./img/img4.jpg" data-toggle="lightbox"
                            data-gallery="example-gallery" class="col-sm-4">
                            <img src="./img/img4.jpg" alt ="Lecture d'un livre" class="img-fluid">
                        </a>
                        <a href="./img/img5.jpg" data-toggle="lightbox"
                            data-gallery="example-gallery" class="col-sm-4">
                            <img src="./img/img5.jpg" alt ="Plan sur des livres" class="img-fluid">
                        </a>
                        <a href="./img/img6.jpg" data-toggle="lightbox"
                            data-gallery="example-gallery" class="col-sm-4">
                            <img src="./img/img6.jpg" alt ="Jeune femme qui lit un livre" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <!-- Section seconde bannière image -->

    <section id="ban2" class="py-2">
        <div class="container">
            <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="2800">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active text-center p-4">
                        <p class="font-italic">"Renseigner vous sur les nouveautés"
                        </p>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <p class="font-italic">"Salon du livre prochainement"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 cartes -->

    <section id="prix">
        <h3 class="text-center offreH"> Nos forfaits</h3>
            <hr>
                <div id="cartes" class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="threeCards">
                                <div class="header">
                                        <h2><span id="spanPrix">0€</span> / an</h2>
                                    <div class="price">
                                        <h2>Enfants</h2>
                                    </div>
                                </div>
                                <div id="btn"><a href="login">S'inscrire</a></div>
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="threeCards">
                                <div class="header">
                                    <h2><span id="spanPrix">2€</span> / an</h2>
                                    <div class="price">
                                        <h2>Etudiants</h2>
                                    </div>
                                </div>
                                <div id="btn"><a href="login">S'inscrire</a></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="threeCards">
                                <div class="header">
                                    <h2><span id="spanPrix">10€</span> / an</h2>
                                    <div class="price">
                                        <h2>Adultes</h2>
                                    </div>
                                </div>
                                <div id="btn"><a href="login">S'inscrire</a></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    <!-- Logo marque -->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="#">
                        <img src="img/spotify.jpg" alt="spotify">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="#">
                        <img src="img/microsoft.jpg" alt="microsoft">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="#">
                        <img src="img/apple.jpg" alt="apple">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="#">
                        <img src="img/google.jpg" alt="google">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>