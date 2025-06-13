@extends('layouts.master')

@section('content')
    <section class=" page-title banner_apropos">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize text-lg "></h1>


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
                            style="color:tomato">B</span>ienvenue</h1>
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
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
                        Global G+ est une entreprise sociale togolaise qui œuvre dans le bien-être, la formation et
                        l’amélioration de la qualité de la vie des populations. Née au Togo, en 2013, Global G+sarl a pour
                        mission aussi de détecter les meilleures opportunités en matière du bien-être et de la santé, et les
                        promouvoir au sein des communautés togolaises. C’est dans cette démarche qu’elle a importé au Togo,
                        depuis 2024, SHINY . Une compagnie internationale d’origine CHINOISE, qui met sur le marché des
                        compléments alimentaires et autres produits révolutionnaires
                    </p>
                    <img src="{{ asset('assets/images/about/sign.png') }}" alt="Signature Global G+" class="img-fluid mt-3"
                        style="max-width: 200px;">
                </div>

            </div>
        </div>
    </section>




    <section class="feature-page">
        <div class="container">
          <h1 class="mt-2 mb-5 text-center" style="font-size: 42px; font-weight: 700; color: #223a66;">
            Nos Réalisations
          </h1>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="about-block-item mb-5 mb-lg-0">
                <img src="{{ asset('assets/images/about/img21.jpg') }}" alt="Produits naturels pour enfants" class="img-fluid w-100">
                <h4 class="mt-3">Produits naturels pour enfants</h4>
                <p>
                  Des solutions naturelles, sûres et efficaces, spécialement conçues pour accompagner la croissance et le bien-être des plus petits.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="about-block-item mb-5 mb-lg-0">
                <img src="{{ asset('assets/images/about/img39.jpg') }}" alt="Conseils en santé personnalisés" class="img-fluid w-100">
                <h4 class="mt-3">Conseils en santé personnalisés</h4>
                <p>
                  Un accompagnement sur mesure, dispensé par nos experts, pour vous guider vers les solutions les plus adaptées à votre profil santé.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="about-block-item mb-5 mb-lg-0">
                <img src="{{ asset('assets/images/about/img49.jpg') }}" alt="Produits innovants et de qualité" class="img-fluid w-100">
                <h4 class="mt-3">Produits innovants et de qualité</h4>
                <p>
                  Une sélection rigoureuse de produits à la pointe de l’innovation pour soutenir votre santé avec efficacité et sécurité.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="about-block-item">
                <img src="{{ asset('assets/images/about/img83.jpg') }}" alt="Experts en santé et bien-être" class="img-fluid w-100">
                <h4 class="mt-3">Experts en santé et bien-être</h4>
                <p>
                  Une équipe pluridisciplinaire engagée à vos côtés pour vous offrir un accompagnement global et personnalisé vers une meilleure qualité de vie.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section awards">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-lg-12">
                <h2 class="title-color text-center mb-5" style="font-size: 42px; font-weight: 700; color: #223a66;">Résultats de nos produits</h2>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="award-img text-center">
                    <img src="{{ asset('assets/images/about/3.png') }}" alt="Guérison de l'arthrite" class="img-fluid">
                    <p class="mt-2">Amélioration notable des cas d’<strong>arthrite</strong> grâce à nos solutions naturelles.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="award-img text-center">
                    <img src="{{ asset('assets/images/about/4.png') }}" alt="Guérison de l'insomnie" class="img-fluid">
                    <p class="mt-2">Soulagement efficace des troubles du <strong>sommeil</strong>, y compris l’insomnie chronique.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="award-img text-center">
                    <img src="{{ asset('assets/images/about/1.png') }}" alt="Guérison des infections" class="img-fluid">
                    <p class="mt-2">Renforcement des défenses naturelles contre diverses <strong>infections</strong>.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="award-img text-center">
                    <img src="{{ asset('assets/images/about/2.png') }}" alt="Guérison des maux de tête" class="img-fluid">
                    <p class="mt-2">Réduction significative des <strong>maux de tête</strong> et migraines de manière naturelle.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="award-img text-center">
                    <img src="{{ asset('assets/images/about/5.png') }}" alt="Guérison des troubles digestifs" class="img-fluid">
                    <p class="mt-2">Amélioration du confort intestinal et traitement des <strong>troubles digestifs</strong>.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="award-img text-center">
                    <img src="{{ asset('assets/images/about/6.png') }}" alt="Guérison de la fatigue chronique" class="img-fluid">
                    <p class="mt-2">Lutte contre la <strong>fatigue chronique</strong> et restauration durable de l’énergie.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="section team">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title text-center">
                <h2 class="mb-4">Rencontrez notre équipe d'experts</h2>
                <div class="divider mx-auto my-4"></div>
                <p>Une équipe passionnée, engagée à créer des solutions naturelles efficaces pour améliorer votre santé, renforcer votre bien-être et transformer votre quotidien.</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team-block mb-5 mb-lg-0">
                <img src="{{ asset('assets/images/team/img6.jpg') }}" alt="Alice Dupont - Expert en formulation" class="img-fluid w-100">
                <div class="content">
                  <h4 class="mt-4 mb-0"><a href="#">Alice Dupont</a></h4>
                  <p>Spécialiste en formulation de produits naturels, elle conçoit des solutions innovantes adaptées à vos besoins de santé.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team-block mb-5 mb-lg-0">
                <img src="{{ asset('assets/images/team/img13.jpg') }}" alt="Marc Leroy - Chercheur en santé" class="img-fluid w-100">
                <div class="content">
                  <h4 class="mt-4 mb-0"><a href="#">Marc Leroy</a></h4>
                  <p>Chercheur passionné en santé et innovations pharmaceutiques, il veille à l’efficacité et à la sécurité de nos formules.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team-block mb-5 mb-lg-0">
                <img src="{{ asset('assets/images/team/img19.jpg') }}" alt="Sonia Martin - Responsable qualité" class="img-fluid w-100">
                <div class="content">
                  <h4 class="mt-4 mb-0"><a href="#">Sonia Martin</a></h4>
                  <p>Responsable qualité, elle garantit la conformité et la rigueur de chaque produit que nous mettons à votre disposition.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team-block">
                <img src="{{ asset('assets/images/team/img21.jpg') }}" alt="Karim Benali - Spécialiste réglementation" class="img-fluid w-100">
                <div class="content">
                  <h4 class="mt-4 mb-0"><a href="#">Karim Benali</a></h4>
                  <p>Expert en réglementation et conformité, il veille à ce que nos produits respectent les normes les plus strictes du secteur.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="section testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-6">
              <div class="section-title">
                <h2 class="mb-4">Ils témoignent de leur transformation</h2>
                <div class="divider my-4"></div>
                <p>Nos produits et notre réseau SHINY ont profondément amélioré la vie de nombreuses personnes. Découvrez ces témoignages authentiques qui illustrent santé, bien-être et réussite personnelle.</p>
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
                  <h4>“Grâce aux compléments SHINY, j’ai retrouvé une énergie et une qualité de vie améliorées”</h4>
                  <span>Amina S., adhérente SHINY</span>
                </div>
                <i class="icofont-quote-right"></i>
              </div>

              <div class="testimonial-block">
                <div class="client-info">
                  <h4>“Les produits SHINY m’ont aidé à soutenir mon traitement médical avec de réels résultats”</h4>
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
                  <h4>“SHINY a redonné espoir et sérénité à ma famille, en nous réunissant autour d’un projet porteur”</h4>
                  <span>Mahama K., adhérent</span>
                </div>
                <i class="icofont-quote-right"></i>
              </div>

              <div class="testimonial-block">
                <div class="client-info">
                  <h4>“Le réseau SHINY est une formidable opportunité de croissance personnelle et professionnelle”</h4>
                  <span>Chantal D., formatrice</span>
                </div>
                <i class="icofont-quote-right"></i>
              </div>

            </div>
          </div>
        </div>
      </section>


@endsection
