@extends('layouts.master')

@section('content')
    <section class="page-title banner_apropos position-relative overflow-hidden" style="min-height: 550px;">

        <!-- Carousel en arrière-plan -->
        <div id="aproposCarousel" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100"
            data-bs-ride="carousel" data-bs-interval="3000" style="z-index: 0;">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="{{ asset('assets/images/bg/img24.jpg') }}" class="d-block w-100 h-100" alt="Slide 1"
                        style="object-fit: cover;">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets/images/bg/img06.jpg') }}" class="d-block w-100 h-100" alt="Slide 2"
                        style="object-fit: cover;">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets/images/bg/img16.jpg') }}" class="d-block w-100 h-100" alt="Slide 3"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- Contenu centré au-dessus -->
        <div class="container position-relative" style="z-index: 1;">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center text-white">
                        <h1 class="text-capitalize text-lg"> <!-- Ajoute ici ton titre --> </h1>
                        <!-- Tu peux ajouter plus de contenu si besoin -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-page">
        <div class="container">
            <!-- Bienvenue centré en haut avec soulignement -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 style="font-size: 52px; font-weight: 700; color: #223a66;"><span
                            style="color:#223a66">B</span>ienvenue</h1>
                    <img src="{{ asset('assets/images/bg/soulign.png') }}" alt="Soulignement décoratif"
                        style="display: block; margin: 10px auto 0; height: 25px;">
                </div>
            </div>
            <!-- Image et texte côte à côte -->
            <div class="row align-items-start">
                <!-- Colonne image -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/team/img21.jpg') }}" alt="Spécialiste réglementation"
                        class="img-fluid w-100 rounded shadow">
                </div>
                <!-- Colonne texte -->
                <div class="col-lg-6">
                    <h2 class="mb-3" style="font-size: 24px; color: #223a66;">À propos de Global G+ SARL</h2>
                    <h6 class="text-muted mt-0 mb-0" style="font-size: 1rem; line-height: 1.8;">
                        Global G+ est une entreprise sociale togolaise qui œuvre dans le bien-être,
                        la formation et l’amélioration de la qualité de la vie des populations. Née
                        au Togo, en 2013, Global G+ SARL a pour mission aussi de détecter les
                        meilleures opportunités en matière de bien-être et de santé, et les promouvoir
                        au sein des communautés togolaises. C’est dans cette démarche qu’elle a
                        importé au Togo, depuis 2024, <strong>SHINY</strong> : une compagnie
                        internationale d’origine chinoise qui met sur le marché des compléments
                        alimentaires et autres produits révolutionnaires.
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background: linear-gradient(rgba(195, 205, 221, 0.9), rgba(97, 114, 145, 0.9)),
                url('{{ asset('assets/images/service/img4.jpg') }}') center center/cover no-repeat;
                color: #fff; padding: 80px 0;">
        <div class="container text-center mt-5 ">
            <h2 class="mb-5" style="font-weight: bold; color: #223a66;">
                « FAIRE DE GLOBAL G+ SARL UN ACTEUR DE CHANGEMENT POSITIF. »
            </h2>

            <div class="row text-start justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="mb-3 text-center">
                        <i class="fas fa-leaf fa-2x" style="color: tomato;"></i>
                    </div>
                    <h5 class="text-light">Notre mission</h5>
                    <p class="text-white">
                        Accompagner les professionnels et institutions dans la digitalisation,
                        l’assurance, et la croissance durable à travers des solutions sur mesure.
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="mb-3 text-center">
                        <i class="fas fa-eye fa-2x" style="color: tomato;"></i>
                    </div>
                    <h5 class="text-light">Notre vision</h5>
                    <p class="text-white">
                        Être reconnu comme un leader africain dans la transformation numérique, le
                        conseil et les services innovants au service du développement.
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="mb-3 text-center">
                        <i class="fas fa-star fa-2x" style="color: tomato;"></i>
                    </div>
                    <h5 class="text-light">Nos valeurs</h5>
                    <p class="text-white">
                        <strong>EXCELLENCE</strong> : Offrir des solutions performantes<br>
                        <strong>INTÉGRITÉ</strong> : Agir avec honnêteté<br>
                        <strong>INNOVATION</strong> : Répondre par la technologie<br>
                        <strong>IMPACT</strong> : Contribuer au progrès collectif
                    </p>
                </div>
            </div>

            <a href="{{ route('apropos') }}" class="btn mt-4 px-4 py-2"
                style="background: #223a66; color: white; font-weight: bold; border-radius: 5px;">
                <i class="fas fa-arrow-right me-2"></i> En savoir plus
            </a>
        </div>
    </section>

    <section class="feature-page mt-5">
        <div class="container">
            <h1 class="mt-0 mb-5 text-center" style="font-size: 42px; font-weight: 700; color: #223a66;">
                Nos Réalisations
            </h1>
            <div class="row mb-0">
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="{{ asset('assets/images/about/img21.jpg') }}" alt="Produits naturels pour enfants"
                            class="img-fluid w-100">
                        <h4 class="mt-3">Produits naturels pour enfants</h4>
                        <p>
                            Des solutions naturelles, sûres et efficaces, spécialement conçues pour accompagner la
                            croissance et le bien-être des plus petits.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="{{ asset('assets/images/about/img39.jpg') }}" alt="Conseils en santé personnalisés"
                            class="img-fluid w-100">
                        <h4 class="mt-3">Conseils en santé personnalisés</h4>
                        <p>
                            Un accompagnement sur mesure, dispensé par nos experts, pour vous guider vers les solutions les
                            plus adaptées à votre profil santé.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="{{ asset('assets/images/about/img49.jpg') }}" alt="Produits innovants et de qualité"
                            class="img-fluid w-100">
                        <h4 class="mt-3">Produits innovants et de qualité</h4>
                        <p>
                            Une sélection rigoureuse de produits à la pointe de l’innovation pour soutenir votre santé avec
                            efficacité et sécurité.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item">
                        <img src="{{ asset('assets/images/about/img83.jpg') }}" alt="Experts en santé et bien-être"
                            class="img-fluid w-100">
                        <h4 class="mt-3">Experts en santé et bien-être</h4>
                        <p>
                            Une équipe pluridisciplinaire engagée à vos côtés pour vous offrir un accompagnement global et
                            personnalisé vers une meilleure qualité de vie.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-white mt-5 mb-5"
        style="background: linear-gradient(rgba(34, 58, 102, 0.85), rgba(34, 58, 102, 0.85)), url('{{ asset('assets/images/service/img6.jpg') }}') center center/cover no-repeat;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class=" pipotext-center px-3">
                        <h3 class="mb-3 text-center" style="font-size: 34px; font-weight: 700; color: white;">
                            Rencontre avec M. Shérif Goungou
                        </h3>
                        <p class="fw-semibold mb-3" style="font-size: 17px; color: white;">
                            PDG GLOBAL G+ sarl & Consultant en MLM
                        </p>

                        <div class="divider mx-auto mb-4"
                            style="width: 60px; height: 4px; background-color: white; border-radius: 5px;"></div>

                        <h6 class="lead fw-normal mb-3" style="font-size: 17px; color: white;">
                            « En 1 an, SHINY Togo dispose d’un impressionnant réseau d’adhérents et consommateurs avec une
                            amélioration notable de la qualité de vie. »
                        </h6>

                        <h6 style="font-size: 15.5px; line-height: 1.7; color: white;">
                            GLOBAL G+ est une entreprise sociale togolaise œuvrant dans le bien-être, la formation et
                            l’amélioration de la qualité de vie. Née en 2013, elle détecte et promeut les meilleures
                            opportunités santé, notamment via SHINY, une compagnie internationale spécialisée dans les
                            compléments alimentaires révolutionnaires.
                        </h6>
                        <style>
                            .about-content p {
                                padding-left: 0 !important;
                                margin-left: 0 !important;
                                text-indent: 0 !important;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
            <section class="section team py-5">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="team-block bg-white rounded-3 shadow-sm h-100 p-3 text-center">
                                <img src="{{ asset('assets/images/team/img6.jpg') }}" alt="Alice Dupont"
                                    class="img-fluid rounded mb-3">
                                <p class="text-dark mb-0">Spécialiste en formulation de produits naturels, elle conçoit des
                                    solutions innovantes adaptées à vos besoins.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="team-block bg-white rounded-3 shadow-sm h-100 p-3 text-center">
                                <img src="{{ asset('assets/images/team/img13.jpg') }}" alt="Marc Leroy"
                                    class="img-fluid rounded mb-3">
                                <p class="text-dark mb-0">Chercheur passionné en santé et innovations pharmaceutiques, il veille à
                                    l’efficacité et à la sécurité de nos formules.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="team-block bg-white rounded-3 shadow-sm h-100 p-3 text-center">
                                <img src="{{ asset('assets/images/team/img19.jpg') }}" alt="Sonia Martin"
                                    class="img-fluid rounded mb-3">
                                <p class="text-dark mb-0">Responsable qualité, elle garantit la conformité et la rigueur de chaque
                                    produit que nous mettons à votre disposition.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="team-block bg-white rounded-3 shadow-sm h-100 p-3 text-center">
                                <img src="{{ asset('assets/images/team/img21.jpg') }}" alt="Karim Benali"
                                    class="img-fluid rounded mb-3">
                                <p class="text-dark mb-0">Expert en réglementation et conformité, il veille à ce que nos produits
                                    respectent les normes les plus strictes du secteur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        -->
    <section class="section testimonial mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-block d-lg-none mb-4">
                    <img src="{{ asset('assets/images/bg/img1.jpg') }}" alt="Image témoignage"
                        class="img-fluid w-100 rounded shadow" />
                </div>
                <div class="col-lg-6 offset-lg-6">
                    <div class="section-title">
                        <h2 class="mb-4">Ils témoignent de leur transformation</h2>
                        <div class="divider my-4"></div>
                        <h6>
                            Nos produits et notre réseau SHINY ont profondément amélioré la vie de nombreuses personnes.
                            Découvrez ces témoignages authentiques qui illustrent santé, bien-être et réussite personnelle.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 testimonial-wrap offset-lg-6">

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“J’ai vaincu la fièvre rapidement”</h4>
                            <span>Jean D.</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Le rhume a disparu en quelques jours”</h4>
                            <span>Marie T.</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Mes douleurs articulaires sont un vieux souvenir”</h4>
                            <span>Ali K.</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Mes troubles digestifs ont été soulagés naturellement”</h4>
                            <span>Sophie L.</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Enfin des nuits complètes sans insomnie”</h4>
                            <span>Paul M.</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <!-- Nouveaux témoignages inspirés de l’interview et du bilan SHINY -->

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Grâce aux compléments SHINY, j’ai retrouvé une énergie et une qualité de vie améliorées”
                            </h4>
                            <span>Amina S., adhérente SHINY</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Les produits SHINY m’ont aidé à soutenir mon traitement médical avec de réels résultats”
                            </h4>
                            <span>Jean-Pierre M., consommateur</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Devenir adhérent SHINY m’a permis d’atteindre une indépendance financière stable”</h4>
                            <span>Fatou B., distributrice</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“SHINY a redonné espoir et sérénité à ma famille, en nous réunissant autour d’un projet
                                porteur”</h4>
                            <span>Mahama K., adhérent</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block">
                        <div class="client-info">
                            <h4>“Le réseau SHINY est une formidable opportunité de croissance personnelle et
                                professionnelle”</h4>
                            <span>Chantal D., formatrice</span>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
