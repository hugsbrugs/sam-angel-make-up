<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Soins Esthétiques à Sénas : maquillage, épilation, anglerie, sions du visage. Diplômée de maquillage artistique. Epilation à domicile.">
    <meta name="author" content="Hugo Maugey">

    <title>Sam Angel Make Up : Maquillage Epillation Onglerie à Sénas</title>

    <link rel="shortcut icon" href="favicon.ico">

   <?php include __DIR__ . '/html/header-scripts.php'; ?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="fullPage"></div>

    <?php include __DIR__ . '/html/menu.php'; ?>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Sam Angel Make Up</h1>
                        <p class="intro-text">
                            <!-- Maquillage - Onglerie - Soins - Epillation -->
                            <a class="page-scroll" href="maquillage">Maquillage</a> - 
                            <a class="page-scroll" href="onglerie">Onglerie</a> - 
                            <a class="page-scroll" href="soins-du-visage">Soins</a> - 
                            <a class="page-scroll" href="epilation">Epilation</a>
                        </p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="text-center">Présentation</h2>
                <p class="text-justify">Esthéticienne diplômée de Maquillage artistique depuis 1998, et titulaire d’un diplôme de prothésiste ongulaire depuis 2014. J'aime le contact humain, j’apprécie de prendre le temps nécessaire avec mes clientes pour les guider au mieux dans leurs objectifs beauté. Je pars du principe qu'il faut connaître au mieux sa cliente pour que les soins soient conformes à ses attentes. Je pratique les soins chez mes clientes, mais je peux aussi vous recevoir à mon domicile où j'ai aménagé une pièce afin que celles d’entre vous qui veulent changer d’environnement puissent se détendre pleinement. Je pratique mes soins sur une clientèle féminine et masculine.</p>

                <h2 class="text-center">Mes formations</h2>
            </div>
        </div>

        <div class="row" style="margin-top:50px;">
            <div class="col-lg-6 col-lg-offset-3">
                
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-caption">
                                Esthéticienne Diplômée d'Etat (école Susini - 1998)
                            </div>
                            <img src="img/ecoles/susini_ecole_coiffure_esthetique.jpg" class="img-responsive" alt="Logo école de coiffure esthétique Susini">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                Certificat de maquillage artistique (école Sophie Lecomte - 1998)
                            </div>
                            <img src="img/ecoles/sophie-lecomte-ecole-de-maquillage-artistique.jpg" class="img-responsive" alt="Logo école de maquillage Sophie Lecomte">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                Certificat d'onglerie Alessandro (2014)
                            </div>
                            <img src="img/ecoles/alessandro_ongles.jpg" class="img-responsive" alt="Certificat d'onglerie Alessandro">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

                <h2 class="text-center">Prestations à domicile :</h2>    
                <p>Sénas, Lamanon, Eyguières, Mallemort, Alleins, Pont Royal, Mérindol, Orgon, Plan d'Orgon, Eygalières, Cavaillon, Cheval Blanc, Les Taillades, Saint Andiol, Charleval, Vernègues, Cabannes</p>

                <h3 class="text-center">Prestations à l'institut possibles</h3>

                <h3 class="text-center">Possibilités de déplacement longues distances pour mariages ou prestations collectives</h3>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <?php include __DIR__ . '/html/contact.php'; ?>
    <?php include __DIR__ . '/html/footer.php'; ?>
    <?php include_once __DIR__ . '/php/analyticstracking.php' ?>

</body>
</html>
