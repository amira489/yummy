<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Accueil - Modèle Bootstrap Yummy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Polices -->

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Fichiers CSS des fournisseurs -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Fichier CSS principal -->

  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Nom du modèle : Yummy
  * URL du modèle : https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Mis à jour le : 07 août 2024 avec Bootstrap v5.3.3
  * Auteur : BootstrapMade.com
  * Licence : https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body class="index-page">

@include('layouts.header')

  <main class="main">

<!-- Section Hero -->
<section id="hero" class="hero section light-background">

  <div class="container">
    <div class="row gy-4 justify-content-center justify-content-lg-between">
      <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Savourez une délicieuse<br>nourriture saine</h1>
<p data-aos="fade-up" data-aos-delay="100">Nous allions savoir-faire ancestral et créativité audacieuse pour créer une expérience gustative mémorable, à base de produits triés sur le volet chez nos producteurs locaux.</p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="{{route('booking.form')}}" class="btn-get-started">Réserver une table</a>&nbsp;
          <a href="{{route('commande.form')}}" class="btn-get-started">Passer une commande</a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- /Section Hero -->

<!-- Section À Propos -->
<section id="about" class="about section">

  <!-- Titre de Section -->
  <div class="container section-title" data-aos="fade-up">
    <h2>À Propos de Nous<br></h2>
    <p><span>En savoir plus</span> <span class="description-title">sur nous</span></p>
  </div><!-- Fin du Titre de Section -->

  <div class="container">

    <div class="row gy-4">
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/about.jpg" class="img-fluid mb-4" alt="">
        <div class="book-a-table">
          <h3>Réserver une table</h3>
          <p>+1 5589 55488 55</p>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
    <p class="fst-italic">
        Chez Yummy, nous croyons que chaque repas devrait être une expérience sensorielle mémorable,
        alliant des ingrédients frais et une créativité sans limites.
    </p>
    <ul>
        <li><i class="bi bi-check-circle-fill"></i> <span>Produits locaux sélectionnés avec soin pour une fraîcheur optimale</span></li>
        <li><i class="bi bi-check-circle-fill"></i> <span>Équipe culinaire primée avec 15 ans d'expérience gastronomique</span></li>
        <li><i class="bi bi-check-circle-fill"></i> <span>Cuisson précise au degré près et présentation artistique pour éveiller tous vos sens</span></li>
    </ul>
    <p>
        Notre engagement va au-delà de la simple restauration. Nous recréons une alchimie entre tradition et innovation,
        où chaque plat raconte une histoire. Des fournisseurs artisanaux aux techniques de fermentation maison,
        nous maîtrisons chaque étape pour vous offrir une authenticité sans compromis.
    </p>
          <div class="position-relative mt-4">
            <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Section À Propos -->

<!-- Section Pourquoi Nous -->
<section id="why-us" class="why-us section light-background">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="why-box">
          <h3>Pourquoi choisir Yummy</h3>
          <p>
    Choisir Yummy, c'est opter pour une symphonie culinaire où innovation rime avec tradition.
    Notre brigade étoilée réinvente quotidiennement les classiques gastronomiques avec une sélection
    rigoureuse de produits de saison issus de circuits courts. Des fours à bois ancestraux aux techniques
    de cuisson sous-vide high-tech, chaque recette bénéficie d'un savoir-faire transmis depuis trois générations.
    Nous accordons autant d'importance à l'empreinte écologique qu'au plaisir des papilles, avec
    95% de nos fournisseurs certifiés bio et une politique zéro plastique en cuisine.
</p>
          <div class="text-center">
            <a href="#" class="more-btn"><span>En savoir plus</span> <i class="bi bi-chevron-right"></i></a>
          </div>
        </div>
      </div><!-- Fin de la Boîte Pourquoi -->

      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-clipboard-data"></i>
              <h4>Traçabilité exemplaire</h4>
<p>Suivi rigoureux de chaque ingrédient de la ferme à l'assiette avec certifications BIO et AOP</p>
</div>
</div><!-- Fin de la Boîte Icône -->

<div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
<div class="icon-box d-flex flex-column justify-content-center align-items-center">
<i class="bi bi-gem"></i>
<h4>Excellence reconnue</h4>
<p>Lauréat du Trophée Gourmet 2023 et 2 étoiles au Guide Culinaire National</p>
</div>
</div><!-- Fin de la Boîte Icône -->

<div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
<div class="icon-box d-flex flex-column justify-content-center align-items-center">
<i class="bi bi-inboxes"></i>
<h4>Logistique maîtrisée</h4>
<p>Approvisionnement quotidien via notre flotte réfrigérée dédiée et 4 marchés partenaires</p>
            </div>
          </div><!-- Fin de la Boîte Icône -->

        </div>
      </div>

    </div>

  </div>

</section><!-- /Section Pourquoi Nous -->

<!-- Section Statistiques -->
<section id="stats" class="stats section dark-background">

  <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Clients</p>
        </div>
      </div><!-- Fin de l'Item Statistique -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projets</p>
        </div>
      </div><!-- Fin de l'Item Statistique -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
          <p>Heures de support</p>
        </div>
      </div><!-- Fin de l'Item Statistique -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
          <p>Travailleurs</p>
        </div>
      </div><!-- Fin de l'Item Statistique -->

    </div>

  </div>

</section><!-- /Section Statistiques -->

<!-- Section Témoignages -->
<section id="testimonials" class="testimonials section light-background">

  <!-- Titre de Section -->
  <div class="container section-title" data-aos="fade-up">
    <h2>TÉMOIGNAGES</h2>
    <p>Ce qu'ils disent <span class="description-title">de nous</span></p>
  </div><!-- Fin du Titre de Section -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="row gy-4 justify-content-center">
              <div class="col-lg-6">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Notre partenariat avec Yummy a révolutionné notre approche culinaire. Leur équipe a su traduire
notre vision en plats signature qui ont boosté notre fréquentation de 40% en 6 mois. Une synergie
rare entre créativité et rigueur opérationnelle.</span>
<i class="bi bi-quote quote-icon-right"></i>
</p>
<h3>Saul Goodman</h3>
<h4>PDG &amp; Fondateur</h4>
<div class="stars">
<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
</div>
</div>
</div>
<div class="col-lg-2 text-center">
<img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
</div>
</div>
</div>
</div><!-- Fin de l'item témoignage -->

<div class="swiper-slide">
<div class="testimonial-item">
<div class="row gy-4 justify-content-center">
<div class="col-lg-6">
<div class="testimonial-content">
<p>
<i class="bi bi-quote quote-icon-left"></i>
<span>Leur approche design m'a bluffée : mariage parfait entre ergonomie digitale et identité visuelle forte.
Leur site a généré 120% de leads en plus pour nos ateliers culinaires. Une équipe qui maîtrise
l'art de l'expérience utilisateur gourmande.</span>
<i class="bi bi-quote quote-icon-right"></i>
</p>
<h3>Sara Wilsson</h3>
<h4>Directrice Artistique</h4>
<div class="stars">
<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
</div>
</div>
</div>
<div class="col-lg-2 text-center">
<img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
</div>
</div>
</div>
</div><!-- Fin de l'item témoignage -->

<div class="swiper-slide">
<div class="testimonial-item">
<div class="row gy-4 justify-content-center">
<div class="col-lg-6">
<div class="testimonial-content">
<p>
<i class="bi bi-quote quote-icon-left"></i>
<span>Depuis que nous proposons leurs pâtisseries signature, notre chiffre boutique a augmenté de 65%.
Leur savoir-faire artisanal et leur réactivité logistique en font un partenaire idéal pour les
enseignes exigeantes.</span>
<i class="bi bi-quote quote-icon-right"></i>
</p>
<h3>Jena Karlis</h3>
<h4>Gérante de La Maison Douceur</h4>
<div class="stars">
<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
</div>
</div>
</div>
<div class="col-lg-2 text-center">
<img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
</div>
</div>
</div>
</div><!-- Fin de l'item témoignage -->

<div class="swiper-slide">
<div class="testimonial-item">
<div class="row gy-4 justify-content-center">
<div class="col-lg-6">
<div class="testimonial-content">
<p>
<i class="bi bi-quote quote-icon-left"></i>
<span>Leur solution clé en main pour notre chaîne de restauration a optimisé nos coûts de 22% tout en
augmentant la satisfaction client. Une approche data-driven qui révolutionne le secteur
gastronomique.</span>
<i class="bi bi-quote quote-icon-right"></i>
</p>
<h3>John Larson</h3>
<h4>Fondateur de FoodInnov</h4>
<div class="stars">
<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
</div>
                </div>
              </div>
              <div class="col-lg-2 text-center">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
              </div>
            </div>
          </div>
        </div><!-- Fin de l'item témoignage -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Section Témoignages -->

<!-- Section Événements -->
<!-- Section Événements -->
<section id="events" class="events section">

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 1
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
          <h3>Fêtes Personnalisées</h3>
          <div class="price align-self-start">99€</div>
          <p class="description">
    Création sur mesure de votre événement avec notre chef dédié. Inclut :
    <ul class="event-details">
        <li>• Thème personnalisé et design de table unique</li>
        <li>• Menu dégustation 7 services ajustable en live</li>
        <li>• Coordination logistique complète (50 personnes max)</li>
    </ul>
</p>
</div><!-- Fin de l'item Événement -->

<div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
<h3>Fêtes Privées</h3>
<div class="price align-self-start">289€</div>
<p class="description">
    Expérience VIP en salle privatisée avec :
    <ul class="event-details">
        <li>• Service en continu de 19h à minuit</li>
        <li>• Sélection de 15 grands crus à discrétion</li>
        <li>• Sécurité et parking privé inclus</li>
    </ul>
</p>
</div><!-- Fin de l'item Événement -->

<div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
<h3>Anniversaires</h3>
<div class="price align-self-start">499€</div>
<p class="description">
    Forfait tout compris pour 20 personnes :
    <ul class="event-details">
        <li>• Gâteau sculpté sur mesure + bougies artisanales</li>
        <li>• Animation photo booth avec accessoires premium</li>
        <li>• Cadeau souvenir personnalisé pour l'honneur</li>
    </ul>
</p>
</div><!-- Fin de l'item Événement -->

<div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-4.jpg)">
<h3>Mariages</h3>
<div class="price align-self-start">899€</div>
<p class="description">
    Package cérémonie et réception incluant :
    <ul class="event-details">
        <li>• 3 repas d'essai avant l'événement</li>
        <li>• Service traiteur pour 100 convives minimum</li>
        <li>• Coordination avec prestataires partenaires</li>
        <li>• Chambre nuptiale offerte</li>
    </ul>
</p>
        </div><!-- Fin de l'item Événement -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Section Événements -->

<!-- Section Chefs -->
<section id="chefs" class="chefs section">

  <!-- Titre de Section -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Chefs</h2>
    <p><span>Nos</span> <span class="description-title">Chefs Professionnels<br></span></p>
  </div><!-- Fin du Titre de Section -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Chef Étoilé</span>
<p>Diplômé de l'Institut Paul Bocuse et Meilleur Ouvrier de France 2021. Spécialiste des cuissons basse température
et des mariages audacieux entre terroir français et épices orientales. A dirigé les cuisines du Plaza Athénée
pendant 5 ans avant de rejoindre Yummy.</p>
</div>
</div>
</div><!-- Fin du Membre de l'Équipe -->

<div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
<div class="team-member">
<div class="member-img">
<img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
<div class="social">
<a href=""><i class="bi bi-twitter-x"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
<div class="member-info">
<h4>Sarah Jhonson</h4>
<span>Pâtissière Chef</span>
<p>Vainqueur du Concours Mondial de Pâtisserie 2022. Maîtrise l'art des desserts moléculaires et des pâtes feuilletées
à 144 couches. A révolutionné notre carte des desserts avec sa collection "Sucré-Salé" primée au Gault & Millau.</p>
</div>
</div>
</div><!-- Fin du Membre de l'Équipe -->

<div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
<div class="team-member">
<div class="member-img">
<img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
<div class="social">
<a href=""><i class="bi bi-twitter-x"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
<div class="member-info">
<h4>William Anderson</h4>
<span>Chef Poissonnier</span>
<p>Expert en produits de la mer avec certification QUIOSQUE MER. Inventeur de la technique de fumaison froide
aux algues bretonnes. Dirige notre laboratoire de fermentation marine et forme notre brigade junior.</p>
</div>
</div>
      </div><!-- Fin du Membre de l'Équipe -->

    </div>

  </div>

</section><!-- /Section Chefs -->
<!-- Menu Section -->


    <!-- Menu Navigation -->
    

<!-- Section Galerie -->
<section id="gallery" class="gallery section light-background">

  <!-- Titre de Section -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Galerie</h2>
    <p><span>Découvrez</span> <span class="description-title">Notre Galerie</span></p>
  </div><!-- Fin du Titre de Section -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "centeredSlides": true,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 0
            },
            "768": {
              "slidesPerView": 3,
              "spaceBetween": 20
            },
            "1200": {
              "slidesPerView": 5,
              "spaceBetween": 20
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Section Galerie -->

<!-- Section Contact -->
<section id="contact" class="contact section">
  @include('layouts.contact')
</section>

</main>

<!-- Footer -->
@include('layouts.footer')

  <!-- Défilement vers le haut -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Préchargeur -->
  <div id="preloader"></div>

  <!-- Fichiers JS des fournisseurs -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Fichier JS principal -->
  <script src="assets/js/main.js"></script>

</body>
</html>
