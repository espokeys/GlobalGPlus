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
          <h1 style="font-size: 52px; font-weight: 700; color: #223a66;"><span style="color:tomato">B</span>ienvenue</h1>
          <img src="{{ asset('assets/images/bg/soulign.png') }}"
               alt="Soulignement décoratif"
               style="display: block; margin: 10px auto 0; height: 25px;">
        </div>
      </div>

      <!-- Image et texte côte à côte -->
      <div class="row align-items-start">

        <!-- Colonne image -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="{{ asset('assets/images/team/img21.jpg') }}" alt="Spécialiste réglementation" class="img-fluid w-100 rounded shadow">
        </div>

        <!-- Colonne texte -->
        <div class="col-lg-6">
          <h2 class="mb-3" style="font-size: 24px; color: #223a66;">À propos de Global G+ SARL</h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
            Global G+ est un cabinet de conseil basé à Lomé (Togo), spécialisé dans la
            <strong>Représentation commerciale</strong>, le <strong>Marketing relationnel</strong>
            et la <strong>Formation</strong> autour des <strong>produits pour le bien-être et la santé</strong>.
            Nous œuvrons à faire connaître et développer des solutions de santé innovantes et accessibles,
            en accompagnant les professionnels de santé et les acteurs du secteur.
          </p>
          <img src="{{ asset('assets/images/about/sign.png') }}" alt="Signature Global G+" class="img-fluid mt-3" style="max-width: 200px;">
        </div>

      </div>
    </div>
  </section>




  <section class="feature-page">
    <div class="container">
        <h1 class="mt-2 mb-5 text-center" style="font-size: 42px; font-weight: 700; color: #223a66;">
            Nos Realisations
           </h1>
      <div class="row">
        <div class="col-lg-3 col-md-6">

          <div class="about-block-item mb-5 mb-lg-0">
            <img src="{{ asset('assets/images/about/img21.jpg') }}" alt="Produits naturels pour enfants" class="img-fluid w-100">
            <h4 class="mt-3">Produits naturels pour enfants</h4>
            <p>Des solutions saines et sûres spécialement formulées pour le bien-être des plus jeunes.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="about-block-item mb-5 mb-lg-0">
            <img src="{{ asset('assets/images/about/img39.jpg') }}" alt="Conseils en santé personnalisés" class="img-fluid w-100">
            <h4 class="mt-3">Conseils en santé personnalisés</h4>
            <p>Accompagnement expert pour choisir les produits adaptés à vos besoins spécifiques.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="about-block-item mb-5 mb-lg-0">
            <img src="{{ asset('assets/images/about/img49.jpg') }}" alt="Produits innovants et de qualité" class="img-fluid w-100">
            <h4 class="mt-3">Produits innovants et de qualité</h4>
            <p>Nous sélectionnons les meilleures solutions pour garantir votre santé au quotidien.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="about-block-item">
            <img src="{{ asset('assets/images/about/img83.jpg') }}" alt="Experts en santé et bien-être" class="img-fluid w-100">
            <h4 class="mt-3">Experts en santé et bien-être</h4>
            <p>Une équipe dédiée pour vous accompagner dans votre parcours vers une meilleure santé.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section awards">
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-lg-4">
          <h2 class="title-color">Résultats de nos produits</h2>
          <div class="divider mt-4 mb-5 mb-lg-0"></div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="award-img text-center">
                <img src="{{ asset('assets/images/about/3.png') }}" alt="Guérison de l'arthrite" class="img-fluid">
                <p class="mt-2">Guérison de : Arthrite</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="award-img text-center">
                <img src="{{ asset('assets/images/about/4.png') }}" alt="Guérison de l'insomnie" class="img-fluid">
                <p class="mt-2">Guérison de : Insomnie</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="award-img text-center">
                <img src="{{ asset('assets/images/about/1.png') }}" alt="Guérison des infections" class="img-fluid">
                <p class="mt-2">Guérison de : Infections</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="award-img text-center">
                <img src="{{ asset('assets/images/about/2.png') }}" alt="Guérison des maux de tête" class="img-fluid">
                <p class="mt-2">Guérison de : Maux de tête</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="award-img text-center">
                <img src="{{ asset('assets/images/about/5.png') }}" alt="Guérison des troubles digestifs" class="img-fluid">
                <p class="mt-2">Guérison de : Troubles digestifs</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="award-img text-center">
                <img src="{{ asset('assets/images/about/6.png') }}" alt="Guérison de la fatigue chronique" class="img-fluid">
                <p class="mt-2">Guérison de : Fatigue chronique</p>
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
            <h2 class="mb-4">Rencontrez notre équipe d'experts produits</h2>
            <div class="divider mx-auto my-4"></div>
            <p>Notre équipe dédiée travaille avec passion pour développer des produits qui favorisent votre santé et votre bien-être au quotidien.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team-block mb-5 mb-lg-0">
            <img src="{{ asset('assets/images/team/img6.jpg') }}" alt="Expert en formulation" class="img-fluid w-100">

            <div class="content">
              <h4 class="mt-4 mb-0"><a href="#">Alice Dupont</a></h4>
              <p>Expert en formulation de produits naturels</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team-block mb-5 mb-lg-0">
            <img src="{{ asset('assets/images/team/img13.jpg') }}" alt="Chercheur en santé" class="img-fluid w-100">

            <div class="content">
              <h4 class="mt-4 mb-0"><a href="#">Marc Leroy</a></h4>
              <p>Chercheur en santé et innovations pharmaceutiques</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team-block mb-5 mb-lg-0">
            <img src="{{ asset('assets/images/team/img19.jpg') }}" alt="Responsable qualité" class="img-fluid w-100">

            <div class="content">
              <h4 class="mt-4 mb-0"><a href="#">Sonia Martin</a></h4>
              <p>Responsable qualité et contrôle des produits</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team-block">
            <img src="{{ asset('assets/images/team/img21.jpg') }}" alt="Spécialiste réglementation" class="img-fluid w-100">

            <div class="content">
              <h4 class="mt-4 mb-0"><a href="#">Karim Benali</a></h4>
              <p>Spécialiste réglementation et conformité</p>
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
            <h2 class="mb-4">Témoignages sur nos produits</h2>
            <div class="divider my-4"></div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 testimonial-wrap offset-lg-6">

          <div class="testimonial-block">
            <div class="client-info">
              <h4>Guéri de la fièvre</h4>
              <span>Jean D.</span>
            </div>
            <i class="icofont-quote-right"></i>
          </div>

          <div class="testimonial-block">
            <div class="client-info">
              <h4>Guéri du rhume</h4>
              <span>Marie T.</span>
            </div>
            <i class="icofont-quote-right"></i>
          </div>

          <div class="testimonial-block">
            <div class="client-info">
              <h4>Guéri des douleurs articulaires</h4>
              <span>Ali K.</span>
            </div>
            <i class="icofont-quote-right"></i>
          </div>

          <div class="testimonial-block">
            <div class="client-info">
              <h4>Guéri des troubles digestifs</h4>
              <span>Sophie L.</span>
            </div>
            <i class="icofont-quote-right"></i>
          </div>

          <div class="testimonial-block">
            <div class="client-info">
              <h4>Guéri de l’insomnie</h4>
              <span>Paul M.</span>
            </div>
            <i class="icofont-quote-right"></i>
          </div>

        </div>
      </div>
    </div>
  </section>


@endsection
