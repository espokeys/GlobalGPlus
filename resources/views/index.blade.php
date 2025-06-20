@extends('layouts.master')

@section('content')
    <!-- Slider Start -->
    <!-- -->
    <section class="banner position-relative overflow-hidden" style="min-height: 550px;">

        <!-- Carousel en arrière-plan -->
        <div id="bannerCarousel" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100"
            data-bs-ride="carousel" data-bs-interval="3000" style="z-index: 0;">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="{{ asset('assets/images/bg/img8.jpg') }}" class="d-block w-100 h-100" alt="Slide 1"
                        style="object-fit: cover;">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets/images/bg/img15.jpg') }}" class="d-block w-100 h-100" alt="Slide 2"
                        style="object-fit: cover;">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets/images/bg/img6.jpg') }}" class="d-block w-100 h-100" alt="Slide 3"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- Contenu texte au-dessus -->
        <div class="container position-relative" style="z-index: 1;">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block text-white">
                        <span class="text-uppercase text-sm letter-spacing">
                            Acteur du bien-être, de la santé & de la formation
                        </span>
                        <h4 class="mb-3 mt-3" style="color: #223a66; font-size: 39px;">
                            <span style=" color:white; display: block; margin-bottom: 20px;">
                                Agence experte en représentation,
                            </span>
                            <span style="display: block;  color:white;">
                                marketing et formation
                            </span>
                        </h4>
                        <h6 class="mb-4 mt-5">
                            Bienvenue chez Global G+, où innovation, santé et formation
                            se rencontrent pour améliorer durablement la vie des populations.
                        </h6>
                        <div class="btn-container">
                            <a href="{{ route('contact') }}" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">
                                Prendre rendez-vous <i class="icofont-simple-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-business-man"></i>
                            </div>
                            <span>Nos pôles d’activités</span>
                            <h4 class="mb-3">Global G+ – Stratégie & Santé</h4>
                            <h7 class="mb-4">
                                Nos bureaux sont ouverts du lundi au vendredi.<br />
                                Nous sommes spécialisés dans la Représentation commerciale, le Marketing relationnel et la
                                Formation.
                            </h7>
                            <a href="{{ route('contact') }}" class="btn btn-main btn-round-full">
                                Contactez-nous
                            </a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Horaires d'ouverture</span>
                            <h4 class="mb-3">Nos heures de service</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">
                                    Lundi - Vendredi : <span>09h00 - 18h00</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    Samedi : <span>09h00 - 15h00</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    Dimanche : <span>Fermé</span>
                                </li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Contact & Support</span>
                            <h4 class="mb-3">+228 90 32 51 17</h4>
                            <h7>
                                Pour toute demande ou assistance, notre équipe est à votre disposition pendant nos heures
                                d'ouverture.<br />
                                Contactez-nous par téléphone ou par email à
                                <a href="mailto:globalgplus@gmail.com">globalgplus@gmail.com</a>.
                            </h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/about/img35.jpg') }}" alt="" class="img-fluid" />
                        <img src="{{ asset('assets/images/about/img2.jpg') }}" alt="" class="img-fluid mt-4" />
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('assets/images/about/img5.jpg') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">
                            Votre santé,<br /> & notre priorité
                        </h2>
                        <p class="mt-4 mb-5">
                            Depuis 2013, Global G+ s'engage pour le bien-être et la qualité de vie des populations
                            togolaises.
                            En 2024, l'entreprise a introduit au Togo la marque internationale SHINY, spécialisée dans les
                            compléments alimentaires innovants, distribués via un modèle de marketing relationnel porteur
                            d'opportunités économiques.
                        </p>
                        <style>
                            .about-content p {
                                padding-left: 0 !important;
                                margin-left: 0 !important;
                                text-indent: 0 !important;
                            }
                        </style>


                        <a href="{{ route('service') }}" class="btn btn-main-2 btn-round-full btn-icon">
                            Nos services<i class="icofont-simple-right ml-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">100</span>k
                            <p>Clients satisfaits</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">700</span>+
                            <p>Produits disponibles</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">01</span>+
                            <p>Partenaires experts</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">5</span>
                            <p>Présence internationale</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Nos domaines d’expertise</h2>
                        <div class="divider mx-auto my-4"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Distribution & Représentation -->
                <div class="col-lg-4 col-12 mb-4">
                    <div class="service-item h-100">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-handshake-deal text-lg"></i>
                            <h4 class="mt-3 mb-3 ms-3">Distribution & Représentation</h4>
                        </div>
                        <div class="content">
                            <p>
                                Promotion et diffusion des produits SHINY au Togo et en Afrique,
                                via un réseau de bureaux et d’agences privés répartis dans
                                plusieurs pays francophones de la sous-région.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Marketing de réseau -->
                <div class="col-lg-4 col-12 mb-4">
                    <div class="service-item h-100">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-network text-lg"></i>
                            <h4 class="mt-3 mb-3 ms-3">Marketing de réseau</h4>
                        </div>
                        <div class="content">
                            <p>
                                Développement d’un réseau d’adhérents avec un système de
                                rémunération attractif. Ce mécanisme offre à chacun l’opportunité
                                de générer des revenus stables et d’atteindre une réelle autonomie
                                financière.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Formation & Leadership -->
                <div class="col-lg-4 col-12 mb-4">
                    <div class="service-item h-100">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-education text-lg"></i>
                            <h4 class="mt-3 mb-3 ms-3">Formation & leadership</h4>
                        </div>
                        <div class="content">
                            <p>
                                Séances de formation sur le leadership, le développement personnel,
                                l’autonomie financière, la santé holistique, le marketing relationnel
                                et la stratégie commerciale pour renforcer les compétences de nos adhérents.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonial-2 gray-bg" style="padding-top: 0px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Plus de 5000 clients satisfaits</h2>
                        <div class="divider mx-auto my-4"></div>
                        <!--     <p>
                                                                                                              Reconnue pour son expertise et son engagement, Global G+ accompagne depuis des années ses clients dans leur croissance commerciale, leur développement personnel et leur bien-être au quotidien.
                                                                                                            </p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/images/team/img1.jpg') }}" alt="Client satisfait"
                                class="img-fluid" />
                        </div>
                        <div class="client-info">
                            <h4>Une croissance rapide et maîtrisée</h4>
                            <span>Jean Dupont</span>
                            <p>
                                Grâce à l’expertise de Global G+, notre réseau s’est étendu en un temps record. Leur
                                approche stratégique est génial.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/images/team/img2.jpg') }}" alt="Client satisfait"
                                class="img-fluid" />
                        </div>
                        <div class="client-info">
                            <h4>Des formations concrètes et impactantes</h4>
                            <span>Marie Lefèvre</span>
                            <p>
                                Les sessions de formation sont dynamiques et adaptées aux réalités du terrain. Un atout pour
                                nos collaborateurs.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/images/team/img3.jpg') }}" alt="Client satisfait"
                                class="img-fluid" />
                        </div>
                        <div class="client-info">
                            <h4>Un vrai impact sur notre bien-être</h4>
                            <span>Luc Martin</span>
                            <p>
                                Les solutions proposées pour la santé ont apporté des résultats visibles. L’efficacité des
                                produits et le suivi sont irréprochables.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/images/team/img4.jpg') }}" alt="Client satisfait"
                                class="img-fluid" />
                        </div>
                        <div class="client-info">
                            <h4>Ecoute active</h4>
                            <span>Sophie Bernard</span>
                            <p>
                                Un service client à l’écoute, toujours disponible et force de proposition. Une équipe
                                investie dans chaque projet.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/images/team/img5.jpg') }}" alt="Client satisfait"
                                class="img-fluid" />
                        </div>
                        <div class="client-info">
                            <h4>Une stratégie relationnelle</h4>
                            <span>Paul Moreau</span>
                            <p>
                                Nos relations clients se sont renforcées grâce à des actions ciblées et pertinentes. Global
                                G+ a contribuer a notre développement.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2>Nos partenaires de confiance</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Global G+ collabore avec des partenaires stratégiques pour une meilleure santé.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-4 mt-5">
                    <img src="{{ asset('assets/images/logo_shiny.png') }}" alt="Partenaire 1" class="img-fluid" />
                </div>
                <!--
                                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-4">
                                    <img src="{{ asset('assets/images/logo_shiny.png') }}" alt="Partenaire 2" class="img-fluid" />
                                  </div>
                                  -->
            </div>
        </div>
    </section>
@endsection
