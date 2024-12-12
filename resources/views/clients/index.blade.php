<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - AgriCulture </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.blade.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="AgriCulture">
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index.blade.php" class="active">Accueil</a></li>
        <li><a href="about.blade.php">À propos de nous</a></li>
        <li><a href="services.blade.php">Nos Services</a></li>
        <li><a href="testimonials.blade.php">Témoignages</a></li>
        <li><a href="blog.blade.php">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Autres</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Culture</a></li>
                <li class="dropdown"><a href="#"><span>Cereales</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Cereales alimentaires</a></li>
                        <li><a href="#">Cereales animal</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">Fruits</a></li>
            </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

</div>
</header>

<main class="main">

    <!-- Section Hero -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="assets/img/hero_1.jpg" alt="">
                <div class="carousel-container">
                    <h2>L'agriculture est la meilleure solution à la faim dans le monde</h2>
                    <p>Découvrez nos méthodes innovantes pour lutter contre la faim à travers une agriculture durable et responsable.</p>
                </div>
            </div><!-- Fin Carousel Item -->

            <div class="carousel-item">
                <img src="assets/img/hero_2.jpg" alt="">
                <div class="carousel-container">
                    <h2>Les légumes bio, bons pour la santé</h2>
                    <p>Nous nous engageons à vous fournir des produits locaux, sains et respectueux de l'environnement.</p>
                </div>
            </div><!-- Fin Carousel Item -->

            <div class="carousel-item">
                <img src="assets/img/hero_3.jpg" alt="">
                <div class="carousel-container">
                    <h2>Fournir des produits frais chaque jour</h2>
                    <p>Nous mettons un point d'honneur à livrer des produits agricoles frais et de qualité, tous les jours.</p>
                </div>
            </div><!-- Fin Carousel Item -->

            <div class="carousel-item">
                <img src="assets/img/hero_4.jpg" alt="">
                <div class="carousel-container">
                    <h2>L'agriculture comme passion</h2>
                    <p>Notre équipe de passionnés travaille chaque jour pour vous offrir les meilleurs produits du terroir.</p>
                </div>
            </div><!-- Fin Carousel Item -->

            <div class="carousel-item">
                <img src="assets/img/hero_5.jpg" alt="">
                <div class="carousel-container">
                    <h2>Une bonne alimentation pour tous</h2>
                    <p>En tant que producteurs responsables, nous nous engageons à améliorer la qualité de l'alimentation de chacun.</p>
                </div>
            </div><!-- Fin Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- Fin Section Hero -->

    <!-- Section Services -->
    <section id="services" class="services section">

        <!-- Titre de la section -->
        <div class="container section-title" data-aos="fade-up">
            <h2>SERVICES</h2>
            <p>Fournir des produits frais chaque jour</p>
        </div><!-- Fin Titre de la section -->
 @foreach($products as $product)
    <div class="card" style="width: 18rem;">
        <figure>
            <img class="card-img-top" src="{{ asset($product->image) }}" alt="Image of {{ $product->name }}">
        </figure>
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-price">${{ $product->price }}</p>
            <p class="card-text">{{ $product->description }}</p>
            <a href="#" class="btn btn-primary">Commander</a>
        </div>
    </div>
@endforeach

    <!-- About Section -->
   <!-- Section À propos -->
<section id="about" class="about section">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="assets/img/img_long_5.jpg" alt="Image Agriculture" class="img-fluid img-overlap" data-aos="zoom-out">
        </div>
        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="content-subtitle text-white opacity-50">Pourquoi nous choisir</h3>
          <h2 class="content-title mb-4">
            Plus de <strong>50 ans d'expérience</strong> dans le domaine agricole
          </h2>
          <p class="opacity-50">
            Avec un engagement envers l'agriculture durable et des solutions innovantes, nous soutenons les agriculteurs locaux pour maximiser leur productivité tout en respectant l'environnement.
          </p>

          <div class="row my-5">
            <div class="col-lg-12 d-flex align-items-start mb-4">
              <i class="bi bi-cloud-rain me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">L'importance des pluies</h4>
                <p class="text-white opacity-50">Nous utilisons des solutions adaptées pour optimiser la gestion de l'eau.</p>
              </div>
            </div>
            <div class="col-lg-12 d-flex align-items-start mb-4">
              <i class="bi bi-heart me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Favoriser l'agriculture biologique</h4>
                <p class="text-white opacity-50">Nos produits sont 100 % naturels et exempts de produits chimiques nocifs.</p>
              </div>
            </div>
            <div class="col-lg-12 d-flex align-items-start">
              <i class="bi bi-shop me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Une plateforme de vente efficace</h4>
                <p class="text-white opacity-50">Nous facilitons l'accès aux marchés pour les producteurs locaux.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section À propos -->

<!-- Section Vidéo -->
<section id="about-3" class="about-3 section">
  <div class="container">
    <div class="row gy-4 justify-content-between align-items-center">
      <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
        <img src="assets/img/img_sq_1.jpg" alt="Vidéo Agriculture" class="img-fluid">
        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
          <span class="play"><i class="bi bi-play-fill"></i></span>
        </a>
      </div>
      <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <h2 class="content-title mb-4">Les plantes, une richesse inestimable</h2>
        <p class="mb-4">
          Découvrez comment notre entreprise promeut la biodiversité et soutient les communautés agricoles togolaises grâce à des techniques modernes et des pratiques respectueuses de l'environnement.
        </p>
        <ul class="list-unstyled list-check">
          <li>Des solutions agricoles adaptées à chaque besoin</li>
          <li>Un accompagnement personnalisé pour les agriculteurs</li>
          <li>Un engagement envers la durabilité environnementale</li>
        </ul>
        <p><a href="#" class="btn-cta">Contactez-nous</a></p>
      </div>
    </div>
  </div>
</section>
<!-- /Section Vidéo -->

<!-- Section Services -->
<section id="services-2" class="services-2 section dark-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Nos Services</h2>
    <p>Des solutions adaptées à vos besoins agricoles</p>
  </div>
  <div class="services-carousel-wrap">
    <div class="container">
      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": { "delay": 5000 },
            "slidesPerView": "auto",
            "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true },
            "navigation": { "nextEl": ".js-custom-next", "prevEl": ".js-custom-prev" },
            "breakpoints": {
              "320": { "slidesPerView": 1, "spaceBetween": 40 },
              "1200": { "slidesPerView": 3, "spaceBetween": 40 }
            }
          }
        </script>
        <button class="navigation-prev js-custom-prev">
          <i class="bi bi-arrow-left-short"></i>
        </button>
        <button class="navigation-next js-custom-next">
          <i class="bi bi-arrow-right-short"></i>
        </button>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <a href="#">
                  <span class="service-item-category">Nous proposons</span>
                  <h2 class="service-item-title">Plantation</h2>
                </a>
              </div>
              <img src="assets/img/img_sq_1.jpg" alt="Service Plantation" class="img-fluid">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <a href="#">
                  <span class="service-item-category">Nous proposons</span>
                  <h2 class="service-item-title">Paillage</h2>
                </a>
              </div>
              <img src="assets/img/img_sq_3.jpg" alt="Service Paillage" class="img-fluid">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <a href="#">
                  <span class="service-item-category">Nous proposons</span>
                  <h2 class="service-item-title">Irrigation</h2>
                </a>
              </div>
              <img src="assets/img/img_sq_8.jpg" alt="Service Irrigation" class="img-fluid">
            </div>
          </div>
          <!-- Ajoutez d'autres services ici -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<!-- /Section Services -->

<!-- Section Témoignages -->
<section class="testimonials-12 testimonials section" id="testimonials">
  <div class="container section-title" data-aos="fade-up">
    <h2>Ce que disent nos clients</h2>
    <p>Des témoignages de satisfaction</p>
  </div>
  <div class="testimonial-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="testimonial">
            <img src="assets/img/testimonials/testimonials-1.jpg" alt="Auteur du témoignage">
            <blockquote>
              <p>
                “Grâce à leurs conseils, j'ai augmenté ma production tout en réduisant mes coûts. Merci pour votre soutien.”
              </p>
            </blockquote>
            <p class="client-name">Jean Kouassi</p>
          </div>
        </div>
        <!-- Ajoutez d'autres témoignages -->
      </div>
    </div>
  </div>
</section>
<!-- /Section Témoignages -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

             
      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h3>Incrivez Vous</h3>
              <p class="opacity-50">
               
              </p>
            </div>
            <div class="col-lg-6">
              <form action="forms/newsletter.php" class="form-subscribe php-email-form">
                <div class="form-group d-flex align-items-stretch">
                  <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
                  <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
                </div>
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  merci pour votre message
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->

  </main>

  <footer id="footer" class="footer dark-background">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">AgriCulture Togo</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Quartier Adam, Lomé</p>
            <p>Togo, 001</p>
            <p class="mt-3"><strong>Téléphone :</strong> <span>+228 55 88 99 44</span></p>
            <p><strong>Email :</strong> <span>contact@agriculturetogo.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens utiles</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos de nous</a></li>
            <li><a href="#">Nos services</a></li>
            <li><a href="#">Conditions d'utilisation</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos services</h4>
          <ul>
            <li><a href="#">Agriculture durable</a></li>
            <li><a href="#">Formation agricole</a></li>
            <li><a href="#">Conseil en gestion agricole</a></li>
            <li><a href="#">Vente de semences</a></li>
            <li><a href="#">Partenariats</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos projets</h4>
          <ul>
            <li><a href="#">Amélioration des rendements</a></li>
            <li><a href="#">Gestion de l'eau</a></li>
            <li><a href="#">Cultures vivrières</a></li>
            <li><a href="#">Agroforesterie</a></li>
            <li><a href="#">Technologies agricoles</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Contacts</h4>
          <ul>
            <li><a href="#">Nous rejoindre</a></li>
            <li><a href="#">Demander un devis</a></li>
            <li><a href="#">Support technique</a></li>
            <li><a href="#">Partenariat</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="copyright text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div>
          © Copyright <strong><span>AgriCulture Togo</span></strong>. Tous droits réservés.
        </div>
        <div class="credits">
          <!-- Tous les liens dans le footer doivent rester intacts. -->
          <!-- Vous pouvez supprimer les liens uniquement si vous avez acheté la version pro. -->
          <!-- Informations sur la licence : https://bootstrapmade.com/license/ -->
          <!-- Achetez la version pro avec un formulaire de contact PHP/AJAX fonctionnel : https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
          Conçu par <a href="https://bootstrapmade.com/">BootstrapMade</a> Distribué par <a href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>

      <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </div>

</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>